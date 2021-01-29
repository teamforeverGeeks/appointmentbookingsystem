<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Newslatter extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function subscribe($email) {

        $date = new DateTime();
        $current_date = $date->format('Y/m/d H:i:s');

        if ($this->getSubscriber($email) == TRUE) {
            $this->db->query("INSERT INTO subscribers (email,the_date,ip) VALUES ('$email','$current_date')");
          
           
            return TRUE;
        } 
    }

    function getSubscriber($email) {
        $query = $this->db->query("SELECT count(id)as total FROM subscribers WHERE email = '$email'");
        foreach ($query->result_array() as $user) {
            if ($user['total'] == 1) {
                return FALSE;
            } else {
                return TRUE;
            }
        }
    }

}
