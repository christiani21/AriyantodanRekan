<?php

namespace App\Controllers;

use App\Models\PostModel;

class Blog extends BaseController
{
    protected $postModel;

    public function __construct()
    {
        $this->postModel = new PostModel();
        helper(['form', 'url']);
    }

    // ======================
    // PUBLIC BLOG
    // ======================
    public function index()
    {
        $data['posts'] = $this->postModel
            ->orderBy('created_at', 'DESC')
            ->paginate(6); // tampil 6 artikel per halaman
        $data['categories'] = $this->postModel->distinct()->select('category')->findAll();
        $data['pager'] = $this->postModel->pager;

        return view('blog', $data);
    }
    public function detail($id)
    {
        $postModel = new \App\Models\PostModel();
        $post = $this->postModel->find($id);

        if (!$post) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('detail_blog', ['post' => $post]);
    }

    // ======================
    // ADMIN AREA
    // ======================
    private function checkLogin()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
    }

    public function create()
    {
        $this->checkLogin();
        return view('admin/blog_form');
    }

    public function store()
    {
        $this->checkLogin();

        $title = $this->request->getPost('title');
        $slug  = url_title($title, '-', true);

        $this->postModel->save([
            'title'   => $title,
            'slug'    => $slug,
            'content' => $this->request->getPost('content'),
            'category' => $this->request->getPost('category')
        ]);

        return redirect()->to('/blog')
            ->with('success', 'Artikel berhasil ditambahkan');
    }  

    public function edit($id)
    {
        $this->checkLogin();
        $post = $this->postModel->find($id);

        return view('admin/blog_form', ['post' => $post]);
    }

    public function update($id)
    {
        $this->checkLogin();

        $title = $this->request->getPost('title');
        $slug  = url_title($title, '-', true);

        $this->postModel->update($id, [
            'title'   => $title,
            'slug'    => $slug,
            'content' => $this->request->getPost('content'),
            'category' => $this->request->getPost('category')
        ]);

        return redirect()->to('/blog')
            ->with('success', 'Artikel berhasil diupdate');
    }

    public function delete($id)
    {
        $this->checkLogin();
        $this->postModel->delete($id);

        return redirect()->to('/blog')
            ->with('success', 'Artikel berhasil dihapus');
    }

    public function category($category)
    {
        $data = [
            'posts' => $this->postModel->where('category', $category)->orderBy('created_at', 'DESC')->findAll(),
            'categories' => $this->postModel->distinct()->select('category')->findAll()
        ];
        return view('blog', $data);
    }
}