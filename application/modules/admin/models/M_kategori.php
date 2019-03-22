<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class M_kategori extends CI_Model
{

	public $table = 'kategori';
	public $field_select = ["id_kategori", "nama_kategori"];

	public function __construct()
	{
		parent::__construct();
	}

	public function fetch_data($data)
	{
		$this->db->select($data['fields'])
			->from($data['table_view']);

		$data['total'] 	= $this->db->count_all_results(null, false);
		$sql		    = $this->db->get_compiled_select();
		$data['result'] = $this->db->query($sql)->result_array();
		//print('<pre>'); print_r($query); exit();
		return $data;	
	}

	public function detail_kategori($id_kategori)
	{
		$this->db->select()
			->from($this->table)
			->where("id_kategori", $id_kategori);
		$query = $this->db->get_compiled_select();
		//print('<pre>'); print_r($query); exit();
		$data['result'] = $this->db->query($query)->row();
		return $data;
	}

	public function tambah_kategori($data)
	{
		$this->db->select()
			->from($this->table);
		$query = $this->db->set($data)->get_compiled_insert();
		//print('<pre>'); print_r($query); exit();
		$this->db->query($query);
		return true;
	}

	public function ubah_kategori($data)
	{
		$this->db->select()
			->from($this->table)
			->where("id_kategori", $data['id_kategori']);
		$query = $this->db->set($data)->get_compiled_update();
		//print('<pre>'); print_r($query); exit();
		$this->db->query($query);
		return true;
	}

	public function hapus($table, $id)
	{
		$this->db->select()
			->from($this->table)
			->where('id_kategori', $id);
		$query = $this->db->get_compiled_delete();
		$this->db->query($query);	
		return true;
	}
}