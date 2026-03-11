<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'contact@example.com';

  // Correct path to the PHP Email Form library
  $php_email_form = __DIR__ . '/../vendor/php-email-form/php-email-form.php';
  if (file_exists($php_email_form)) {
    require_once($php_email_form);
    // Ensure the class exists after including the file
    if (!class_exists('PHP_Email_Form')) {
      // Define a stub class to avoid fatal error if the library is missing or incomplete
      class PHP_Email_Form {
        public $ajax = false;
        public $to;
        public $from_name;
        public $from_email;
        public $subject;
        public $smtp;
        public function add_message($msg, $label, $min_length = 0) {}
        public function send() { return 'PHP_Email_Form library not found. Please install the library.'; }
      }
    }
  } else {
    // Define a stub class to avoid fatal error if the library file is missing
    class PHP_Email_Form {
      public $ajax = false;
      public $to;
      public $from_name;
      public $from_email;
      public $subject;
      public $smtp;
      public function add_message($msg, $label, $min_length = 0) {}
      public function send() { return 'PHP_Email_Form library not found. Please install the library.'; }
    }
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>
