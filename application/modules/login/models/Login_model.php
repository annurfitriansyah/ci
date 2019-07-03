<?php defined('BASEPATH') or exit('No direct script access allowed');
class Login_model extends CI_Model
{



  function login($email, $password)
  {
    //        $query=$this->db->FROM ("pegawai");

    $user = $this->db->get_where('admin_masjid', ['email' => $email])->row_array();

    if ($user) {
      if (password_verify($password, $user['password'])) {
        if ($user['level'] == 0) {
          $data = [
            'email'   => $user['email'],
            'level'   => $user['level'],
            'id_jss'   => $user['id_jss'],
          ];

          $this->session->set_userdata($data);
          redirect('awal_admin');
        } else {
          $data = [
            'email'   => $user['email'],
            'level'   => $user['level'],
            'id_jss'   => $user['id_jss'],
          ];

          $this->session->set_userdata($data);
          redirect('awal_pengelola');
        }
      } else {
        $this->session->set_flashdata('pesan', '<div class="form-group alert-warning alert-dismissable text-center w-full"><h4> Password anda salah !</h4></div>');
        redirect('login');
      }
    } else {
      $this->session->set_flashdata('pesan', '<div class="form-group alert-danger alert-dismissable text-center w-full"> <h4>Email tidak terdaftar ! </h4></div>');
      redirect('login');
    }
  }

  public function keamanan()
  {
    $email = $this->session->sess_destroy('email');
    if (!empty($email)) {
      $this->session->sess_destroy();
      redirect('http://localhost/CI/login');
    }
  }
}
