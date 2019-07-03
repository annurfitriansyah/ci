<?php defined('BASEPATH') OR exit('No direct script access allowed');

class List_user_model extends CI_Model {

    var $table='admin_masjid';
    var $column_search=array('id_jss', 'nik', 'nama','alamat','email','no_telpon','password','level');
    var $order=array('level'=> 'asc');

    public function __construct() {
        parent::__construct();
    }

    public function save_data($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }


    private function _get_datatables_query() {
        //$this->db->from($this->table);

        $this->db->select('*');
        $this->db->from('admin_masjid ao');
        $this->db->join('masjid m', 'm.id_masjid = ao.id_masjid', 'inner');
        $this->db->where('m.id_masjid = ao.id_masjid');
        //$this->db->where('status', 1);
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
                    $this->db->order_by('id_jss', $_POST['order']['0']['dir']);
                break;
                case 2:
                    $this->db->order_by('nik', $_POST['order']['0']['dir']);
                break;
                case 4:
                    $this->db->order_by('nama', $_POST['order']['0']['dir']);
                break;
                case 5:
                    $this->db->order_by('alamat', $_POST['order']['0']['dir']);
                break;
                case 6:
                    $this->db->order_by('email', $_POST['order']['0']['dir']);
                break;
                case 7:
                    $this->db->order_by('no_telpon', $_POST['order']['0']['dir']);
                break;
                case 8:
                    $this->db->order_by('password', $_POST['order']['0']['dir']);
                break;
                case 9:
                    $this->db->order_by('level', $_POST['order']['0']['dir']);
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

    public function get_user_by_id(){
        $this->db->select('*');
        $this->db->from('admin_masjid ao');
        $this->db->join('masjid m', 'm.id_masjid = ao.id_masjid', 'inner');
        $this->db->where('m.id_masjid = ao.id_masjid');
        
        //$this->db->where('pr.status', 1);

        //$this->db->from('admin_masjid');
    $query = $this->db->get();
    return $query->result();

    }

}