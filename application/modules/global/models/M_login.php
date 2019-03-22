<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

#----------------------------------------------------------------
# nama file     : m_login.php
# lokasi file   : ./application/modules/admin/models/m_login.php
# dibuat oleh   : Zamah Sari
#----------------------------------------------------------------

class M_login extends CI_Model
{
    #-----------------------------------------------------------
    # nama metode   : login_cek
    # @parameter    : $data
    # catatan       : 
    #-----------------------------------------------------------
    
    public function login_cek($data)
    {
    	// dump_exit($data);
        $this->db->select($data['fields'])
        	->from($data['table'])
        	->where($data['formdata']);
        unset($data);
        $data['count']=$this->db->count_all_results(null, false);
        $query=$this->db->get_compiled_select();
        $data['result']=$this->db->query($query)->row();
        // dump_exit($data);
        return $data;
    }
}

# Akhir dari file m_login.php
# lokasi file   : ./application/modules/admin/models/m_login.php
