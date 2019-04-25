<?php if(!defined('BASEPATH')){
	exit('No direct script access allowed');
}

class M_barang extends CI_Model
{
	public $table 			= 'barang';
	public $field_select = ["id_barang", "nama_barang", "harga_barang", "keterangan_barang", "gambar1_barang", "gambar2_barang", "gambar3_barang", "idkategori_barang", "idpersonal_barang", "status_barang"];

	public function __construct()
	{
		parent::__construct();
	}
	public function fetch_data($data)
	{
		$this->db->select($data['fields'])
			->from($data['table_view']);
			$data['total']	= $this->db->count_all_results(null, false);
			$sql			= $this->db->get_compiled_select();
			$data['result']	= $this->db->query($sql)->result_array();

			return $data;	
	}

	/* public function tampil($data)
	{
		$status_barang = 'ok';
		$this->db->select()
			->from($this->table)
			->where("status_barang", $status_barang);
		$data['total']	= $this->db->count_all_results(null, false);
		$sql			= $this->db->get_compiled_select();
		$data['result']	= $this->db->query($sql)->result_array();
		//print('<pre>'); print_r($sql); exit(); 
		return $data;	
	}

	public function tampil_ular($data)
	{
		$status_barang = 'ok';
		$idkategori_barang = '1';
		$this->db->select()
			->from($this->table)
			->where("status_barang", $status_barang)
			->where("idkategori_barang", $idkategori_barang);		

		$data['total']	= $this->db->count_all_results(null, false);
		$sql			= $this->db->get_compiled_select();
		$data['result']	= $this->db->query($sql)->result_array();

		return $data;	
	}

	public function tampil_katak($data)
	{
		$status_barang = 'ok';
		$idkategori_barang = '2';
		$this->db->select()
			->from($this->table)
			->where("status_barang", $status_barang)
			->where("idkategori_barang", $idkategori_barang);		

		$data['total']	= $this->db->count_all_results(null, false);
		$sql			= $this->db->get_compiled_select();
		$data['result']	= $this->db->query($sql)->result_array();
		//print('<pre>'); print_r($sql); exit();
		return $data;	
	}

	public function tampil_kura($data)
	{
		$status_barang = 'ok';
		$idkategori_barang = '3';
		$this->db->select()
			->from($this->table)
			->where("status_barang", $status_barang)
			->where("idkategori_barang", $idkategori_barang);		

		$data['total']	= $this->db->count_all_results(null, false);
		$sql			= $this->db->get_compiled_select();
		$data['result']	= $this->db->query($sql)->result_array();

		return $data;	
	}

	public function tampil_kadal($data)
	{
		$status_barang = 'ok';
		$idkategori_barang = '4';
		$this->db->select()
			->from($this->table)
			->where("status_barang", $status_barang)
			->where("idkategori_barang", $idkategori_barang);		

		$data['total']	= $this->db->count_all_results(null, false);
		$sql			= $this->db->get_compiled_select();
		$data['result']	= $this->db->query($sql)->result_array();

		return $data;	
	}

	public function tampil_acc($data)
	{
		$status_barang = 'ok';
		$idkategori_barang = '5';
		$this->db->select()
			->from($this->table)
			->where("status_barang", $status_barang)
			->where("idkategori_barang", $idkategori_barang);		

		$data['total']	= $this->db->count_all_results(null, false);
		$sql			= $this->db->get_compiled_select();
		$data['result']	= $this->db->query($sql)->result_array();

		return $data;	
	}

	public function tampil_ser($data)
	{
		$status_barang = 'ok';
		$idkategori_barang = '6';
		$this->db->select()
			->from($this->table)
			->where("status_barang", $status_barang)
			->where("idkategori_barang", $idkategori_barang);		

		$data['total']	= $this->db->count_all_results(null, false);
		$sql			= $this->db->get_compiled_select();
		$data['result']	= $this->db->query($sql)->result_array();

		return $data;	
	} */

	public function detail_barang($id_barang)
	{
		$this->db->select()
			->from($this->table)
			->where("id_barang", $id_barang);
		$query = $this->db->get_compiled_select();
		//print_r('<pre>'); print_r($query); exit();	
		$data['result'] = $this->db->query($query)->row();
		return $data;
	}

	public function tambah_barang($data)
	{
		$this->db->select()
			->from($this->table);
		$query = $this->db->set($data)->get_compiled_insert();
		//print('<pre>'); print_r($query); exit();
		$this->db->query($query);
		return true;
	}

	public function ubah_barang($data)
	{
		$this->db->select()
			->from($this->table)
			->where("id_barang", $data['id_barang']);
		$query = $this->db->set($data)->get_compiled_update();
		//print('<pre>'); print_r($query); exit();
		$this->db->query($query);
		return true;
	}

	public function hapus($table, $id)
	{
		$this->db->select()
			->from($this->table)
			->where('id_barang', $id);
		$query = $this->db->get_compiled_delete();
		return true;
	}
}