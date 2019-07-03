<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengeluaran extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('pengeluaran_model');
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
            $this->theme_admin->load('pengeluaran_view', $data);
        } else {
            $this->theme_pengelola->load('pengeluaran_view', $data);
        }
    }
 
    public function ajax_list(){
        $this->load->helper('url');

        $list = $this->pengeluaran_model->get_datatables();
        $data = array();
        $no = 1;
        foreach ($list as $item) {
            $row = array();
            $row[] = $no++;
            $row[] = $item->sumber;
            $row[] = $item->jenis;
            $row[] = $item->keterangan;
            $row[] = 'Rp. '. number_format($item->jumlah,0,'.','.').',-';
            $row[] = $item->tanggal;
            $row[] = '<a><img src="'.base_url('uploads/pengeluaran/'.$item->gambar).'" alt="image" class="img-responsive thumb-lg"></a>';


            $row[]  ='
            <button class="btn btn-sm btn-danger" onclick="delete_pengeluaran('."'".$item->id_pengeluaran."','".$item->id_pengeluaran."'".')"><i class="fa fa-trash"> Hapus</i>
            </button>';
            $row[] = '<button class="btn btn-sm btn-warning" onclick="edit_pengeluaran('."'".$item->id_pengeluaran."'".')"><i class="fa fa-pencil"> Ubah</i>
            </button>';
        

            $data[] = $row;

        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->pengeluaran_model->count_all(),
                        "recordsFiltered" => $this->pengeluaran_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);

    }
    
    public function ajax_add_pengeluaran()
    {
        $data['user'] = $this->db->get_where('admin_masjid', ['email' => $this->session->userdata('email')])->row_array();
        $this->_validate();
        $data = array(
            'sumber'            => $this->input->post('sumber'),
            'jenis'             => $this->input->post('jenis'),
            'keterangan'        => $this->input->post('keterangan'),
            'jumlah'            => $this->input->post('jumlah'),
            'tanggal'           => $this->input->post('tanggal'),
            'id_masjid'         => $data['user']['id_masjid']

        );

        if ($_POST['jenis'] == "Lain-lain") {
            $data['jenis'] = $this->input->post('jenis2');
        }
        if(!empty($_FILES['gambar']['name']))
        {
            $upload = $this->_do_upload();
            $data['gambar'] = $upload;
        }

        $this->pengeluaran_model->save_data($data);

        
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_update_pengeluaran()
    {
        
        $data = array(
            'sumber'            => $this->input->post('sumber'),
            'jenis'             => $this->input->post('jenis'),
            'keterangan'        => $this->input->post('keterangan'),
            'jumlah'            => $this->input->post('jumlah'),
            'tanggal'           => $this->input->post('tanggal'),
            
            
        );

        if(!empty($_FILES['gambar']['name']))
        {
            $gambar_lama = $data['gambar'];
            if ($gambar_lama != 'default.png') {
                unlink(FCPATH . 'uploads/pengeluaran/' . $gambar_lama);
            }

            $upload = $this->_do_upload();
            $data['gambar'] = $upload;
        }

       
 
        $insert = $this->pengeluaran_model->edit_pengeluaran(array('id_pengeluaran' => $this->input->post('id_pengeluaran')), $data);
         $this->session->set_flashdata('pesan', '<div class="form-group alert-success alert-dismissable text-center"><h3> Data berhasil diubah!</h3></div>');

 
                redirect('pengeluaran');

    }

    private function _do_upload()
    {
        $config['upload_path']          = 'uploads/pengeluaran/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 2400; //set max size allowed in Kilobyte
        $config['max_width']            = 2400; // set max width image allowed
        $config['max_height']           = 2400; // set max height allowed
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

    public function ajax_delete_pengeluaran()
    {
        $id = $this->input->post('id_pengeluaran');
        $this->pengeluaran_model->delete_pengeluaran($id);
        echo json_encode(array("status" => TRUE));

    }

    public function ajax_pengeluaran($id)
    {
        $data = $this->pengeluaran_model->get_pengeluaran_by_id($id);
        echo json_encode($data);
    }

    function tampil_pengeluaran(){
        $data = $this->pengeluaran_model->pengeluaran_list();

        echo json_encode($data);
    }

    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;
        
        if($this->input->post('sumber') == '')
        {
            $data['inputerror'][] = 'sumber';
            $data['error_string'][] = 'Sumber harus diisi';
            $data['status'] = FALSE;
        }

        if($this->input->post('jenis') == '')
        {
            $data['inputerror'][] = 'jenis';
            $data['error_string'][] = 'Jenis harus diisi';
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

        if($this->input->post('tanggal') == '')
        {
            $data['inputerror'][] = 'tanggal';
            $data['error_string'][] = 'Tanggal harus diisi';
            $data['status'] = FALSE;
        }

        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }
    
}