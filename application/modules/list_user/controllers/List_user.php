<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_user extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('list_user_model');
        $this->load->helper('url');
        $this->load->library('session');
        
    }
 
    function index(){
        $data['user'] = $this->db->get_where('admin_masjid', ['email' => $this->session->userdata('email')])->row_array();
        $level =  $data['user']['level'];
        if ($level == 0) {
            $value = 'Administrator';
        } else {
            $value = 'Pengelola';
        }
        $data = array(
            'nama'          => $data['user']['nama'],
            'gambar'        => $data['user']['gambar_profil'],
            'level'         => $value
        );
        $this->theme_admin->load('list_user_view',$data);
    }
 
    public function ajax_list(){
		$this->load->helper('url');

		$list = $this->list_user_model->get_datatables();
		$data = array();
        $no = 1;
		foreach ($list as $item) {
            $row = array();
            $row[] = $item->id_jss;
            $row[] = $item->nik;
			$row[] = $item->nama;
			$row[] = $item->alamat;
            $row[] = $item->email;
            $row[] = $item->no_telpon;
            $row[] = $item->nama_masjid;
            $row[] = '<a href="'.base_url('uploads/user/'.$item->gambar_profil).'"><img src="'.base_url('uploads/user/'.$item->gambar_profil).'" alt="image" class="img-responsive thumb-lg"></a>';
            //$row[] = $item->status;
            if($item->level == 1){
                $row[] = 'Pengelola';
                $row[] = '<button class="btn btn-sm btn-danger" onclick="delete_masjid('."'".$item->id_jss."','".$item->nama."'".')"><i class="fa fa-trash"> Non-Aktif</i>
                </button> ';
            }
            else{
                $row[] = 'Administrator';
                $row[] = '<button class="btn btn-sm btn-warning" onclick="ubah_masjid('."'".$item->id_jss."','".$item->nama."'".')"><i class="fa fa-pencil"> Aktif</i>
                </button>';
            }
    
			$data[] = $row;

        }

		$output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->list_user_model->count_all(),
                        "recordsFiltered" => $this->list_user_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);

    }
    
    public function ajax_add_admin()
    {
        
        $data = array(
            
            'nik'               => $this->input->post('nik'),            
            'nama'              => $this->input->post('nama'),
            'alamat'            => $this->input->post('alamat'),
            'email'             => $this->input->post('email'),
            'no_telpon'         => $this->input->post('no_telpon'),
            'password'          => $this->input->post('password'),
            'level'             => $this->input->post('level'),
            'id_masjid'             => $this->input->post('id_masjid')
                   
            );

        if(!empty($_FILES['gambar_profil']['name']))
        {
            $upload = $this->_do_upload();
            $data['gambar_profil'] = $upload;
            $this->list_user_model->save_data($data);       
            echo json_encode(array("status" => TRUE));
        }else {
            $data['gambar_profil'] = 'default.png';
            $this->list_user_model->save_data($data);       
            echo json_encode(array("status" => TRUE));
        }
    }

    public function ajax_update_ad()
    {
        
        $data = array(
            'jenis_ad'    => $this->input->post('jenis_ad'),            
            'tanggal'           => $this->input->post('tanggal'),
            'jam'               => $this->input->post('jam'),
            'keterangan'        => $this->input->post('keterangan'),
            
            
        );
       
 
        $insert = $this->list_user_model->edit_ad(array('id_ad' => $this->input->post('id_masjid')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_update_status()
    {
       
        $id = $this->input->post('id_masjid');
        $this->list_user_model->edit_masjid($id);
        echo json_encode(array("status" => TRUE));
    }

	private function _do_upload()
    {
        $config['upload_path']          = 'uploads/user/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 1900; //set max size allowed in Kilobyte
        $config['max_width']            = 1500; // set max width image allowed
        $config['max_height']           = 1500; // set max height allowed
        $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('gambar_profil')) //upload and validate
        {
            $data['inputerror'][] = 'gambar_profil';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }

	public function ajax_delete_masjid()
    {
        $id = $this->input->post('id_masjid');
        $this->list_user_model->delete_masjid($id);
        echo json_encode(array("status" => TRUE));

    }
    

    public function ajax_masjid($id)
    {
        $data = $this->list_user_model->get_masjid_by_id($id);
        echo json_encode($data);
    }

	function tampil_masjid(){
        $data = $this->list_user_model->masjid_list();

        echo json_encode($data);
    }
    
}