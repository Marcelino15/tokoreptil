<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

#----------------------------------------------------------------
# nama file        : Pesan.php
# lokasi file    : ./application/modules/pesan/controllers/Pesan.php
# dibuat oleh    : Zamah Sari
#----------------------------------------------------------------

class Pesan extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Pesan', 'mod');
    }

    public function index()
    {
        $data = MY_Controller::data_session();

        $data['base_level']    = $this->uri->segment(1);
        $data['base_class']    = 'pesan';
        $data['base_function'] = 'index';
        $data['table_view']    = 'pesan';
        $data['title']         = 'Pesan';

        $data['total']  = $this->mod->fetch_data($data['table_view'])['total'];
        $data['result'] = $this->mod->fetch_data($data['table_view'])['result'];
        foreach ($data['result'] as $records) {
            $records['level'] = $data['base_level'];
            $temp[]           = $records;
        }
        $data['result'] = $temp;
        // dump_exit($data['result']);
        $this->parser->parse('tpl_admin/template', $data);
    }

    public function hapus()
    {
        $id = $this->uri->segment(4);
        $this->mod->hapus('pesan', $id);
        redirect(base_url('admin/pesan'));
    }
}

# Akhir dari file Pesan.php
# lokasi file    : ./application/modules/pesan/controllers/Pesan.php
