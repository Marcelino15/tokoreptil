<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class M_katar extends CI_Model
{
    public $table = 'kategori_artikel';
    public $field_select = ["id_katar", "nama_katar", "insert_on"];

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
        //print('<pre>'); print_r($data); exit();
        return $data;
    }

    public function detail_katar($id_katar)
    {
        $this->db->select()
            ->from($this->table)
            ->where("id_katar", $id_katar);
        $query = $this->db->get_compiled_select();
        //print('<pre>'); print_r($query); exit();
        $data['result'] = $this->db->query($query)->row();
        return $data;
    }

    public function tambah_katar($data)
    {
        $this->db->select()
            ->from($this->table);
        $query = $this->db->set($data)->get_compiled_insert();
        //print('<pre>'); print_r($query); exit();
        $this->db->query($query);
        return true;
    }

    public function ubah_katar($data)
    {
        $this->db->select()
            ->from($this->table)
            ->where("id_katar", $data['id_katar']);
        $query = $this->db->set($data)->get_compiled_update();
        //print('<pre>'); print_r($query); exit();
        $this->db->query($query);
        return true;
    }

    public function hapus($table, $id)
    {
        $this->db->select()
            ->from($this->table)
            ->where('id_katar', $id);
        $query = $this->db->get_compiled_delete();
        $this->db->query($query);
        return true;
    }

}