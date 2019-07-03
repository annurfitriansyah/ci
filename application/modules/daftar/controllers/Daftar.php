<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('daftar_model');
        $this->load->library('form_validation');
    }

    function index()
    {
        $this->form_validation->set_rules('nik', 'NIK', 'required|min_length[15]|max_length[15]|is_unique[admin_masjid.nik]', [
            'required' => 'NIK harus diisi!',
            'min_length' => 'Harus 15 Angka',
            'max_length' => 'Harus 15 Angka',
            'is_unique' => 'NIK sudag terdaftar !'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama harus diisi!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[admin_masjid.email]', [
            'required' => 'Email harus diisi!',
            'is_unique' => 'Email sudah terdaftar. Tolong gunakan email yang lain!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required', [
            'required' => 'Password harus diisi!'
        ]);
        $this->form_validation->set_rules('notel', 'No Telpon', 'required', [
            'required' => 'No Telpon harus diisi!'
        ]);
        $this->form_validation->set_rules('id_masjid', 'Nama Masjid', 'required', [
            'required' => 'Nama Masjid harus diisi!'
        ]);

        if ($this->form_validation->run() == false) {

            $x['data'] = $this->daftar_model->get_masjid();
            $this->load->view('daftar_view', $x);
        } else {
            $data = array(
                'nik' => htmlspecialchars($this->input->post('nik')),
                'nama' => htmlspecialchars($this->input->post('nama')),
                'email' => htmlspecialchars($this->input->post('email')),
                'no_telpon' => $this->input->post('notel'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'id_masjid' => $this->input->post('id_masjid'),
                'alamat' => $this->input->post('alamat'),
                'level' => $this->input->post('level')


            );
            if (!empty($_FILES['gambar_profil']['name'])) {
                $upload = $this->_do_upload();
                $data['gambar_profil'] = $upload;
                $this->daftar_model->save_data($data);

                $this->session->set_flashdata('pesan', '<div class="form-group alert-success alert-dismissable text-center w-full"> <h4>Selamat akun berhasil dibuat</h4></div>');
                redirect('login');
                //echo json_encode(array("status" => TRUE));
            } else {
                $data['gambar_profil'] = 'default.png';
                $this->daftar_model->save_data($data);

                $this->session->set_flashdata('pesan', '<div class="form-group alert-success alert-dismissable text-center w-full"> <h4>Selamat akun berhasil dibuat</h4></div>');
                redirect('login');
                //echo json_encode(array("status" => TRUE));
            }
        }
    }

    function daftar_aksi()
    { }



    private function _do_upload()
    {
        $config['upload_path']          = 'uploads/user/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 1900; //set max size allowed in Kilobyte
        $config['max_width']            = 1500; // set max width image allowed
        $config['max_height']           = 1500; // set max height allowed
        $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar_profil')) //upload and validate
            {
                $data['inputerror'][] = 'gambar_profil';
                $data['error_string'][] = 'Upload error: ' . $this->upload->display_errors('', ''); //show ajax error
                $data['status'] = false;
                echo json_encode($data);
                exit();
            }
        return $this->upload->data('file_name');
    }

    /*public function search()
    {
        // tangkap variabel keyword dari URL
        $keyword = $this->uri->segment(2);

        // cari di database
        $data = $this->db->from('masjid')->like('nama_masjid',$keyword)->get();  

        // format keluaran di dalam array
        foreach($data->result() as $row)
        {
            $arr['query'] = $keyword;
            $arr['suggestions'][] = array(
                'value' =>$row->nama_masjid,
                'alamat' => $row->alamat
                

            );
        }
        // minimal PHP 5.2
        echo json_encode($arr);
    }*/

    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = true;

        if ($this->input->post('nik') == '') {
            $data['inputerror'][] = 'nik';
            $data['error_string'][] = 'NIK harus diisi';
            $data['status'] = false;
        }

        if ($this->input->post('nama') == '') {
            $data['inputerror'][] = 'nama';
            $data['error_string'][] = 'Nama harus diisi';
            $data['status'] = false;
        }

        if ($this->input->post('email') == '') {
            $data['inputerror'][] = 'email';
            $data['error_string'][] = 'Email harus diisi';
            $data['status'] = false;
        }

        if ($this->input->post('notel') == '') {
            $data['inputerror'][] = 'notel';
            $data['error_string'][] = 'No Telpon harus diisi';
            $data['status'] = false;
        }

        if ($this->input->post('password') == '') {
            $data['inputerror'][] = 'password';
            $data['error_string'][] = 'Password harus diisi';
            $data['status'] = false;
        }

        if ($this->input->post('id_masjid') == '') {
            $data['inputerror'][] = 'id_masjid';
            $data['error_string'][] = 'Masjid harus diisi';
            $data['status'] = false;
        }

        if ($data['status'] === false) {
            echo json_encode($data);
            exit();
        }
    }
}
