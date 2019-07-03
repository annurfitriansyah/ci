<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class Daftar_model extends CI_Model{
    
    var $table = 'admin_masjid';

    public function save_data($data){
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
        }


    public function get_masjid()
    {
        $this->db->from('masjid');
        $this->db->where('status = 1');

        $hasil = $this->db->get();
        return $hasil;
    }
}