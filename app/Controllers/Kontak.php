<?php

namespace App\Controllers;

class Kontak extends BaseController
{

    public function kirim_email()
    {
        $email_address = $this->request->getPost('email');
        $name = $this->request->getPost('name');
        $subject = $this->request->getPost('subject');
        $message = "Get email from: $name\n\n, with email address: $email_address\n\nMessage: " . $this->request->getPost('message');

        $email = \Config\Services::email();

        $email->setFrom('christianindrawan12@gmail.com', 'Ariyanto dan Rekan');
        $email->setTo('kantorariyantodanrekan@gmail.com');
        $email->setSubject($subject);
        $email->setMessage($message);
        
        if ($email->send()) {
            return redirect()->to('/kontak')->with('success', 'Email berhasil dikirim');
        } else {
            echo $email->printDebugger(['headers']);
        }
    }

}
