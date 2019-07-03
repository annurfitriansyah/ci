<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model {

    var $table='pemasukan';
    // var $column_search=array('jenis_pemasukan', 'tanggal', 'jumlah','keterangan','sumber');
    var $order=array('id_pemasukan'=> 'asc');

    var $hasil;

    public function __construct() {
        parent::__construct();       
    }

    public function save_data($data, $tabel) {
        $this->db->insert($tabel, $data);
        return $this->db->insert_id();
    }

    private function _get_datatables_query($tabel) {
        
        $data['user'] = $this->db->get_where('admin_masjid', ['email' => $this->session->userdata('email')])->row_array();
        if($tabel == 'pengeluaran') {
            $this->db->select('id_pengeluaran as id, tanggal, jenis, jumlah, keterangan, sumber');
        } else {
           $this->db->select('id_pemasukan as id, tanggal, jenis_pemasukan as jenis, jumlah, keterangan, sumber');
        }
        if ($data['user']['level'] == 0) {
            $this->db->from($tabel);
        }else {
            $this->db->from($tabel);
            $this->db->where('id_masjid', $data['user']['id_masjid']);
        }
        
        // $i=0;

            // foreach ($this->column_search as $item) // loop column 

            //     {
            //     if($_POST['search']['value']) // if datatable send POST for search

            //         {

            //         if($i===0) // first loop

            //             {
            //             $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
            //             $this->db->like($item, $_POST['search']['value']);
            //         }

            //         else {
            //             $this->db->or_like($item, $_POST['search']['value']);
            //         }

            //         if(count($this->column_search) - 1==$i) //last loop
            //         $this->db->group_end(); //close bracket
            //     }

            //     $i++;
            // }

        // if(isset($_POST['order'])) // here order processing

        //     {
        //     switch ($_POST['order']['0']['column']) {
        //         case 1:
        //             $this->db->order_by('jenis_pemasukan', $_POST['order']['0']['dir']);
        //         break;
        //         case 2:
        //             $this->db->order_by('tanggal', $_POST['order']['0']['dir']);
        //         break;
        //         case 3:
        //             $this->db->order_by('keterangan', $_POST['order']['0']['dir']);
        //         break;
        //         case 4:
        //             $this->db->order_by('jumlah', $_POST['order']['0']['dir']);
        //         break;
        //         case 5:
        //             $this->db->order_by('sumber', $_POST['order']['0']['dir']);
        //         break;
        //         default:
        //             # code... break;
        //     }
        // }

        // else if(isset($this->order)) {
        //     $order=$this->order;
        //     $this->db->order_by(key($order), $order[key($order)]);
        // }


    }

    function get_datatables($awal = null, $akhir = null) {
        $this->_get_datatables_query('pemasukan');
        if($awal != null && $akhir != null) {
            $this->db->where('tanggal >=', $awal);
            $this->db->where('tanggal <=', $akhir);
        }
        // if($awal != null && $akhir != null)
        // if($_POST['length'] !=-1) $this->db->limit($_POST['length'], $_POST['start']);

        $query=$this->db->get()->result();

        $this->_get_datatables_query('pengeluaran');
        if($awal != null && $akhir != null) {
            $this->db->where('tanggal >=', $awal);
            $this->db->where('tanggal <=', $akhir);
        }
        // if($_POST['length'] !=-1) $this->db->limit($_POST['length'], $_POST['start']);

        $query2 = $this->db->get()->result();
        
        $this->hasil = array_merge($query, $query2);

        // var_dump($hasil);
        // die;

        return $this->hasil;
    }

    function count_filtered() {
        $this->_get_datatables_query('pemasukan');
        $query=$this->db->get();
        return $query->num_rows();
    }

    function count_filtered2() {
        return count($this->hasil);
    }

    public function count_all($tabel) {
        $this->db->from($tabel);
        return $this->db->count_all_results();
    }

    public function count_all2() {
        return count($this->hasil);
    }

    public function kegiatan_list($id_kegiatan) {
        //$hasil=$this->db->query("SELECT * FROM kegiatan");

        $this->db->from('kegiatan');
        $this->db->where('id_kegiatan',$id_kegiatan);

        return $this->db->get()->row();

       // return $hasil->result();
    }

    public function delete_kegiatan($id, $tabel) {
        // UPDATE obat SET status                  =  0 WHERE id_obat     =  1
        //$this->db->set('status', 0);
        $this->db->where('id_kegiatan', $id);
        $this->db->delete($tabel);
        return;
    }

    public function edit_kegiatan($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function get_kegiatan_by_id($id, $tabel){
        $this->db->from($tabel);
        $this->db->where('id_kegiatan', $id);

        $query = $this->db->get();
        return $query->row();

    }

}