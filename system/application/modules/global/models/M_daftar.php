<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_daftar extends CI_Model
{
  public $table 		= 'personal';
  public $filed_select  =["id_personal", "nama_personal", "foto_personal", "hp_personal", "email_personal", "lokasi_personal", "level_personal", "password_personal"];

  public function __construct(){
  	parent::__construct();
  }
  public function tambah($data)
  {
  	$this->db->select()
  		->from($this->table);
  	$query	= $this->db->set($data)->get_compiled_insert();
  	$this->db->query($query);
  	return $data;
  }
}