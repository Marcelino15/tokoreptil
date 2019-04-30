<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_daftar extends CI_Model
{
  public $table 		= 'personal';
  public $filed_select  =["id_personal", "nama_personal", "foto_personal", "hp_personal", "email_personal", "provinsi_personal", "kabupaten_personal", "level_personal", "password_personal"];

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

  public function get_provinsi()
  {
      $this->db->order_by('nama_provinsi', 'asc');
      return $this->db->get('provinsi')->result();
  }
  public function get_kabupaten()
  {
      // kita joinkan tabel kota dengan provinsi
      $this->db->order_by('nama_kabupaten', 'asc');
      $this->db->join('provinsi', 'kabupaten.idprovinsi_kabupaten = provinsi.id_provinsi');
      return $this->db->get('kabupaten')->result();
  }

}