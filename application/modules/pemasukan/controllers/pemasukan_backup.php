<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('pemasukan_model');
        $this->load->helper('url');
        $this->load->library('session');
        
    }
 
    function index(){
       
        $this->theme->load('kegiatan_view');
    }
 
    public function ajax_list(){
		$this->load->helper('url');

		$list = $this->kegiatan_model->get_datatables();
		$data = array();
        $no = 1;
		foreach ($list as $item) {
            $row = array();
            $row[] = $no++;
            $row[] = $item->id_pemasukan
            $row[] = $item->jenis_pemasukan;
            $row[] = $item->tanggal;
            $row[] = $item->keterangan;
            $row[] = $item->jumlah;
            $row[] = $item->sumber;
            $row[] = $item->id_masjid;
            $row[] = '<a><img src="'.base_url('uploads/kegiatan/'.$item->gambar).'" alt="image" class="img-responsive thumb-lg"></a>';


            $row[]  ='
            <button class="btn btn-sm btn-danger" onclick="delete_pemasukan('."'".$item->id_pemasukan."','".$item->jenis_pemasukan."'".')"><i class="fa fa-trash"> Hapus</i>
            </button>';
            $row[] = '<button class="btn btn-sm btn-warning" onclick="edit_pemasukan('."'".$item->id_pemasukan."'".')"><i class="fa fa-pencil"> Ubah</i>
            </button>';
        

			$data[] = $row;

        }

		$output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->pemasukan_model->count_all(),
                        "recordsFiltered" => $this->pemasukan_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);

    }
    
    public function ajax_add_kegiatan()
    {
        $this->_validate();
        $data = array(
            'jenis_kegiatan'    => $this->input->post('jenis_kegiatan'),            
            'tanggal'           => $this->input->post('tanggal'),
            'jam'               => $this->input->post('jam'),
            'keterangan'        => $this->input->post('keterangan'),
            
            );

        if(!empty($_FILES['gambar']['name']))
        {
            $upload = $this->_do_upload();
            $data['gambar'] = $upload;
        }

        $this->kegiatan_model->save_data($data);

        
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_update_kegiatan()
    {
        
        $data = array(
            'jenis_kegiatan'    => $this->input->post('jenis_kegiatan'),            
            'tanggal'           => $this->input->post('tanggal'),
            'jam'               => $this->input->post('jam'),
            'keterangan'        => $this->input->post('keterangan'),
            
            
        );
       
 
        $insert = $this->kegiatan_model->edit_kegiatan(array('id_kegiatan' => $this->input->post('id_kegiatan')), $data);
        echo json_encode(array("status" => TRUE));
    }

	private function _do_upload()
    {
        $config['upload_path']          = 'uploads/kegiatan/';
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

	public function ajax_delete_kegiatan()
    {
        $id = $this->input->post('id_kegiatan');
        $this->kegiatan_model->delete_kegiatan($id);
        echo json_encode(array("status" => TRUE));

    }

    public function ajax_kegiatan($id)
    {
        $data = $this->kegiatan_model->get_kegiatan_by_id($id);
        echo json_encode($data);
    }

	function tampil_kegiatan(){
        $data = $this->kegiatan_model->kegiatan_list();

        echo json_encode($data);
    }

    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;
        
        if($this->input->post('jenis_kegiatan') == '')
        {
            $data['inputerror'][] = 'jenis_kegiatan';
            $data['error_string'][] = 'Jenis Kegiatan harus diisi';
            $data['status'] = FALSE;
        }

        if($this->input->post('tanggal') == '')
        {
            $data['inputerror'][] = 'tanggal';
            $data['error_string'][] = 'Tanggal harus diisi';
            $data['status'] = FALSE;
        }

        if($this->input->post('jam') == '')
        {
            $data['inputerror'][] = 'jam';
            $data['error_string'][] = 'Jam harus diisi';
            $data['status'] = FALSE;
        }

        if($this->input->post('keterangan') == '')
        {
            $data['inputerror'][] = 'keterangan';
            $data['error_string'][] = 'Keterangan harus diisi';
            $data['status'] = FALSE;
        }

        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }
    
}