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

    public function tambah()
    {
        $data                   = MY_Controller::data_session();
        $data['base_level']     = $this->uri->segment(1);
        $data['base_class']     = 'pesan';
        $data['base_function']  = 'tambah_pesan';
        $data['title']          = 'Tambah Pesan';
        $data['penerima']        = array(
            'personal' => $this->mod->get_personal(),
            'personal_selected' => '',
            ); 
        //print('<pre>'); print_r($data); exit();
        $this->parser->parse('tpl_admin/template', $data);
    }

    public function tambah_proses()
    {
        $data = [
            'id_pesan' => $this->input->post('id_pesan'),
            'judul_pesan' => $this->input->post('judul_pesan'),
            'email_pesan' => $this->input->post('email_pesan'),
            'hp_pesan' => $this->input->post('hp_pesan'),
            'isi_pesan' => $this->input->post('isi_pesan'),
            'levelpengirim_pesan' => $this->input->post('levelpengirim_pesan'),
            'status_pesan' => $this->input->post('status_pesan'),
            'penerima_pesan' => $this->input->post('penerima_pesan')
        ];
        //print('<pre>'); print_r($data); exit();
        $this->mod->tambah_pesan($data);
        redirect(site_url('admin/pesan'));
    }

    public function ubah()
    {
        $data                   = MY_Controller::data_session();
        $data['base_level']     = '';
        $data['base_class']     = 'pesan';
        $data['base_function']  = 'ubah_pesan';
        $data['title']          = 'Ubah Pesan';
        $data['result']         = $this->mod->detail_pesan($this->uri->segment(4));
        //print('<pre>'); print_r($data); exit();
        $this->parser->parse('tpl_admin/template', $data);
    }

    public function ubah_proses()
    {
        $aksi   = $this->input->post('aksi');
        $data   = [
            'id_pesan' => $this->input->post('id_pesan'),
            'judul_pesan' => $this->input->post('judul_pesan'),
            'email_pesan' => $this->input->post('email_pesan'),
            'hp_pesan' => $this->input->post('hp_pesan'),
            'isi_pesan' => $this->input->post('isi_pesan'),
            'levelpengirim_pesan' => $this->input->post('levelpengirim_pesan'),
            'status_pesan' => $this->input->post('status_pesan'),
            
        ];
        //print('<pre>'); print($data); exit();
        if ($aksi == 'simpan') {
            $this->mod->ubah_pesan($data);
            redirect(site_url('admin/pesan'));
        } else {
            redirect(site_url('admin/pesan'));
        }
    }

    public function hapus()
    {
        $id = $this->uri->segment(4);
        $this->mod->hapus('pesan', $id);
        redirect(base_url('admin/pesan'));
    }

    public function pesan_masuk()
    {
        $temp = null;
        $data = MY_Controller::data_session();

        $data['base_level']     = $this->uri->segment(1);
        $data['base_class']     = 'pesan';
        $data['base_function']  = 'pesan_masuk';
        $data['table_view']     = 'pesan';
        $data['fields']         = [
            'id_pesan',
            'judul_pesan',
            'email_pesan',
            'hp_pesan',
            'isi_pesan',
            'levelpengirim_pesan',
            'status_pesan',
        ];
        $data['title']          = 'Table Pesan Masuk';

        $data['total']          = $this->mod->pesan_masuk($data)['total'];
        $data['result']         = $this->mod->pesan_masuk($data)['result'];
        foreach ($data['result'] as $records) {
            $records['level']   = $data['base_level'];
            $temp[]             = $records;
        }
        $data['result']         = $temp;
        if ($temp != null)
        {
            $this->parser->parse('tpl_admin/template', $data);
        } else {
            $this->parser->parse('tpl_admin/pesan_kosong', $data);
        }
    }

    public function pesan_keluar()
    {
       $temp = null;
        $data = MY_Controller::data_session();

        $data['base_level']     = $this->uri->segment(1);
        $data['base_class']     = 'pesan';
        $data['base_function']  = 'pesan_keluar';
        $data['table_view']     = 'pesan';
        $data['fields']         = [
            'id_pesan',
            'judul_pesan',
            'email_pesan',
            'hp_pesan',
            'isi_pesan',
            'levelpengirim_pesan',
            'status_pesan',
        ];
        $data['title']          = 'Table Pesan Keluar';

        $data['total']          = $this->mod->pesan_keluar($data)['total'];
        $data['result']         = $this->mod->pesan_keluar($data)['result'];
        foreach ($data['result'] as $records) {
            $records['level']   = $data['base_level'];
            $temp[]             = $records;
        }
        $data['result']         = $temp;
        //print('<pre>'); print_r($data); exit();
        if ($temp != null)
        {
            $this->parser->parse('tpl_admin/template', $data);
        } else {
            $this->parser->parse('tpl_admin/pesan_kosong', $data);
        } 
    }
}

# Akhir dari file Pesan.php
# lokasi file    : ./application/modules/pesan/controllers/Pesan.php
