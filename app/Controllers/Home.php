<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('public/home');
    }

    public function register()
    {
        return view('public/register');
    }
}