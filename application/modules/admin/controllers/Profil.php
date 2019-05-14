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
        $this->load->model('M_profil', 'mod');
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

    public function detail()
    {
        
        $data                   = self::class_data() + MY_Controller::data_session();
        $data['base_function']  = 'ubah_profil';
        $data['table_view']     = 'v_personal_lokasi';
        $data['title']          = 'Ubah Profil Admin';
        $data['id_detail']      = $this->uri->segment(4);
        $data['lokasi']         = array (
            'provinsi' => $this->mod->get_provinsi(),
            'kabupaten' => $this->mod->get_kabupaten(),
            'provinsi_select' => '',
            'kabupaten_select' => '',
        );
        $data            = $this->mod->fetch_id($data);
        //print('<pre>'); print_r($data); exit();
        $this->parser->parse('tpl_admin/template', $data);
    }

    public function ubah()
    {
        $aksi = $this->input->post('aksi');
        $data = [
            'id_personal' => $this->input->post('id_personal'),
            'nama_personal' => $this->input->post('nama_personal'),
            'hp_personal' => $this->input->post('hp_personal'),
            'email_personal' => $this->input->post('email_personal'),
            'provinsi_personal' => $this->input->post('provinsi_personal'),
            'kabupaten_personal' => $this->input->post('kabupaten_personal'),
            'level_personal' => $this->input->post('level_personal'),
        ];
        //print('<pre>'); print_r($data); exit();
        if ($aksi == 'simpan'){
            $this->mod->ubah_personal($data);
            redirect(site_url('admin/personal'));
        } else {
            redirect(site_url('admin/personal'));
        }

    }

    public function upload()
    {
        $data['base_level'] = '';
        $data['base_class'] = 'profil';
        $data['base_function'] = 'upload';
        $data['title']  = 'Upload Foto Profil';
        $data['result'] = $this->mod->detail_personal($this->uri->segment(4));
        //print('<pre>'); print_r($data); exit();
        $this->parser->parse('tpl_admin/template', $data);
    }

    public function upload_proses()
    {
        $config['upload_path']      = './assets/foto_personal';
        $config['allowed_types']    = 'jpeg|png|jpeg';
        $config['max_size']         = 20000;
        $config['max_width']        = 5000;
        $config['max_height']       = 1000;

        $this->load->library('upload', $config);
        $this->upload->do_upload('foto_personal');
        $foto_personal = $this->upload->data('file_name');
        $aksi = $this->input->post('aksi');
        $data = [
            'id_personal' => $this->input->post('id_personal'),
            'foto_personal' => $foto_personal,
        ]; 
        //print('<pre>'); print_r($data); exit();
        if ($aksi == 'simpan') {
            $this->mod->upload($data);
            redirect(site_url('admin/personal'));
        } else {
            redirect(site_url('admin/personal'));
        }
    }
}

/* public function password()
    {
        $data                  = MY_Controller::data_session() + self::class_data();
        $data['base_function'] = 'password';
        $data['title']         = 'Profil Ganti Password';

        $this->parser->parse('tpl_admin/template', $data);
    } */
# Akhir dari file Profil.php
# lokasi file    : ./application/modules/admin/controllers/Profil.php
