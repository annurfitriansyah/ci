<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class Forgot_model extends CI_Model{
    
    //var $table = 'admin_masjid';

    public function save_data($data,$table){
        $this->db->insert($table, $data);
        }

    function cek_email($email){
        $query=$this->db->WHERE (" email='$email' ");
        $query = $this->db->get('admin_masjid');

        if($query->num_rows()>0){
            redirect('http://localhost/CI/login');
        }
        else {
            $this->session->set_flashdata('info','Maaf E-mail anda salah');
         redirect('http://localhost/CI/forgot');
        return $query;
        }    
    }  

    public function get_masjid()
    {
       $hasil=$this->db->query("SELECT * FROM masjid");
        return $hasil;
    }
}