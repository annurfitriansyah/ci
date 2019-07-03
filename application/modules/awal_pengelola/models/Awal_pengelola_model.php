<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class Awal_pengelola_model extends CI_Model{
    
    //var $table = 'kegiatan';

    

    function get_masjid(){
		$this->db->from('masjid');
		$this->db->where('status',0);
		return $this->db->get()->row();
		
    }
    function get_kegiatan($id){
		$this->db->from('kegiatan');
		$this->db->where('id_masjid',$id);
		return $this->db->get()->row();
		
	}
    function count($table){
        $this->db->from($table);
        //$this->db->where('id_masjid',$id);

        //$query = $this->db->get();
        return $this->db->count_all_results();
    }

    function count_aktif($table){
        $this->db->from($table);
        $this->db->where('status',1);

        //$query = $this->db->get();
        return $this->db->count_all_results();
    }
    function count_taktif($table){
        $this->db->from($table);
        $this->db->where('status',0);

        //$query = $this->db->get();
        return $this->db->count_all_results();
    }
    
}


