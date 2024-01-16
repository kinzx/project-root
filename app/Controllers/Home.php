<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function tambah(): string
    {
        return view('tambah');
    }
    public function tes(): string
    {
        return view('tes');
    }
    public function profile(): string
    {
        return view('profile');
    }
}
