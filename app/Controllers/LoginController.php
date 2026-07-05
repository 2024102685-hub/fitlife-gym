<?php

namespace App\Controllers;

use App\Models\MemberModel;
use App\Models\AdminModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('public/login');
    }

    public function authenticate()
{
    $adminModel = new AdminModel();
    $memberModel = new MemberModel();

    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');

    // ==========================
    // CHECK ADMIN
    // ==========================
    $admin = $adminModel->where('email', $email)->first();

    if ($admin) {

        if ($password != $admin['password']) {

            return redirect()->back()->with('error', 'Incorrect password.');

        }

        session()->set([

            'admin_id'  => $admin['admin_id'],
            'fullname'  => $admin['fullname'],
            'email'     => $admin['email'],
            'user_type' => 'admin',
            'logged_in' => true

        ]);

        return redirect()->to('/admin/dashboard');
    }

    // ==========================
    // CHECK MEMBER
    // ==========================
    $member = $memberModel->where('email', $email)->first();

    if (!$member) {

        return redirect()->back()->with('error', 'Email not found.');

    }

    if (!password_verify($password, $member['password'])) {

        return redirect()->back()->with('error', 'Incorrect password.');

    }

    session()->set([

        'member_id'  => $member['member_id'],
        'full_name'  => $member['full_name'],
        'email'      => $member['email'],
        'user_type'  => 'member',
        'logged_in'  => true

    ]);

    return redirect()->to('/member/dashboard');
}


    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
}