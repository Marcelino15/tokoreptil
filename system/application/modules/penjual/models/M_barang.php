<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class M_barang extends CI_Model
{
	public $table = 'personal';

	public function fetch_data($data)
	{
		$this->db->select($data['fields'])
			->from($data['table_view']);
		$data['total']	= $this->db->count_all_results(null, false);
		$sql			= $this->db->get_compiled_select();
		$data['result']	= $this->db->query($sql)->result_array();
		return $data;
	}

	public function fetch_id($data)
	{
		$this->db->select()
			->from($data['table_view'])
			->where('id_barang', $data['id_barang']);
		$data['total']	= $this->db->count_all_results(null, false);
		$sql			= $this->db->get_compiled_select();
		$data['result']	= $this->db->query($sql)->result_array();
		return $data;
	}


}