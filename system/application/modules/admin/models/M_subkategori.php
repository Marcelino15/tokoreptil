<?php if(!defined('BASEPATH')) { exit('No direct script access allowed');}

class M_subkategori extends CI_Model
{
	
	public $table = 'subkategori';
	public $field_select = ["id_subkategori", "nama_subkategori", "idkategori_subkategori"];

	public function __construct()
	{
		parent::__construct();
	}

	public function fetch_data($data)
	{
		$this->db->select($data['fields'])
			->from($data['table_view']);

		$data['total']  = $this->db->count_all_results(null, false);
		$sql		    = $this->db->get_compiled_select();
		$data['result'] = $this->db->query($sql)->result_array();
		//print('<pre>'); print_r($query); exit();
		return $data;
	}

	public function detail_subkategori($id_subkategori)
	{
		$this->db->select()
			->from($this->table)
			->where("id_subkategori", $id_subkategori);
		$query = $this->db->get_compiled_select();
		//print('<pre>'); print_r($query); exit();
		$data['result'] = $this->db->query($query)->row();
		return $data;
	}

	public function tambah($data)
	{
		$this->db->select()
			->from($data['table_view'])
			->set($data['form_data']);
		$sql = $this->db->get_compiled_insert();
		//print('<pre>'); print_r($sql); exit();
		$data['result'] =  $this->db->query($sql);
		return $data;
	}

	public function ubah_subkategori($data)
	{
		$this->db->select()
			->from($this->table)
			->where("id_subkategori", $data['id_subkategori']);
		$query = $this->db->set($data)->get_compiled_update();
		//print('<pre>'); print_r($query); exit();
		$this->db->query($query);
		return true;
	}

	public function hapus($table, $id)
	{
		$this->db->select()
			->from($this->table)
			->where('id_subkategori', $id);
		$query = $this->db->get_compiled_delete();
		$this->db->query($query);
		return true;
	}



}