<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
class Login_model extends CI_Model{
 
     function auth_admin($username,$password){
      //  $query=$this->db->FROM ("admin");
        $query=$this->db->WHERE (" username='$username' AND password='$password' AND level = '1' ");
      //  $query=$this->db->WHERE("level = '1' ");

        $query = $this->db->get('admin');
        //return $query;

        if($query->num_rows()>0){
          foreach ($query->result() as $row) {
            $sess = array (
                'username' => $row->username,
                'password' => $row->password
              );
         }
          $this->session->get_userdata($sess);
          redirect('http://localhost/CI/admin');
        }

        else{

        return $query;
        }
    }

    function auth_dokter($username,$password){
     //   $query=$this->db->FROM ("dokter");
       // $query=$this->db->WHERE (" username='$username' AND password='$password' AND level = '2'  ");
      //  $query=$this->db->WHERE("level",2);
      //  $query = $this->db->get();
      //  return $query;
         
          $query = $this->db->get('dokter');
           $this->db->WHERE('username');
           $this->db->WHERE('password');
           $this->db->WHERE('level', 2);
          
        //return $query;

        if($query->num_rows()>0){
          foreach ($query->result() as $row) {
            $sess = array (
                'username' => $row->username,
                'password' => $row->password
              );
         }
          $this->session->get_userdata($sess);
          redirect('http://localhost/CI/admin_dokter');
        }

        else{

        return $query;
 }    

           }
 
     function auth_apoteker($username,$password){
       // $query=$this->db->FROM ("pegawai");
        $query=$this->db->WHERE (" username='$username' AND password='$password' AND level = '3'  ");
      //  $query=$this->db->OR_WHERE(" username='$username' AND password='$password' AND level = '4'  ");
      //  $query=$this->db->OR_WHERE(" username='$username' AND password='$password' AND level = '5'  ");
      //  $query=$this->db->OR_WHERE(" username='$username' AND password='$password' AND level = '6'  ");
      //  $query = $this->db->get();
      //  return $query;
        
           $query = $this->db->get('pegawai');
        //return $query;

        if($query->num_rows()>0){
          foreach ($query->result() as $row) {
            $sess = array (
                'username' => $row->username,
                'password' => $row->password
              );
         }
          $this->session->get_userdata($sess);
          redirect('http://localhost/CI/apoteker');
        }

        else{

        return $query;
     
}
            }
 
    function auth_perawat($username,$password){
        $query=$this->db->FROM ("pegawai");
        $query=$this->db->WHERE (" username='$username' AND password='$password' AND level = '4'  ");
      //  $query=$this->db->OR_WHERE(" username='$username' AND password='$password' AND level = '4'  ");
      //  $query=$this->db->OR_WHERE(" username='$username' AND password='$password' AND level = '5'  ");
      //  $query=$this->db->OR_WHERE(" username='$username' AND password='$password' AND level = '6'  ");
    //    $query = $this->db->get();
      //  return $query;
         $query = $this->db->get('pegawai');
        //return $query;

        if($query->num_rows()>0){
          foreach ($query->result() as $row) {
            $sess = array (
                'username' => $row->username,
                'password' => $row->password
              );
         }
          $this->session->get_userdata($sess);
          redirect('http://localhost/CI/perawat');
        }

        else{

        return $query;

           }
            }
 


    function auth_resepsionis($username,$password){
      //  $query=$this->db->FROM ("pegawai");
        $query=$this->db->WHERE (" username='$username' AND password='$password' AND level = '5'  ");
      //  $query=$this->db->OR_WHERE(" username='$username' AND password='$password' AND level = '4'  ");
      //  $query=$this->db->OR_WHERE(" username='$username' AND password='$password' AND level = '5'  ");
      //  $query=$this->db->OR_WHERE(" username='$username' AND password='$password' AND level = '6'  ");
      //  $query = $this->db->get();
       // return $query;
         
          $query = $this->db->get('pegawai');
        //return $query;

        if($query->num_rows()>0){
          foreach ($query->result() as $row) {
            $sess = array (
                'username' => $row->username,
                'password' => $row->password
              );
         }
          $this->session->get_userdata($sess);
          redirect('http://localhost/CI/pendaftaran');
        }

        else{

        return $query;

            }
          }

       

    function auth_kasir($username,$password){
//        $query=$this->db->FROM ("pegawai");
  //      $query=$this->db->WHERE (" username='$username' AND password='$password' AND level = '6'  ");
      //  $query=$this->db->OR_WHERE(" username='$username' AND password='$password' AND level = '4'  ");
      //  $query=$this->db->OR_WHERE(" username='$username' AND password='$password' AND level = '5'  ");
      //  $query=$this->db->OR_WHERE(" username='$username' AND password='$password' AND level = '6'  ");
 //       $query = $this->db->get();
   //     return $query;
           $this->db->WHERE('username');
           $this->db->WHERE('password');
           $this->db->WHERE("level = '6'");
           $query = $this->db->get('pegawai');
        //return $query;

              if($query->num_rows()>0){
          foreach ($query->result() as $row) {
            $sess = array (
                'username' => $row->username,
                'password' => $row->password
              );
            # code...
          }
          $this->session->get_userdata($sess);
          redirect('http://localhost/CI/apoteker');
        }

        else{
          $this->session->set_flashdata('info','Maaf username dan password anda salah');
          redirect('http://localhost/CI/login');
        }


      }
  
/*
      public function ambillogin($username, $password){

        //$this->db->FROM('admin');
        $this->db->WHERE('username');
        $this->db->WHERE('password');
        $query = $this->db->get('admin');

        if($query->num_rows()>0){
          foreach ($query->result() as $row) {
            $sess = array (
                'username' => $row->username,
                'password' => $row->password
              );
            # code...
          }
          $this->session->get_userdata($sess);
          redirect('http://localhost/CI/admin');
        }

        else{
          $this->session->set_flashdata('info','Maaf username dan password anda salah');
          redirect('http://localhost/CI/login');
        }


      }
  
 */

}