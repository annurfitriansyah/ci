<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Awal_guest extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('awal_guest_model');
        $this->load->helper('url');
        $this->load->library('session');
        
    }
 
    function index(){
        $kegiatan 	= $this->awal_guest_model->count('kegiatan');
        $masuk		= $this->awal_guest_model->count('pemasukan');
        $keluar		= $this->awal_guest_model->count('pengeluaran');
        $masjid     = $this->awal_guest_model->count('masjid');

        $data = array(
        	'kegiatan' 		=> $kegiatan,
        	'masuk'			=> $masuk,
            'keluar'		=> $keluar,
            'masjid'        => $masjid
        );

        $this->theme_guest->load('awal_guest_view',$data);
    }
 
    
    
}