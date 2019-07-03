<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller{
    private $awal = null;
    private $akhir = null;
    private $result = null;
    function __construct(){
        parent::__construct();
        $this->load->model('laporan_model');
        $this->load->helper('url');
        $this->load->library('form_validation');
        // /$this->load->library('session');
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
        
        $this->form_validation->set_rules('tanggal_awal', 'Awal', 'required');
        $this->form_validation->set_rules('tanggal_akhir', 'Akhir', 'required');


        // if($this->form_validation->run() != FALSE) {
        //     $this->awal = str_replace('/', '-', $this->input->post('tanggal_awal'));
        //     $this->akhir = str_replace('/', '-', $this->input->post('tanggal_akhir'));
        // } 

        // var_dump($this->awal); die;
        // $this->result = $this->laporan_model->get_datatables($this->awal, $this->akhir);
        // $list2 = $this->laporan_model->count_filtered2();
        // var_dump($this->result);
        // foreach($list as $l) {
        //     echo $l->tanggal;
        // }
        // die;
        
        if ($level == 0) {

                $this->theme_admin->load('laporan_view', $data);
        } else {
                
                // $hasil = [];
                $satu = $this->db->get('pemasukan')->result_array();
                $dua = $this->db->get('pengeluaran')->result_array();
                
                // $hasil = array_merge($satu, $dua);
                // var_dump($hasil);
                // die;
            $this->theme_pengelola->load('laporan_view', $data);
        }

    }
 
    public function ajax_list(){
		$this->load->helper('url');

        // echo $_POST['tanggal_awal'];
        // var_dump($_POST['tanggal_awal']);
        // die;
        $ada = $this->input->post('tanggal_awal');
        if($ada) {
            // $list = NULL;
            $list = $this->laporan_model->get_datatables($this->input->post('tanggal_awal'), $this->input->post('tanggal_akhir'));
        } else {
            $list = $this->laporan_model->get_datatables();
        }
		// $list = $this->result;
        // var_dump($list);
        // die;
		$data = array();
        $no = 1;
		foreach ($list as $item) {
            $row = array();
            $row[] = $no++;
            $row[] = $item->tanggal;
			$row[] = $item->jenis;
			$row[] = 'Rp '. number_format($item->jumlah,0,'.','.').',-';
			$row[] = $item->keterangan;
			$row[] = $item->sumber;
            //$row[] = '<a><img src="'.base_url('uploads/kegiatan/'.$item->gambar).'" alt="image" class="img-responsive thumb-lg"></a>';


            $row[]  ='
            <button class="btn btn-sm btn-danger" onclick="delete_kegiatan('."'".$item->id."','".$item->jenis."'".')"><i class="fa fa-trash"> Hapus</i>
            </button>';
            $row[] = '<button class="btn btn-sm btn-warning" onclick="edit_kegiatan('."'".$item->id."'".')"><i class="fa fa-pencil"> Ubah</i>
            </button>';
        

			$data[] = $row;

        }

		$output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->laporan_model->count_all2(),
                        "recordsFiltered" => $this->laporan_model->count_filtered2(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);

    }
    
    public function ajax_add_kegiatan()
    {   $data['user'] = $this->db->get_where('admin_masjid', ['email' => $this->session->userdata('email')])->row_array();
        $this->_validate();
        $data = array(
            'jenis_kegiatan'    => $this->input->post('jenis_kegiatan'),            
            'tanggal'           => $this->input->post('tanggal'),
            'jam'               => $this->input->post('jam'),
            'keterangan'        => $this->input->post('keterangan'),
            'id_masjid'        => $data['user']['id_masjid']
            
            );

        if(!empty($_FILES['gambar']['name']))
        {
            $upload = $this->_do_upload();
            $data['gambar'] = $upload;
        }

        $this->laporan_model->save_data($data, 'pemasukan');

        
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_update_kegiatan()
    {   
        $id_kegiatan = $this->input->post('id_kegiatan');

        $kegiatan= $this->laporan_model->kegiatan_list($id_kegiatan);

        $data = array(
        'jenis_kegiatan' => $this->input->post('jenis_kegiatan'),
        'tanggal' => $this->input->post('tanggal'),
        'jam' => $this->input->post('jam'),
        'keterangan' => $this->input->post('keterangan'),
        );

        if(!empty($_FILES['gambar']['name']))
        {
        $gambar_lama = $kegiatan->gambar;
        if ($gambar_lama != 'default.jpeg') {
        unlink(FCPATH . 'uploads/kegiatan/' . $gambar_lama);
        }
        
        $upload = $this->_do_upload();
        $data['gambar'] = $upload;
        }

        $insert = $this->laporan_model->edit_kegiatan(array('id_kegiatan' => $this->input->post('id_kegiatan')),
        $data);
        echo json_encode(array("status" => TRUE));
    }

	private function _do_upload()
    {
        $config['upload_path']          = 'uploads/kegiatan/';
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

	public function ajax_delete_kegiatan()
    {
        $id = $this->input->post('id_kegiatan');
        $this->laporan_model->delete_kegiatan($id, 'pemasukan');
        echo json_encode(array("status" => TRUE));

    }

    public function ajax_kegiatan($id)
    {
        $data = $this->laporan_model->get_kegiatan_by_id($id, 'pemasukan');
        echo json_encode($data);
    }

	function tampil_kegiatan(){
        $data = $this->laporan_model->kegiatan_list();

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