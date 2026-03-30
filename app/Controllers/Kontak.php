<?php

namespace App\Controllers;

class Kontak extends BaseController
{

    public function kirim_email()
    {
        $email_address = $this->request->getPost('email');
        $name = $this->request->getPost('name');
        $subject = $this->request->getPost('subject');
        $message = "Email dari: $name\n\n,dengan alamat email : $email_address\n\Pesan: " . $this->request->getPost('message');

        $email = \Config\Services::email();

        $email->setFrom($email_address, $name);
        $email->setTo('info.ariyantodanrekan@gmail.com');
        $email->setSubject($subject);
        $email->setMessage($message);
        
        if ($email->send()) {
            return redirect()->to('/kontak')->with('success', 'Email berhasil dikirim');
        } else {
            echo $email->printDebugger(['headers']);
        }
    }

}
