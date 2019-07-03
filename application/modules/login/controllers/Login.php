<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    function index()
    {
        $this->load->view('login_view');
    }

    function auth()
    {

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // if ($_POST) {
        //  $username=$this->input->post('username',TRUE);
        //$password=$this->input->post('password',TRUE);

        //    $cek=$this->login_model->login($username,$password);


        $cek_admin = $this->login_model->login($email, $password);


        /*     if($cek_admin->num_rows() > 0){ //jika login sebagai admin
                            $data=$cek_admin->row();
                            $this->session->set_userdata('masuk',TRUE);
                            $this->session->set_userdata('level','level');
                            $this->session->set_userdata('ses_id','id_admin');
                            $this->session->set_userdata('ses_nama','nama_admin');
                            //echo "level 1";
                            redirect('http://localhost/CI/Admin');
                    
                 }
        
        else if ($cek_dokter->num_rows() > 0) {
                            $data=$cek_dokter->row();
                            $this->session->set_userdata('masuk',TRUE);
                            $this->session->set_userdata('level','level');
                            $this->session->set_userdata('ses_id','id_dokter');
                            $this->session->set_userdata('ses_nama','nama_dokter');
                           // echo "level 2";
                            redirect('http://localhost/CI/admin_dokter');
                    
        }  
        
        else if ($cek_apoteker->num_rows() > 0) {
                            $data=$cek_apoteker->row();
                            $this->session->set_userdata('masuk',TRUE);
                            $this->session->set_userdata('level','level');
                            $this->session->set_userdata('ses_id','id_pegawai');
                            $this->session->set_userdata('ses_nama','nama_pegawai');
                           // echo "level 2";
                            redirect('http://localhost/CI/apoteker');
                    
        }

         else if ($cek_perawat->num_rows() > 0) {
                            $data=$cek_perawat->row();
                            $this->session->set_userdata('masuk',TRUE);
                            $this->session->set_userdata('level','level');
                            $this->session->set_userdata('ses_id','id_pegawai');
                            $this->session->set_userdata('ses_nama','nama_pegawai');
                           // echo "level 2";
                            redirect('http://localhost/CI/admin_dokter');
                    
        }
        else if ($cek_resepsionis->num_rows() > 0) {
                            $data=$cek_resepsionis->row();
                            $this->session->set_userdata('masuk',TRUE);
                            $this->session->set_userdata('level','level');
                            $this->session->set_userdata('ses_id','id_pegawai');
                            $this->session->set_userdata('ses_nama','nama_pegawai');
                           // echo "level 2";
                           redirect('http://localhost/CI/pendaftaran');
                    
        }
        else if ($cek_kasir->num_rows() > 0) {
                            $data=$cek_kasir->row();
                            $this->session->set_userdata('masuk',TRUE);
                            $this->session->set_userdata('level','level');
                            $this->session->set_userdata('ses_id','id_pegawai');
                            $this->session->set_userdata('ses_nama','nama_pegawai');
                           // echo "level 2";
                            redirect('http://localhost/CI/kasir');
                    
            }
                           else {

                             $url=base_url();
                            echo $this->session->set_flashdata('msg','Username Atau Password Salah');
                           
                            redirect('http://localhost/CI/login');
                           // if($data['level']=='6'){
                            //  $this->session->set_userdata('level','6');
                             // $this->session->set_userdata('ses_id','id_pegawai');
                             // $this->session->set_userdata('ses_nama','nama_pegawai');
                       //    echo "gagal";
                          //  redirect('http://localhost/CI/login');
                    }
        }
        


        else{
            $url=base_url();
                            echo $this->session->set_flashdata('msg','Username Atau Password Salah');
                           
                            redirect('http://localhost/CI/login');
     }
        
 */
    }
    /*
    public function logout() {
    
    // Removing session data
    $sess_array = array(
    'username' => ''
    );
    $this->session->unset_userdata('logged_in', $sess_array);
    $data['message_display'] = 'Successfully Logout';
    $this->load->view('login_view', $data);
    }
  

    public function ceklogin(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->login_model->ambillogin($username, $password);
    }
 */

    public function logout()
    {
        $this->session->unset_userdata('email');
        //$this->session->unset_userdata('email');
        //$this->session->sess_destroy();

        $this->session->set_flashdata('pesan', '<div class="form-group alert-success alert-dismissable text-center w-full"> <h4>Anda berhasil keluar ! </h4></div>');
        $url = base_url('login');
        redirect($url);
    }
}
