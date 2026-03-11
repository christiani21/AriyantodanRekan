<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function processLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Login sederhana (bisa ganti ke database nanti)
        if ($username === 'admin' && $password === '123456') {

            session()->set([
                'username'   => 'admin',
                'isLoggedIn' => true
            ]);

            return redirect()->to('/admin');
        }

        return redirect()->back()->with('error', 'Username atau password salah');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/blog');
    }
}
