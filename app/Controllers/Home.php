<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function beranda(): string
    {
        return view(name: 'beranda');
    }
    public function tentang_kami(): string
    {
        return view(name: 'tentang_kami');
    }
    public function layanan(): string
    {
        return view(name: 'layanan');
    }
    public function portofolio(): string
    {
        return view(name: 'portofolio');
    }
    public function rekan(): string
    {
        return view(name: 'rekan');
    }
    // public function blog(): string
    // {
    //     return view(name: 'blog');
    // }
    public function kontak(): string
    {
        return view(name: 'kontak');
    }
    public function detail_blog(): string
    {
        return view(name: 'detail_blog');
    }
    // public function detail_portofolio(): string
    // {
    //     return view(name: 'detail_portofolio');
    // }
    public function detail_layanan(): string
    {
        return view(name: 'detail_layanan');
    }
    public function layanan_hukum()
    {
        $data['services'] = [
            [
                'category' => 'Litigasi',
                'title' => 'Litigasi Perdata',
                'img' => 'litigasi.jpg',
                'desc' => 'Penanganan perkara perdata di pengadilan...'
            ],
            [
                'category' => 'Non Litigasi',
                'title' => 'Legal Opinion',
                'img' => 'nonlitigasi.jpg',
                'desc' => 'Pemberian opini hukum profesional...'
            ],
            [
                'category' => 'Retainer',
                'title' => 'Retainer Corporate',
                'img' => 'retainer.jpg',
                'desc' => 'Pendampingan hukum berkelanjutan...'
            ],
        ];

        return view('layanan_view', $data);
    }

    public function kirim_email()
    {
        $email_address = $this->request->getPost('email');

        $email = \Config\Services::email();

        $email->setFrom('christianindrawan12@gmail.com', 'Ariyanto dan Rekan');
        $email->setTo($email_address);
        $email->setSubject('Terima Kasih Telah Menghubungi Kami');
        $email->setMessage('Kami akan segera merespons pertanyaan Anda.');

        if ($email->send()) {
            return redirect()->to('/beranda')->with('success', 'Email berhasil dikirim');
        } else {
            echo $email->printDebugger(['headers']);
        }
    }

}
