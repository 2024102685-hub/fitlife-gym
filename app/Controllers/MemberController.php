<?php

namespace App\Controllers;

use App\Models\MembershipPlanModel;
use App\Models\MemberModel;
use App\Models\PaymentModel;


class MemberController extends BaseController
{
    public function register()
    {
        return view('public/register');
    }

    public function save()
    {
        $model = new MemberModel();

        // Check duplicate email
        $email = $this->request->getPost('email');

        if ($model->where('email', $email)->first()) {

            return redirect()->back()
                ->withInput()
                ->with('error', 'Email already registered.');

        }

        // Check password confirmation
        if ($this->request->getPost('password') != $this->request->getPost('confirm_password')) {

            return redirect()->back()->with('error', 'Password and Confirm Password do not match.');

        }

        // Generate Member ID
        $lastMember = $model->orderBy('member_id', 'DESC')->first();

        if ($lastMember) {

            $number = (int) substr($lastMember['member_id'], 3) + 1;

        } else {

            $number = 1;

        }

        $memberID = 'MEM' . str_pad($number, 6, '0', STR_PAD_LEFT);

        // Save data
        $data = [

            'member_id' => $memberID,

            'full_name' => $this->request->getPost('full_name'),

            'ic_number' => $this->request->getPost('ic_number'),

            'phone_number' => $this->request->getPost('phone_number'),

            'email' => $this->request->getPost('email'),

            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),

            'gender' => $this->request->getPost('gender'),

            'registration_date' => date('Y-m-d'),

            'membership_status' => 'Pending'

        ];

        $model->insert($data);

        return redirect()->to('/login')->with('success', 'Registration Successful!');
    }

    public function dashboard()
    {
        if (!session()->get('logged_in') || session()->get('user_type') != 'member') {

            return redirect()->to('/login');

        }

        $memberModel = new MemberModel();

        $planModel = new MembershipPlanModel();

        $member = $memberModel->find(session('member_id'));

        $plan = null;

        if (!empty($member['plan_id'])) {

            $plan = $planModel->find($member['plan_id']);

        }

        return view('member/dashboard', [

            'member' => $member,

            'plan' => $plan

        ]);
    }

    // ==========================================
    // View Member Profile
    // ==========================================

    public function profile()
    {
        // Check whether the user has logged in as a member
        if (!session()->get('logged_in') || session()->get('user_type') != 'member') {

            return redirect()->to('/login');

        }

        $memberModel = new MemberModel();

        $paymentModel = new PaymentModel();

        $planModel = new MembershipPlanModel();

        // Get member information
        $member = $memberModel
            ->where('member_id', session()->get('member_id'))
            ->first();

        // Get payment history
        $payments = $paymentModel
            ->where('member_id', $member['member_id'])
            ->orderBy('payment_date', 'DESC')
            ->findAll();

        $plan = null;

        if (!empty($member['plan_id'])) {

            $plan = $planModel->find($member['plan_id']);

        }

        // Pass data to profile page
        return view('member/profile', [

            'member' => $member,

            'payments' => $payments,

            'plan' => $plan

        ]);
    }

    public function updateProfile()
    {
        $model = new MemberModel();

        $member = $model->find(session('member_id'));

        return view('member/update_profile', [

            'member' => $member

        ]);
    }

    public function saveUpdateProfile()
    {
        $model = new MemberModel();

        $model->update(session('member_id'), [

            'full_name' => $this->request->getPost('full_name'),

            'ic_number' => $this->request->getPost('ic_number'),

            'phone_number' => $this->request->getPost('phone_number')

        ]);

        // Update session
        session()->set('full_name', $this->request->getPost('full_name'));

        return redirect()->to('/member/profile')
            ->with('success', 'Your profile has been updated successfully.');
    }

    /* ==========================================================
                     Display Membership Plans
    ========================================================== */

    public function subscriptionPlans()
    {
        $planModel = new MembershipPlanModel();

        $memberModel = new MemberModel();

        // Get all membership plans
        $plans = $planModel->findAll();

        // Get current member
        $member = $memberModel->find(session('member_id'));

        return view('member/subscription_plans', [

            'plans' => $plans,

            'member' => $member

        ]);
    }

    /* ==========================================================
                Select Membership Plan
    ========================================================== */

    public function selectPlan()
    {
        $memberModel = new MemberModel();

        // Get selected plan
        $planID = $this->request->getPost('plan_id');

        // Save selected plan into member table
        $memberModel->update(

            session('member_id'),

            [

                'plan_id' => $planID

            ]

        );

        // Redirect to Payment page
        return redirect()->to('/member/payment')
            ->with('success', 'Membership plan selected successfully.');
    }

    /* ==========================================================
                     Payment Page
========================================================== */

    public function payment()
    {
        $memberModel = new MemberModel();

        $planModel = new MembershipPlanModel();

        $paymentModel = new PaymentModel();

        // Get current member
        $member = $memberModel->find(session('member_id'));

        // Redirect if no membership plan is selected
        if (empty($member['plan_id'])) {

            return redirect()->to('/member/subscription');

        }

        // Get selected membership plan
        $plan = $planModel->find($member['plan_id']);

        // Get payment history
        $payments = $paymentModel
            ->where('member_id', $member['member_id'])
            ->orderBy('payment_date', 'DESC')
            ->findAll();

        return view('member/payment', [

            'member' => $member,

            'plan' => $plan,

            'payments' => $payments

        ]);
    }
    /* ==========================================================
                         Save Payment
    ========================================================== */

    public function savePayment()
    {
        $paymentModel = new PaymentModel();

        $memberModel = new MemberModel();

        $planModel = new MembershipPlanModel();

        $member = $memberModel->find(session('member_id'));

        $plan = $planModel->find($member['plan_id']);

        // Generate Payment ID
        $lastPayment = $paymentModel->orderBy('payment_id', 'DESC')->first();

        if ($lastPayment) {

            $number = (int) substr($lastPayment['payment_id'], 3) + 1;

        } else {

            $number = 1;

        }

        $paymentID = 'PAY' . str_pad($number, 6, '0', STR_PAD_LEFT);

        $paymentModel->insert(
            [

                'payment_id' => $paymentID,

                'member_id' => $member['member_id'],

                'plan_id' => $plan['plan_id'],

                'payment_date' => date('Y-m-d'),

                'payment_method' => $this->request->getPost('payment_method'),

                'amount' => $plan['price'],

                'payment_status' => 'Paid'

            ]

        );

        // Save payment id into member table
        $memberModel->update(

            $member['member_id'],

            [

                'payment_id' => $paymentID,
                'membership_status' => 'Active'

            ]

        );

        return redirect()->to('/member/profile')
            ->with('success', 'Payment completed successfully.');

    }

}