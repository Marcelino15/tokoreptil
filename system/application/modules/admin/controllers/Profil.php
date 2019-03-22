<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

#----------------------------------------------------------------
# nama file        : Profil.php
# lokasi file    : ./application/modules/admin/controllers/Profil.php
# dibuat oleh    : Zamah Sari
#----------------------------------------------------------------

class Profil extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        #contructor utama
    }

    public function class_data()
    {
        $data['base_level'] = $this->uri->segment(1);
        $data['base_class'] = 'profil';

        return $data;
    }

    public function index()
    {
        $data                  = MY_Controller::data_session() + self::class_data();
        $data['base_function'] = 'index';
        $data['title']         = 'Profil Detail';

        $this->parser->parse('tpl_admin/template', $data);
    }

    public function password()
    {
        $data                  = MY_Controller::data_session() + self::class_data();
        $data['base_function'] = 'password';
        $data['title']         = 'Profil Ganti Password';

        $this->parser->parse('tpl_admin/template', $data);
    }
}

# Akhir dari file Profil.php
# lokasi file    : ./application/modules/admin/controllers/Profil.php
