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

    public function fetch_data($table)
    {
        $this->db->select()
			->from($table);
		$data['total']=$this->db->count_all_results(null, false);

		$query=$this->db->get_compiled_select();
		$data['result']=$this->db->query($query)->result_array();
	
		return $data;
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
}

# Akhir dari file M_pesan.php
# lokasi file   : ./application/admin/model/M_pesan.php
