<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}


class M_personal extends CI_Model
{

    public $table = 'personal';
    public $field_select =["id_personal", "nama_personal", "foto_personal", "hp_personal", "email_personal", "lokasi_personal", "level_personal", "password_personal"] ;
    
    public function fetch_data($data)
    {
        $this->db->select($data['fields'])
            ->from($data['table_view']);
        // unset($data);
        $data['total']  = $this->db->count_all_results(null, false);
        $sql            = $this->db->get_compiled_select();
        $data['result'] = $this->db->query($sql)->result_array();

        return $data;
    }

    public function fetch_id($data)
    {
        $this->db->select()
            ->from($data['table_view'])
            ->where('id_personal',$data['id_detail']);
        //unset($data);
        $data['total']  = $this->db->count_all_results(null, false);
        $sql            = $this->db->get_compiled_select();
        $data['result'] = $this->db->query($sql)->result_array();
        //dump_exit($data);
        return $data;
    }

    public function hapus($table, $id)
    {
        $this->db->select()
            ->from($table)
            ->where('id_personal', $id);
        $query = $this->db->get_compiled_delete();
        $this->db->query($query);

        return true;
    }

    public function tambah($data)
    {
        // dump_exit($data);
        $this->db->select()
            ->from($data['table_view'])
            ->set($data['form_data']);
        $sql = $this->db->get_compiled_insert();
        // dump_exit($sql);
        $data['result'] = $this->db->query($sql);
        return $data;
    }

    public function ubah_personal($data)
    {
        $this->db->select()
            ->from($this->table)
            ->where("id_personal", $data['id_personal']);
        $query = $this->db->set($data)->get_compiled_update();
        //print('<pre>'); print_r($query); exit();
        $this->db->query($query);
        return true;
    }

    public function detail_personal($id_personal)
    {
        $this->db->select()
            ->from($this->table)
            ->where("id_personal", $id_personal);
        $query = $this->db->get_compiled_select();
        $data['result'] = $this->db->query($query)->row();
        print('<pre>'); print_r($query); exit();
        return $data;    
    }

    public function upload($data)
    {
        $this->db->select()
            ->from($this->table)
            ->where("id_personal", $data['id_personal']);
        $query = $this->db->set($data)->get_compiled_update();
        $this->db->query($query);    
        return true;
    }
}
