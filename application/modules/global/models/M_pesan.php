<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class M_pesan extends CI_Model
{

	public $table 		= 'pesan';
  	public $filed_select  =[
            'id_pesan',
            'judul_pesan',
            'email_pesan',
            'hp_pesan',
            'isi_pesan',
            'levelpengirim_pesan',
            'status_pesan',
        ];
        
    public function tambah_pesan($data)
    {
        $this->db->select()
  		->from($this->table);
	  	$query	= $this->db->set($data)->get_compiled_insert();
	  	$this->db->query($query);
	  	return $data;
    }
}