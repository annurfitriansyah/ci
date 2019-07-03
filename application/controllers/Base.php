<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Base extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //$this->load->model('login_model');
    }

    function index(){

        $user = $this->db->get_where('admin_masjid', ['email' => $email])->row_array();

        $level =  $data['user']['level'];
        if ($level == 0) {
            $value = 'Administrator';
        } else {
            $value = 'Pengelola';
        }

        $data_user = array(
            
           
        );
        $this->theme_pengelola->load($data_user);
    }

}