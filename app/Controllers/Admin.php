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

    public function index()
    {
        $data['totalPosts'] = $this->postModel->countAll();

        return view('admin/dashboard', $data);
    }
}
