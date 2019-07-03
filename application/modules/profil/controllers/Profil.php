<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('profil_model');
        $this->load->helper('url');
        //$this->load->library('session');
    }

    function index()
    {

        $data['user'] = $this->db->get_where('admin_masjid', ['email' => $this->session->userdata('email')])->row_array();

        $masjid     = $this->profil_model->get_masjid($data["user"]["id_masjid"]);

        $level =  $data['user']['level'];
        if ($level == 0) {
            $value = 'Administrator';
        } else {
            $value = 'Pengelola';
        }
        $data_user = array(
            
            'masjid' => $masjid->nama_masjid,
            'nama' => $data['user']['nama'],
            'alamat' => $data['user']['alamat'],
            'email' => $data['user']['email'],
            'id_jss' => $data['user']['id_jss'],
            'nik' => $data['user']['nik'],
            'no_telpon' => $data['user']['no_telpon'],
            'gambar_profil' => $data['user']['gambar_profil'],
            'gambar' => $data['user']['gambar_profil'],
            'level' => $value
        );
        if ($level == 0) {
            $this->theme_admin->load('profil_view', $data_user);
        } else {
            $this->theme_pengelola->load('profil_view', $data_user);
        }
        
    }

    public function edit(){
        $data['user'] = $this->db->get_where('admin_masjid', ['email' => $this->session->userdata('email')])->row_array();
        
        $data_user = array(
            'nama'          => $this->input->post('nama'),
            'email'         => $this->input->post('email'),
            'no_telpon'     => $this->input->post('notel'),
            'alamat'        => $this->input->post('alamat'),
            //'gambar_profil'      => $this->input->post('gambar_profil'),
        );

        if(!empty($_FILES['gambar_profil']['name']))
        {
            $gambar_lama = $data['user']['gambar_profil'];
            if ($gambar_lama != 'default.png') {
                unlink(FCPATH . 'uploads/user/' . $gambar_lama);
            }

            $upload = $this->_do_upload();
            $data_user['gambar_profil'] = $upload;
        }

        
        $insert = $this->profil_model->edit_kegiatan(array('id_jss' => $data['user']['id_jss']), $data_user);
        $this->session->set_flashdata('pesan', '<div class="form-group alert-success alert-dismissable text-center"><h3> Data berhasil diubah!</h3></div>');
        redirect('profil');
    }

    private function _do_upload()
    {
        $config['upload_path']          = 'uploads/user/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 2400; //set max size allowed in Kilobyte
        $config['max_width']            = 2400; // set max width image allowed
        $config['max_height']           = 2400; // set max height allowed
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

    public function ajax_list()
    {
        $this->load->helper('url');

        $list = $this->profil_model->get_datatables();
        $data = array();
        $no = 1;
        foreach ($list as $item) {
            $row = array();
            $row[] = $no++;
            $row[] = $item->jenis_kegiatan;
            $row[] = $item->tanggal;
            $row[] = $item->jam;
            $row[] = $item->keterangan;
            $row[] = '<a><img src="' . base_url('uploads/kegiatan/' . $item->gambar) . '" alt="image" class="img-responsive thumb-lg"></a>';


            $row[]  = '
            <button class="btn btn-sm btn-danger" onclick="delete_kegiatan(' . "'" . $item->id_kegiatan . "','" . $item->jenis_kegiatan . "'" . ')"><i class="fa fa-trash"> Hapus</i>
            </button>';
            $row[] = '<button class="btn btn-sm btn-warning" onclick="edit_kegiatan(' . "'" . $item->id_kegiatan . "'" . ')"><i class="fa fa-pencil"> Ubah</i>
            </button>';


            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->profil_model->count_all(),
            "recordsFiltered" => $this->profil_model->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_add_kegiatan()
    {

        $data = array(
            'jenis_kegiatan'    => $this->input->post('jenis_kegiatan'),
            'tanggal'           => $this->input->post('tanggal'),
            'jam'               => $this->input->post('jam'),
            'keterangan'        => $this->input->post('keterangan'),

        );

        if (!empty($_FILES['gambar']['name'])) {
            $upload = $this->_do_upload();
            $data['gambar'] = $upload;
        }

        $this->profil_model->save_data($data);


        echo json_encode(array("status" => true));
    }

    public function ajax_update_kegiatan()
    {

        $data = array(
            'jenis_kegiatan'    => $this->input->post('jenis_kegiatan'),
            'tanggal'           => $this->input->post('tanggal'),
            'jam'               => $this->input->post('jam'),
            'keterangan'        => $this->input->post('keterangan'),


        );


        $insert = $this->profil_model->edit_kegiatan(array('id_kegiatan' => $this->input->post('id_kegiatan')), $data);
        echo json_encode(array("status" => true));
    }

    public function ajax_delete_kegiatan()
    {
        $id = $this->input->post('id_kegiatan');
        $this->profil_model->delete_kegiatan($id);
        echo json_encode(array("status" => true));
    }

    public function ajax_kegiatan($id)
    {
        $data = $this->profil_model->get_kegiatan_by_id($id);
        echo json_encode($data);
    }

    function tampil_kegiatan()
    {
        $data = $this->profil_model->kegiatan_list();

        echo json_encode($data);
    }
}