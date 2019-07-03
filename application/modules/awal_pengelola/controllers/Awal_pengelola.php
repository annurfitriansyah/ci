<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Awal_pengelola extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('awal_pengelola_model');
        $this->load->helper('url');
        $this->load->library('session');
        
    }
 
    function index(){

        $data['user'] = $this->db->get_where('admin_masjid', ['email' => $this->session->userdata('email')])->row_array();

        $kegiatan   = $this->awal_pengelola_model->count('kegiatan');
        $masuk      = $this->awal_pengelola_model->count('pemasukan');
        $keluar     = $this->awal_pengelola_model->count('pengeluaran');
        $masjid_aktif     = $this->awal_pengelola_model->count_aktif('masjid');
        $masjid_taktif     = $this->awal_pengelola_model->count_taktif('masjid');
        $user       = $this->awal_pengelola_model->count('admin_masjid');

        $level =  $data['user']['level'];
        if ($level == 0) {
            $value = 'Administrator';
        } else {
            $value = 'Pengelola';
        }

        $data = array(
            'kegiatan'      => $kegiatan,
            'masuk'         => $masuk,
            'keluar'        => $keluar,
            'masjid_aktif'        => $masjid_aktif,
            'masjid_taktif'        => $masjid_taktif,
            'user'          => $user,
            'nama'          => $data['user']['nama'],
            'gambar'        => $data['user']['gambar_profil'],
            'level'         => $value
        );

        $this->theme_pengelola->load('awal_pengelola_view',$data);
    }
 
    
    
}




