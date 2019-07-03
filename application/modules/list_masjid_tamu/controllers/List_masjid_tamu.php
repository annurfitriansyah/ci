<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_masjid_tamu extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('list_masjid_tamu_model');
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
        $this->theme_guest->load('list_masjid_tamu_view',$data);
    }
 
    public function ajax_list(){
        $this->load->helper('url');

        $list = $this->list_masjid_tamu_model->get_datatables();
        $data = array();
        $no = 1;
        foreach ($list as $item) {
            $row = array();
            $row[] = $item->id_masjid;
            $row[] = $item->nama_masjid;
            $row[] = $item->alamat;
            $row[] = $item->latitude;
            $row[] = $item->longitude;
            $row[] = $item->kategori_masjid;
            $row[] = '<a><img src="'.base_url('uploads/gambar masjid/'.$item->gambar).'" alt="image" class="img-responsive thumb-lg"></a>';
            //$row[] = $item->status;
                $row[] = '<button class="btn btn-sm btn-warning" onclick="delete_masjid('."'".$item->id_masjid."','".$item->nama_masjid."'".')"><i class="fa fa-trash"> Aktif</i>
                </button> ';
                
           
            $data[] = $row;

        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->list_masjid_tamu_model->count_all(),
                        "recordsFiltered" => $this->list_masjid_tamu_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);

    }

    public function ajax_list2(){
        $this->load->helper('url');

        $list = $this->list_masjid_tamu_model->get_datatables2();
        $data = array();
        $no = 1;
        foreach ($list as $item) {
            $row = array();
            $row[] = $item->id_masjid;
            $row[] = $item->nama_masjid;
            $row[] = $item->alamat;
            $row[] = $item->latitude;
            $row[] = $item->longitude;
            $row[] = $item->kategori_masjid;
            $row[] = '<a><img src="'.base_url('uploads/gambar masjid/'.$item->gambar).'" alt="image" class="img-responsive thumb-lg"></a>';
            //$row[] = $item->status
            $row[] = '<button class="btn btn-sm btn-danger" onclick="ubah_masjid('."'".$item->id_masjid."','".$item->nama_masjid."'".')"><i class="fa fa-pencil"> Belum Aktif</i>
            </button>';
           
    
            $data[] = $row;

        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->list_masjid_tamu_model->count_all2(),
                        "recordsFiltered" => $this->list_masjid_tamu_model->count_filtered2(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);

    }
    
    public function ajax_add_masjid()
    {
        
        $data = array(
            'jenis_masjid'       => $this->input->post('jenis_masjid'),            
            'tanggal'           => $this->input->post('tanggal'),
            'jam'               => $this->input->post('jam'),
            'keterangan'        => $this->input->post('keterangan'),
            
            );

        if(!empty($_FILES['gambar']['name']))
        {
            $upload = $this->_do_upload();
            $data['gambar'] = $upload;
        }

        $this->list_masjid_model->save_data($data);

        
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_update_masjid()
    {
        
        $data = array(
            'jenis_masjid'    => $this->input->post('jenis_masjid'),            
            'tanggal'           => $this->input->post('tanggal'),
            'jam'               => $this->input->post('jam'),
            'keterangan'        => $this->input->post('keterangan'),
            
            
        );
       
 
        $insert = $this->list_masjid_tamu_model->edit_masjid(array('id_masjid' => $this->input->post('id_masjid')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_update_status()
    {
       
        $id = $this->input->post('id_masjid');
        $this->list_masjid_model->edit_masjid($id);
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

    public function ajax_delete_masjid()
    {
        $id = $this->input->post('id_masjid');
        $this->list_masjid_model->delete_masjid($id);
        echo json_encode(array("status" => TRUE));

    }
    

    public function ajax_masjid($id)
    {
        $data = $this->list_masjid_model->get_masjid_by_id($id);
        echo json_encode($data);
    }

    function tampil_masjid(){
        $data = $this->list_masjid_model->masjid_list();

        echo json_encode($data);
    }
    
}