<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pemasukan extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('pemasukan_model');
        $this->load->helper('url');
        $this->load->library('session');

        $data['user'] = $this->db->get_where('admin_masjid', ['email' => $this->session->userdata('email')])->row_array();
        
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
        
        if ($level == 0) {
            $this->theme_admin->load('pemasukan_view', $data);
        } else {
            $this->theme_pengelola->load('pemasukan_view', $data);
        }
    }

    public function ajax_list(){
        $this->load->helper('url');

        $list = $this->pemasukan_model->get_datatables();
        $data = array();
        $no = 1;
        foreach ($list as $item) {
            $row = array();
            $row[] = $no++;
            $row[] = $item->jenis_pemasukan;
            $row[] = $item->tanggal;
            $row[] = $item->keterangan;
            $row[] = 'Rp. '. number_format($item->jumlah,0,'.','.').',-';
            $row[] = $item->sumber;


            $row[]  ='
            <button class="btn btn-sm btn-danger" onclick="delete_pemasukan('."'".$item->id_pemasukan."','".$item->id_pemasukan."'".')"><i class="fa fa-trash"> Hapus</i>
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
    
    public function ajax_add_pemasukan()
    {   $data['user'] = $this->db->get_where('admin_masjid', ['email' => $this->session->userdata('email')])->row_array();
        $this->_validate();
        $data = array(
            'jenis_pemasukan'   => $this->input->post('jenis_pemasukan'),            
            'tanggal'           => $this->input->post('tanggal'),
            'keterangan'        => $this->input->post('keterangan'),
            'jumlah'            => $this->input->post('jumlah'),
            'sumber'            => $this->input->post('sumber'),
            'id_masjid'         => $data['user']['id_masjid']
            );

        $this->pemasukan_model->save_data($data);

        
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_update_pemasukan()
    {
        
        $data = array(
            'jenis_pemasukan'    => $this->input->post('jenis_pemasukan'),            
            'tanggal'            => $this->input->post('tanggal'),
            'keterangan'         => $this->input->post('keterangan'),
            'jumlah'             => $this->input->post('jumlah'),
            'sumber'             => $this->input->post('sumber'),
            
            
        );       

        $insert = $this->pemasukan_model->edit_pemasukan(array('id_pemasukan' => $this->input->post('id_pemasukan')), $data);
        echo json_encode(array("status" => TRUE));
    }

    

    public function ajax_delete_pemasukan()
    {
        $id = $this->input->post('id_pemasukan');
        $this->pemasukan_model->delete_pemasukan($id);
        echo json_encode(array("status" => TRUE));

    }

    public function ajax_pemasukan($id)
    {
        $data = $this->pemasukan_model->get_pemasukan_by_id($id);
        echo json_encode($data);
    }

    function tampil_pemasukan(){
        $data = $this->pemasukan_model->pemasukan_list();

        echo json_encode($data);
    }

    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;
        
        if($this->input->post('jenis_pemasukan') == '')
        {
            $data['inputerror'][] = 'jenis_pemasukan';
            $data['error_string'][] = 'Jenis pemasukan harus diisi';
            $data['status'] = FALSE;
        }

        if($this->input->post('tanggal') == '')
        {
            $data['inputerror'][] = 'tanggal';
            $data['error_string'][] = 'Tanggal harus diisi';
            $data['status'] = FALSE;
        }

        if($this->input->post('keterangan') == '')
        {
            $data['inputerror'][] = 'keterangan';
            $data['error_string'][] = 'Keterangan harus diisi';
            $data['status'] = FALSE;
        }

        if($this->input->post('jumlah') == '')
        {
            $data['inputerror'][] = 'jumlah';
            $data['error_string'][] = 'Jumlah harus diisi';
            $data['status'] = FALSE;
        }

        if($this->input->post('sumber') == '')
        {
            $data['inputerror'][] = 'sumber';
            $data['error_string'][] = 'Sumber harus diisi';
            $data['status'] = FALSE;
        }

        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }
    
}