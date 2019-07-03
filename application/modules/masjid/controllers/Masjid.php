<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masjid extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('masjid_model');
        

    }
 
    function index(){
        $this->load->view('masjid_view');
    }
 
    function tambah(){
       
        
        $data = array(
            'nama_masjid'       => $this->input->post('namamasjid'),
            'kategori_masjid'   => $this->input->post('kategori_masjid'),
            'latitude'          => $this->input->post('latitude'),
            'longitude'         => $this->input->post('longitude'),
            'alamat'            => $this->input->post('alamat'),     
        );
        if(!empty($_FILES['gambar']['name']))
        {
            $upload = $this->_do_upload();
            $data['gambar'] = $upload;
        }
        
        $this->masjid_model->save_data($data);
 
       
        echo json_encode(array("status" => TRUE));
        
    }
   
    private function _do_upload()
    {
        $config['upload_path']          = 'uploads/gambar masjid/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 1900; //set max size allowed in Kilobyte
        $config['max_width']            = 1500; // set max width image allowed
        $config['max_height']           = 1500; // set max height allowed
        $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('gambar')) //upload and validate
        {
            $data['inputerror'][] = 'gambar';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }

    public function logout(){
        $this->session->set_userdata('username', FALSE);
        $this->session->sess_destroy();
        $url=base_url('masjid');
        redirect($url);
    }
    
     /*public function do_upload(){
     $config = array(
     'upload_path' => "./uploads/",
     'allowed_types' => "gif|jpg|png|jpeg|pdf",
     'overwrite' => TRUE,
     'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
     'max_height' => "768",
     'max_width' => "1024"
     );
     $this->load->library('upload', $config);
     if($this->upload->do_upload())
     {
     $data = array('upload_data' => $this->upload->data());
     //$this->load->view('upload_success',$data);
     }
     else
     {
     $error = array('error' => $this->upload->display_errors());
     //$this->load->view('custom_view', $error);
     }
     }*/
/*
     private function _uploadImage()
	{
    $config['upload_path']          = './uploads/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg';
    $config['file_name']            = 'gogo';
    $config['overwrite']			= true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('gambar')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
	}*/

	/*public function simpan(){
		$d['nama_masjid']	= $this->input->post('namamasjid');
		$d['latitude']	= $this->input->post('latitude');
		$d['longitude']	= $this->input->post('longitude');
		$d['alamat']	= $this->input->post('alamat');

		if (!empty($_FILES['gambar']['name'])){
			$nama 		= $_FILES["gambar"]['name'];
			$img_size		= $_FILES['gambar']['size'];
			
			if (!is_dir('./assets/img/')) {
				mkdir('./assets/img',077,true);
			}

			$target_dir	= './assets/img/';
			$dir 		= base_url().'/assets/img/';
			$target_file	= $nama.time();

			if(move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_dir.$target_file)){
				$d['gambar']	= $dir.$target_file;
				$status		= $this->masjid_model->tambah($d);
				redirect('daftar');
			}
			else{
				echo "Gagal";
			}

		}
		else{
			echo "Gagal Upload";
			}
		}
		*/
}
