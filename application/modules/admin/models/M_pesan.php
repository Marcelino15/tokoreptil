<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

#----------------------------------------------------------------
# nama file     : M_pesan.php
# lokasi file   : ./application/admin/model/M_pesan.php
# dibuat oleh   : Zamah Sari
#----------------------------------------------------------------

class M_pesan extends CI_Model
{
    #-----------------------------------------------------------
    # nama metode   : fetch_data
    # @parameter    : 
    # catatan       : 
    #-----------------------------------------------------------

    public $table       = 'pesan';
    public $filed_select  =[
            'id_pesan',
            'judul_pesan',
            'email_pesan',
            'hp_pesan',
            'isi_pesan',
            'levelpengirim_pesan',
            'status_pesan',
        ];

    public function fetch_data($table)
    {
        $this->db->select()
			->from($table);
        $this->db->join('personal', 'personal.id_personal = penerima_pesan', 'left');
		$data['total']=$this->db->count_all_results(null, false);

		$query=$this->db->get_compiled_select();
		$data['result']=$this->db->query($query)->result_array();
	
		return $data;
    }

    public function detail_pesan($id_pesan)
    {
        $this->db->select()
            ->from($this->table)
            ->where("id_pesan", $id_pesan);
        $query = $this->db->get_compiled_select();
        //print('<pre>'); print_r($query); exit();
        $data['result'] = $this->db->query($query)->row();
        return $data;
    }

    public function tambah_pesan($data)
    {
        $this->db->select()
            ->from($this->table);
        $query = $this->db->set($data)->get_compiled_insert();
        //print('<pre>'); print_r($query); exit();
        $this->db->query($query);
        return true;
    }

    public function ubah_pesan($data)
    {
        $this->db->select()
            ->from($this->table)
            ->where("id_pesan", $data['id_pesan']);
        $query = $this->db->set($data)->get_compiled_update();
        //print('<pre>'); print_r($query); exit();
        $this->db->query($query);
        return true;
    }

    public function hapus($table, $id)
    {
        $this->db->select()
            ->from($table)
            ->where('id_pesan', $id);
        $query=$this->db->get_compiled_delete();
        $this->db->query($query);

        return true;
    }

    public function get_personal()
    {
        $this->db->order_by('nama_personal', 'asc');
        return $this->db->get('personal')->result();
    }

    public function pesan_masuk($table)
    {
        
        $levelpengirim_pesan = 'penjual';
        $this->db->select()
            ->from($this->table)
            ->where("levelpengirim_pesan", $levelpengirim_pesan);
        $data['total']=$this->db->count_all_results(null, false);

        $query=$this->db->get_compiled_select();
        $data['result']=$this->db->query($query)->result_array();
    
        return $data;
    }

    public function pesan_keluar($table)
    {
        
        $levelpengirim_pesan = 'admin';
        $this->db->select()
            ->from($this->table)
            ->where("levelpengirim_pesan", $levelpengirim_pesan);
        $data['total']=$this->db->count_all_results(null, false);
        $query=$this->db->get_compiled_select();
        $data['result']=$this->db->query($query)->result_array();
        //print('<pre>'); print_r($query); exit();
        return $data;
    }
}

# Akhir dari file M_pesan.php
# lokasi file   : ./application/admin/model/M_pesan.php
