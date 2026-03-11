<?php

namespace App\Controllers;

use App\Models\PostModel;

class Admin extends BaseController
{
    protected $postModel;

    public function __construct()
    {
        $this->postModel = new PostModel();
    }

    private function checkLogin()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')->send();
        }
    }

    public function index()
    {
        $this->checkLogin();

        $data['totalPosts'] = $this->postModel->countAll();

        return view('admin/dashboard', $data);
    }
}
