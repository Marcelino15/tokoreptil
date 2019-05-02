<?php if(!defined('BASEPATH')){
    exit('No direct script access allowed');
}

class M_frontend extends CI_Model
{
    public $table           = 'barang';
    public $field_select    = ["id_barang", "nama_barang", "harga_barang", "keterangan_barang", "gambar1_barang", "gambar2_barang", "gambar3_barang", "idkategori_barang", "idpersonal_barang", "status_barang"];

    public function _construct()
    {
        parent::__construct();
    }
	
    public function fetch_data($data)
    {
        $this->db->select($data['fields'])
            ->from($data['table_view']);
        $data['total']  = $this->db->count_all_results(null, fasle);
        $sql            = $this->db->get_compiled_select();
        $data['result'] = $this->db->query($sql)->result_array();

        return $data;
	}
	
	public function fetch_id($data)
    {
		$table = 'v_barang_personal_kategori';
		$field_select = ["id_barang","nama_barang","harga_barang","keterangan_barang","gambar1_barang","gambar2_barang","gambar3_barang","idkategori_barang","idpersonal_barang","id_personal","nama_personal","hp_personal","lokasi_personal","id_kategori","nama_kategori"];
		//$id_barang = 'id_barang';
        $this->db->select()
            ->from($data['table_view'])
            ->where('id_barang',$data['id_detail']);
        $data['total']  = $this->db->count_all_results(null, false);
        $sql            = $this->db->get_compiled_select();
        $data['result'] = $this->db->query($sql)->result_array();
        //print('<pre>'); print_r($sql); exit();
        return $data;
    }
    public function tampil($data)
	{
		$status_barang = 'ok';
		if($data['search'] != null){
			$this->db->select('*');
			$this->db->from('barang');
			$this->db->like('nama_barang', $data['search']);
		}else if($data['sorting'] == 0){
			$this->db->select()
            ->from($this->table)
            ->where("status_barang", $status_barang)
            ->order_by('harga_barang', 'ASC');
         }else if($data['sorting'] == 1){
			$this->db->select()
            ->from($this->table)
            ->where("status_barang", $status_barang)
            ->order_by('harga_barang', 'DESC');
		}else{
			$this->db->select()
			->from($this->table)
			->where("status_barang", $status_barang);
		} 
		

		$data['total']	= $this->db->count_all_results(null, false);
		$sql			= $this->db->get_compiled_select();
		$data['result']	= $this->db->query($sql)->result_array();
		/* print('<pre>'); print_r($sql); exit(); */
		return $data;	
	}

	public function tampil_ular($data)
	{
		$status_barang = 'ok';
		$idkategori_barang = '1';
		if($data['search'] != null){
			$this->db->select('*');
			$this->db->from('barang');
			$this->db->where("idkategori_barang", $idkategori_barang);
			$this->db->like('nama_barang', $data['search']);
		}else if($data['sorting'] == 0){
			$this->db->select()
            ->from($this->table)
			->where("status_barang", $status_barang)
			->where("idkategori_barang", $idkategori_barang)	
            ->order_by('harga_barang', 'ASC');
         }else if($data['sorting'] == 1){
			$this->db->select()
            ->from($this->table)
			->where("status_barang", $status_barang)
			->where("idkategori_barang", $idkategori_barang)	
            ->order_by('harga_barang', 'DESC');
		}else{
			$this->db->select()
			->from($this->table)
			->where("status_barang", $status_barang)
			->where("idkategori_barang", $idkategori_barang);	
		} 
		
		$data['total']	= $this->db->count_all_results(null, false);
		$sql			= $this->db->get_compiled_select();
		$data['result']	= $this->db->query($sql)->result_array();

		return $data;	
	}

	public function tampil_katak($data)
	{
		$status_barang = 'ok';
		$idkategori_barang = '2';
		if($data['search'] != null){
			$this->db->select('*');
			$this->db->from('barang');
			$this->db->where("idkategori_barang", $idkategori_barang);
			$this->db->like('nama_barang', $data['search']);
		}else if($data['sorting'] == 0){
			$this->db->select()
            ->from($this->table)
			->where("status_barang", $status_barang)
			->where("idkategori_barang", $idkategori_barang)	
            ->order_by('harga_barang', 'ASC');
         }else if($data['sorting'] == 1){
			$this->db->select()
            ->from($this->table)
			->where("status_barang", $status_barang)
			->where("idkategori_barang", $idkategori_barang)	
            ->order_by('harga_barang', 'DESC');
		}else{
			$this->db->select()
			->from($this->table)
			->where("status_barang", $status_barang)
			->where("idkategori_barang", $idkategori_barang);	
		} 

		$data['total']	= $this->db->count_all_results(null, false);
		$sql			= $this->db->get_compiled_select();
		$data['result']	= $this->db->query($sql)->result_array();
		/* print('<pre>'); print_r($sql); exit(); */
		return $data;	
	}

	public function tampil_kura($data)
	{
		$status_barang = 'ok';
		$idkategori_barang = '3';
		if($data['search'] != null){
			$this->db->select('*');
			$this->db->from('barang');
			$this->db->where("idkategori_barang", $idkategori_barang);
			$this->db->like('nama_barang', $data['search']);
		}else if($data['sorting'] == 0){
			$this->db->select()
            ->from($this->table)
			->where("status_barang", $status_barang)
			->where("idkategori_barang", $idkategori_barang)	
            ->order_by('harga_barang', 'ASC');
         }else if($data['sorting'] == 1){
			$this->db->select()
            ->from($this->table)
			->where("status_barang", $status_barang)
			->where("idkategori_barang", $idkategori_barang)	
            ->order_by('harga_barang', 'DESC');
		}else{
			$this->db->select()
			->from($this->table)
			->where("status_barang", $status_barang)
			->where("idkategori_barang", $idkategori_barang);	
		} 		

		$data['total']	= $this->db->count_all_results(null, false);
		$sql			= $this->db->get_compiled_select();
		$data['result']	= $this->db->query($sql)->result_array();

		return $data;	
	}

	public function tampil_kadal($data)
	{
		$status_barang = 'ok';
		$idkategori_barang = '4';
		if($data['search'] != null){
			$this->db->select('*');
			$this->db->from('barang');
			$this->db->where("idkategori_barang", $idkategori_barang);
			$this->db->like('nama_barang', $data['search']);
		}else if($data['sorting'] == 0){
			$this->db->select()
            ->from($this->table)
			->where("status_barang", $status_barang)
			->where("idkategori_barang", $idkategori_barang)	
            ->order_by('harga_barang', 'ASC');
         }else if($data['sorting'] == 1){
			$this->db->select()
            ->from($this->table)
			->where("status_barang", $status_barang)
			->where("idkategori_barang", $idkategori_barang)	
            ->order_by('harga_barang', 'DESC');
		}else{
			$this->db->select()
			->from($this->table)
			->where("status_barang", $status_barang)
			->where("idkategori_barang", $idkategori_barang);	
		} 				

		$data['total']	= $this->db->count_all_results(null, false);
		$sql			= $this->db->get_compiled_select();
		$data['result']	= $this->db->query($sql)->result_array();

		return $data;	
	}

	public function tampil_acc($data)
	{
		$status_barang = 'ok';
		$idkategori_barang = '5';
		if($data['search'] != null){
			$this->db->select('*');
			$this->db->from('barang');
			$this->db->where("idkategori_barang", $idkategori_barang);
			$this->db->like('nama_barang', $data['search']);
		}else if($data['sorting'] == 0){
			$this->db->select()
            ->from($this->table)
			->where("status_barang", $status_barang)
			->where("idkategori_barang", $idkategori_barang)	
            ->order_by('harga_barang', 'ASC');
         }else if($data['sorting'] == 1){
			$this->db->select()
            ->from($this->table)
			->where("status_barang", $status_barang)
			->where("idkategori_barang", $idkategori_barang)	
            ->order_by('harga_barang', 'DESC');
		}else{
			$this->db->select()
			->from($this->table)
			->where("status_barang", $status_barang)
			->where("idkategori_barang", $idkategori_barang);	
		} 					

		$data['total']	= $this->db->count_all_results(null, false);
		$sql			= $this->db->get_compiled_select();
		$data['result']	= $this->db->query($sql)->result_array();

		return $data;	
	}

	public function tampil_ser($data)
	{
		$status_barang = 'ok';
		$idkategori_barang = '6';
		if($data['search'] != null){
			$this->db->select('*');
			$this->db->from('barang');
			$this->db->where("idkategori_barang", $idkategori_barang);
			$this->db->like('nama_barang', $data['search']);
		}else if($data['sorting'] == 0){
			$this->db->select()
            ->from($this->table)
			->where("status_barang", $status_barang)
			->where("idkategori_barang", $idkategori_barang)	
            ->order_by('harga_barang', 'ASC');
         }else if($data['sorting'] == 1){
			$this->db->select()
            ->from($this->table)
			->where("status_barang", $status_barang)
			->where("idkategori_barang", $idkategori_barang)	
            ->order_by('harga_barang', 'DESC');
		}else{
			$this->db->select()
			->from($this->table)
			->where("status_barang", $status_barang)
			->where("idkategori_barang", $idkategori_barang);	
		} 					

		$data['total']	= $this->db->count_all_results(null, false);
		$sql			= $this->db->get_compiled_select();
		$data['result']	= $this->db->query($sql)->result_array();

		return $data;	
    }
    
	public function detail_barang($id_barang)
	{
		$table = 'v_barang_personal_kategori';
		$field_select = ["id_barang","nama_barang","harga_barang","keterangan_barang","gambar1_barang","gambar2_barang","gambar3_barang","idkategori_barang","idpersonal_barang","id_personal","nama_personal","hp_personal","lokasi_personal","id_kategori","nama_kategori"];
		$this->db->select()
			->from($table)
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

	public function get_count() {
        return $this->db->get('barang')->num_rows();
	}
	
	function get_barang_list($limit, $start){
		$this->db->limit($limit, $start);
        $query = $this->db->get('barang', $limit, $start);
        return $query;
    }

}