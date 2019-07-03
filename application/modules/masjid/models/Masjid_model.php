<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
class Masjid_model extends CI_Model{

    var $table  = 'masjid';

     public function save_data($data){
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
        }


      public function tambah($d){
        $this->db->insert('masjid', $d);

        return ($this->db->affecterd_rows()>0);
        }

      public function keamanan(){
        $username = $this->session->sess_destroy('username');
        if(!empty($username)){
          $this->session->sess_destroy();
          redirect('http://localhost/CI/login');

        
        }
      }

}