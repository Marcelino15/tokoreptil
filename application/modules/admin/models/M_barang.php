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
		$table = 'v_barang_personal_kategori';
		$this->db->select()
			->from($table);
			$data['total']	= $this->db->count_all_results(null, false);
			$sql			= $this->db->get_compiled_select();
			$data['result']	= $this->db->query($sql)->result_array();

			return $data;	
	}

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
		$this->db->query($query);
		return true;
	}

	public function get_kategori()
    {
        $this->db->order_by('nama_kategori', 'asc');
        return $this->db->get('kategori')->result();
    }
}