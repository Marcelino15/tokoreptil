<?php if(!defined('BASEPATH')){
    exit('No direct script access allowed');
}

class M_artikel extends CI_Model
{
    public $table           = 'artikel';
    public $field_select    = ["id_artikel", "judul_artikel", "isi_artikel", "penulis_artikel", "kategori_artikel", "gambar_artikel"];

    public function __construct()
    {
        parent::__construct();
    }
    
    public function fetch_data($data)
    {
       /*  $this->db->select($data['fields'])
            ->from($data['table_view']); */
        if($data['search'] != null){
            $this->db->select($data['fields']);
            $this->db->from($data['table_view']);
            $this->db->like('judul_artikel', $data['search']);
            $this->db->or_like('kategori_artikel', $data['search']);
        } else {
            $this->db->select($data['fields']);
            $this->db->from($data['table_view']);
        }

        $data['total']  = $this->db->count_all_results(null, false);
        $sql            = $this->db->get_compiled_select();
        $data['result'] = $this->db->query($sql)->result_array();
        return $data;
    }

    public function fetch_id($data)
    {
        //print('<pre>'); print_r($data); exit();
        $this->db->select()
            ->from($data['table_view'])
            ->where('id_artikel', $data['id_detail']);
        $data['total']  = $this->db->count_all_results(null, false);
        $sql            = $this->db->get_compiled_select();
        $data['result'] = $this->db->query($sql)->result_array();
        
        return $data;
    }

    public function hapus($table, $id)
    {
        $this->db->select()
            ->from($table)
            ->where('id_artikel', $id);
        $query = $this->db->get_compiled_delete();
        $this->db->query($query);
        return true;  
    }

    public function tambah($data)
    {
        $this->db->select()
            ->from($this->table);
        $query = $this->db->set($data)->get_compiled_insert();
        //print('<pre>'); print_r($query); exit();
        $this->db->query($query);
        return true;
    }

    public function ubah_artikel($data)
    {
        $this->db->select()
            ->from($this->table)
            ->where("id_artikel", $data['id_artikel']);
        $query = $this->db->set($data)->get_compiled_update();
        //print('<pre>'); print_r($query); exit();
        $this->db->query($query);
        return true;
    }

    public function detail_artikel($id_artikel)
    {
        $this->db->select()
            ->from($this->table)
            ->where("id_artikel", $id_artikel);
        $query = $this->db->get_compiled_select();
        $data['result'] = $this->db->query($query)->row();
        return $data;
    }

    public function upload($data)
    {
        $this->db->select()
            ->from($this->table)
            ->where("id_artikel", $data['id_artikel']);
        $query = $this->db->set($data)->get_compiled_update();
        $this->db->query($query);    
        return true;
    }

    public function detail_blog($id_artikel)
    {   
        $field_select = ["id_artikel", "judul_artikel", "isi_artikel", "penulis_artikel", "kategori_artikel", "gambar_artikel"];

        $this->db->select()
            ->from($this->table)
            ->where("id_artikel", $id_artikel);
        $query = $this->db->get_compiled_select();
        //print_r('<pre>'); print_r($query); exit();    
        $data['result'] = $this->db->query($query)->row();
        return $data;
    }

    
}