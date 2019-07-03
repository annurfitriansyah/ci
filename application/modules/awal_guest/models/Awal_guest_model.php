<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class Awal_guest_model extends CI_Model{
    
    //var $table = 'kegiatan';

    

    function count($table){
        $this->db->from($table);
        //$this->db->where('id_masjid = 0');

        //$query = $this->db->get();
        return $this->db->count_all_results();
    }
    
}