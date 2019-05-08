<?php if (!defined('BASEPATH')) { exit('No direct script access allowed');}

class M_kabupaten extends CI_Model
{
    public $table = 'kabupaten';
    public $field_select = ["id_kabupaten", "idprovinsi_kabupaten", "nama_kabupaten"];

    public function __construct()
    {
        parent::__construct();
    }

    public function fetch_data($data)
    {
        $this->db->select($data['fields'])
            ->from($data['table_view']);
        $data['total']  = $this->db->count_all_results(null, false);
        $sql            = $this->db->get_compiled_select();
        $data['result'] = $this->db->query($sql)->result_array();
        //print('<pre>'); print_r($sql); exit();
        return $data;
    }

    public function detail_kabupaten($id_kabupaten)
    {   
        $table = 'v_provinsi_kabupaten';
        $this->db->select()
            ->from($table)
            ->where("id_kabupaten", $id_kabupaten);
        $query = $this->db->get_compiled_select();
        //print('<pre>'); print_r($query)->row();
        $data['result'] = $this->db->query($query)->row();
        return $data;
    }

    public function tambah_kabupaten($data)
    {
        $this->db->select()
            ->from($this->table);
        $query = $this->db->set($data)->get_compiled_insert();
        //print('<pre>'); print_r($query); exit();
        $this->db->query($query);
        return true;
    }

    public function ubah_kabupaten($data)
    {
        $this->db->select()
            ->from($this->table)
            ->where("id_kabupaten", $data['id_kabupaten']);
        $query = $this->db->set($data)->get_compiled_update();
        //print('<pre>'); print_r($query); exit();
        $this->db->query($query);
        return true;
    }

    public function hapus($table, $id)
    {
        $this->db->select()
            ->from($this->table)
            ->where('id_kabupaten', $id);
        $query = $this->db->get_compiled_delete();
        $this->db->query($query);
        return true;
    }

    public function get_provinsi()
  {
      $this->db->order_by('nama_provinsi', 'asc');
      return $this->db->get('provinsi')->result();
  }
}