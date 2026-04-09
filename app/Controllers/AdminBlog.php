<?php

namespace App\Controllers;

use App\Models\PostModel;

class AdminBlog extends BaseController
{
    protected $postModel;

    public function __construct()
    {
        $this->postModel = new PostModel();
        helper(['form', 'url']);
    }

    // ======================
    // LIST DATA (ADMIN)
    // ======================
    public function index()
    {

        $data['posts'] = $this->postModel
            ->orderBy('created_at', 'DESC')
            ->findAll();

        return view('admin/blog_list', $data);
    }

    public function create()
    {
        return view('admin/blog_form');
    }

    public function store()
    {

        $title = $this->request->getPost('title');
        $slug  = url_title($title, '-', true);

        $imageFile = $this->request->getFile('image');
        $imageName = null;

        if ($imageFile && $imageFile->isValid()) {
            $imageName = $imageFile->getRandomName();
            $imageFile->move('uploads', $imageName);
        }

        $this->postModel->save([
            'title'    => $title,
            'slug'     => $slug,
            'content'  => $this->request->getPost('content'),
            'category' => $this->request->getPost('category'),
            'image'    => $imageName
        ]);

        return redirect()->to('/admin/blog');
    }


    public function edit($id)
    {

        $data['post'] = $this->postModel->find($id);
        return view('admin/blog_form', $data);
    }

    public function update($id)
    {

        $post = $this->postModel->find($id);

        $title = $this->request->getPost('title');
        $slug  = url_title($title, '-', true);

        $imageFile = $this->request->getFile('image');
        $imageName = $post['image'];

        if ($imageFile && $imageFile->isValid()) {
            $imageName = $imageFile->getRandomName();
            $imageFile->move('uploads', $imageName);
        }

        $this->postModel->update($id, [
            'title'    => $title,
            'slug'     => $slug,
            'content'  => $this->request->getPost('content'),
            'category' => $this->request->getPost('category'),
            'image'    => $imageName
        ]);

        return redirect()->to('/admin/blog');
    }


    public function delete($id)
    {
        $this->postModel->delete($id);
        return redirect()->to('/admin/blog');
    }
}
