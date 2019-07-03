<?php defined('BASEPATH') OR exit('No direct script access allowed');

class List_masjid_model extends CI_Model {

    var $table='masjid';
    var $column_search=array('id_masjid', 'nama_masjid', 'alamat','latitude','longitude','kategori_masjid','gambar','status');
    var $order=array('id_masjid'=> 'asc');

    public function __construct() {
        parent::__construct();
    }

    public function save_data($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }


    private function _get_datatables_query() {
        $this->db->from($this->table);
        $this->db->where('status', 1);
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
                    $this->db->order_by('id_masjid', $_POST['order']['0']['dir']);
                break;
                case 2:
                    $this->db->order_by('nama_masjid', $_POST['order']['0']['dir']);
                break;
                case 3:
                    $this->db->order_by('alamat', $_POST['order']['0']['dir']);
                break;
                case 4:
                    $this->db->order_by('latitude', $_POST['order']['0']['dir']);
                break;
                case 5:
                    $this->db->order_by('longitude', $_POST['order']['0']['dir']);
                break;
                case 6:
                    $this->db->order_by('kategori_masjid', $_POST['order']['0']['dir']);
                break;
                case 7:
                    $this->db->order_by('gambar', $_POST['order']['0']['dir']);
                break;
                case 8:
                    $this->db->order_by('status', $_POST['order']['0']['dir']);
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

    private function _get_datatables_query2() {
        $this->db->from($this->table);
        $this->db->where('status', 0);
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
                    $this->db->order_by('id_masjid', $_POST['order']['0']['dir']);
                break;
                case 2:
                    $this->db->order_by('nama_masjid', $_POST['order']['0']['dir']);
                break;
                case 3:
                    $this->db->order_by('alamat', $_POST['order']['0']['dir']);
                break;
                case 4:
                    $this->db->order_by('latitude', $_POST['order']['0']['dir']);
                break;
                case 5:
                    $this->db->order_by('longitude', $_POST['order']['0']['dir']);
                break;
                case 6:
                    $this->db->order_by('kategori_masjid', $_POST['order']['0']['dir']);
                break;
                case 7:
                    $this->db->order_by('gambar', $_POST['order']['0']['dir']);
                break;
                case 8:
                    $this->db->order_by('status', $_POST['order']['0']['dir']);
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

    function get_datatables2() {
        $this->_get_datatables_query2();
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

    function count_filtered2() {
        $this->_get_datatables_query2();
        $query=$this->db->get();
        return $query->num_rows();
    }

    public function count_all2() {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
    
    public function delete_masjid($id) {
        $this->db->set('status', 0);
        $this->db->where('id_masjid', $id);
        return $this->db->update($this->table);
    }

    public function edit_masjid($id)
    {   
        $this->db->set('status', 1);
        $this->db->where('id_masjid', $id);
        return $this->db->update($this->table);
       
    }

    public function get_masjid_by_id($id){
        $this->db->from($this->table);
        $this->db->where('id_masjid', $id);

        $query = $this->db->get();
        return $query->row();

    }

}