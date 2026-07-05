<?php

namespace App\Controllers;

use App\Models\MemberModel;
use App\Models\MembershipPlanModel;
use App\Models\PaymentModel;

class AdminController extends BaseController
{
    public function dashboard()
    {
        $memberModel = new MemberModel();
        $paymentModel = new PaymentModel();

        $data['totalMembers'] = $memberModel->countAll();

        $data['activeMembers'] = (new MemberModel())
            ->where('membership_status', 'Active')
            ->countAllResults();

        $data['pendingMembers'] = (new MemberModel())
            ->where('membership_status', 'Pending')
            ->countAllResults();

        $data['totalRevenue'] = $paymentModel
            ->selectSum('amount')
            ->first()['amount'] ?? 0;

        // Recent Members
        $data['recentMembers'] = (new MemberModel())
            ->orderBy('member_id', 'DESC')
            ->findAll(5);

        // Recent Payments
        $data['recentPayments'] = (new PaymentModel())
            ->orderBy('payment_id', 'DESC')
            ->findAll(5);

        return view('admin/dashboard', $data);
    }

    public function members()
    {
        $memberModel = new MemberModel();

        $keyword = $this->request->getGet('search');
        $status = $this->request->getGet('status');

        $builder = $memberModel;

        if (!empty($keyword)) {

            $builder->groupStart()
                ->like('member_id', $keyword)
                ->orLike('full_name', $keyword)
                ->groupEnd();

        }

        if (!empty($status)) {

            $builder->where('membership_status', $status);

        }

        $data['members'] = $builder
            ->orderBy('registration_date', 'DESC')
            ->findAll();

        return view('admin/members', $data);
    }

    public function viewMember($id)
    {
        $memberModel = new \App\Models\MemberModel();
        $planModel = new \App\Models\MembershipPlanModel();
        $paymentModel = new \App\Models\PaymentModel();

        // Get member
        $member = $memberModel->find($id);

        // Get membership plan
        $plan = null;

        if (!empty($member['plan_id'])) {

            $plan = $planModel->find($member['plan_id']);

        }

        // Get latest payment
        $payment = $paymentModel
            ->where('member_id', $member['member_id'])
            ->orderBy('payment_date', 'DESC')
            ->first();

        return view('admin/view_member', [

            'member' => $member,

            'plan' => $plan,

            'payment' => $payment

        ]);
    }

    public function editMember($id)
    {
        $memberModel = new \App\Models\MemberModel();
        $planModel = new \App\Models\MembershipPlanModel();

        $member = $memberModel->find($id);

        $plans = $planModel->findAll();

        return view('admin/edit_member', [

            'member' => $member,

            'plans' => $plans

        ]);
    }

    public function updateMember($id)
    {
        $memberModel = new \App\Models\MemberModel();

        $memberModel->update($id, [

            'full_name' => $this->request->getPost('full_name'),

            'email' => $this->request->getPost('email'),

            'phone_number' => $this->request->getPost('phone_number'),

            'membership_status' => $this->request->getPost('membership_status'),

            'plan_id' => $this->request->getPost('plan_id')

        ]);

        return redirect()->to('/admin/members')
            ->with('success', 'Member updated successfully.');
    }

    public function revenue()
    {
        $paymentModel = new \App\Models\PaymentModel();

        $payments = $paymentModel
            ->select('payment.*, member.full_name, membership_plan.plan_name')
            ->join('member', 'member.member_id = payment.member_id')
            ->join('membership_plan', 'membership_plan.plan_id = payment.plan_id', 'left')
            ->orderBy('payment.payment_id', 'DESC')
            ->findAll();

        $data = [

            'payments' => $payments,

            'totalRevenue' => $paymentModel
                ->selectSum('amount')
                ->first()['amount'] ?? 0,

            'totalPayments' => $paymentModel
                ->countAll(),

            'averagePayment' => $paymentModel
                ->selectAvg('amount')
                ->first()['amount'] ?? 0,

            'paidTransactions' => $paymentModel
                ->where('payment_status', 'Paid')
                ->countAllResults()

        ];

        return view('admin/revenue_report', $data);
    }
}