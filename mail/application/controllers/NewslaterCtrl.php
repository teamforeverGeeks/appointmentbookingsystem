<?php

use PHPMailer\PHPMailer\PHPMailer;

defined('BASEPATH') OR exit('No direct script access allowed');

class NewslaterCtrl extends CI_Controller {
 

    public function __construct() {
        parent::__construct();
        $this->load->model("Newslatter");
    
    }

    function subscribe() {

        $this->form_validation->set_rules('subsc_email', 'Email Address', 'trim|required|valid_email|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            if (form_error('subsc_email')) {
                echo form_error('subsc_email');
            } else if ($this->validate_ip() == FALSE) {
                echo "Server error try again latter";
            }
        } else {

           
            $email = strip_tags($this->input->post('subsc_email'));


            $mail = $this->phpmailerlibrary->load();
            $mail->addAddress($email, "Hello");
            $mail->Subject = "Thank you for subscribing to our newsletter!";

            $mydata = array('message' => 'I am a message that will be passed to a view');
            $mail_message = $this->load->view('front/mail-templates/newslater', $mydata, true);
            $mail->Body = $mail_message;

            if ($mail->send()) {
                 $this->Newslatter->subscribe($email);
                echo "success";
            } else {
                echo "System problem , please try again after some time";
            }
        }
    }

   

}
