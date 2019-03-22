<?php if(!defined('BASEPATH')){
	exit('No direct script access allowed');
}

class M_barang extends CI_Model
{
	public $table 			= 'barang';
	public $field_select	= ["id_barang", "nama_barang", "keterangan_barang", "gambar_barang1", "gambar_barang2", "gambar_barang3", "idsubkategori_barang", "idpersonal_barang"];	

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
		//print_r('<pre>'); print_r($query); exit();	
		return $data;
	}
}