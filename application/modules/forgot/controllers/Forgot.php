<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('forgot_model');
        $this->load->helper('url');
        $this->load->library('session');
        
    }
 
    function index(){
       
        $this->load->view('forgot_view');
    }
 
   function auth(){
    $email = $this->input->post('email');

     $cek_email=$this->forgot_model->cek_email($email);
   }
    
    /*public function search()
    {
        // tangkap variabel keyword dari URL
        $keyword = $this->uri->segment(2);

        // cari di database
        $data = $this->db->from('masjid')->like('nama_masjid',$keyword)->get();  

        // format keluaran di dalam array
        foreach($data->result() as $row)
        {
            $arr['query'] = $keyword;
            $arr['suggestions'][] = array(
                'value' =>$row->nama_masjid,
                'alamat' => $row->alamat
                

            );
        }
        // minimal PHP 5.2
        echo json_encode($arr);
    }*/

    function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->daftar_model->search_blog($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->nama_masjid;
                echo json_encode($arr_result);
            }
        }
    }

    
}