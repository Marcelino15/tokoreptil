<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

#----------------------------------------------------------------
# nama file        : MY_Controller.php
# lokasi file    : ./application/core/MY_Controller.php
# dibuat oleh    : Zamah Sari
#----------------------------------------------------------------

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        #contructor utama
    }

    public function data_session()
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['id_session']        = $this->session->userdata('id_session');
            $data['nim_session']       = $this->session->userdata('nim_session');
            $data['nama_session']      = $this->session->userdata('nama_session');
            $data['foto_session']      = $this->session->userdata('foto_session');
            $data['hp_session']        = $this->session->userdata('hp_session');
            $data['email_session']     = $this->session->userdata('email_session');
            $data['level_session']     = $this->session->userdata('level_session');
            $data['insert_on_session'] = $this->session->userdata('insert_on_session');
            $data['logged_in']         = $this->session->userdata('logged_in');
        }
        return $data;
    }

    public function sign_out()
    {
        $this->session->sess_destroy();
        redirect('global/login');
    }
}

# Akhir dari file MY_Controller.php
# lokasi file    : ./application/core/MY_Controller.php
