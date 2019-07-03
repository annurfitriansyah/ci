<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_periode_model extends CI_Model {

    var $table='kegiatan';
    var $column_search=array('jenis_kegiatan', 'tanggal', 'jam','keterangan');
    var $order=array('id_kegiatan'=> 'asc');

    public function __construct() {
        parent::__construct();
       
    }

    public function save_data($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }


    private function _get_datatables_query() {
        
        $data['user'] = $this->db->get_where('admin_masjid', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['user']['level'] == 0) {
            $this->db->from($this->table);
        }else {
            $this->db->from($this->table);
            $this->db->where('id_masjid', $data['user']['id_masjid']);
        }
        
        $i=0;

        foreach ($this->column_search as $item) // loop column 

            {
            if($_POST['search']['value']) // if datatable send POST for search

                {

                if($i===0) // first loop

                    {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }

                else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if(count($this->column_search) - 1==$i) //last loop
                $this->db->group_end(); //close bracket
            }

            $i++;
        }

        if(isset($_POST['order'])) // here order processing

            {
            switch ($_POST['order']['0']['column']) {
                case 1:
                    $this->db->order_by('jenis_kegiatan', $_POST['order']['0']['dir']);
                break;
                case 2:
                    $this->db->order_by('tanggal', $_POST['order']['0']['dir']);
                break;
                case 4:
                    $this->db->order_by('jam', $_POST['order']['0']['dir']);
                break;
                default:
                    # code... break;
            }
        }

        else if(isset($this->order)) {
            $order=$this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }


    }

    function get_datatables() {
        $this->_get_datatables_query();
        if($_POST['length'] !=-1) $this->db->limit($_POST['length'], $_POST['start']);

        $query=$this->db->get();
        return $query->result();
    }

    function count_filtered() {
        $this->_get_datatables_query();
        $query=$this->db->get();
        return $query->num_rows();
    }

    public function count_all() {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function kegiatan_list($id_kegiatan) {
        //$hasil=$this->db->query("SELECT * FROM kegiatan");

        $this->db->from('kegiatan');
        $this->db->where('id_kegiatan',$id_kegiatan);

        return $this->db->get()->row();

       // return $hasil->result();
    }

    public function delete_kegiatan($id) {
        // UPDATE obat SET status                  =  0 WHERE id_obat     =  1
        //$this->db->set('status', 0);
        $this->db->where('id_kegiatan', $id);
        $this->db->delete($this->table);
        return;
    }

    public function edit_kegiatan($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function get_kegiatan_by_id($id){
        $this->db->from($this->table);
        $this->db->where('id_kegiatan', $id);

        $query = $this->db->get();
        return $query->row();

    }

}