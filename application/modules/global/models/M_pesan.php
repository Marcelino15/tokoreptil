<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class M_pesan extends CI_Model
{
    public function tambah_pesan($data)
    {
        $this->db->select()
            ->from($this->table)
        $query = $this->db->set($data)->get_compiled_insert();
        //print('<pre>'); print_r($data); exit();
        $this->db->query($query);
        return true;
    }
}