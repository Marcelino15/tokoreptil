<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

#----------------------------------------------------------------
# nama file        : Personal.php
# lokasi file    : ./application/modules/Personal/controllers/Personal.php
# dibuat oleh    : Zamah Sari
#----------------------------------------------------------------

class Personal extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_personal', 'mod');
    }

    public function class_data()
    {
        $data['base_level'] = $this->uri->segment(1);
        $data['base_class'] = 'personal';

        return $data;
    }

    public function index()
    {
        $data = self::class_data() + MY_Controller::data_session();

        $data['base_function'] = 'index';
        $data['table_view']    = 'personal';
        $data['fields']        = ['nama_personal', 'hp_personal', 'email_personal', 'level_personal', 'id_personal'];
        $data['title']         = 'Tabel Personal';

        $data['total']  = $this->mod->fetch_data($data)['total'];
        $data['result'] = $this->mod->fetch_data($data)['result'];
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
        $data                  = self::class_data() + MY_Controller::data_session();
        $data['base_function'] = 'tambah';
        $data['title']         = 'tambah data personal';
       
        $this->parser->parse('tpl_admin/template', $data);
    }

    public function tambah_proses()
    {
        // dump_exit($data);
        $data                  = self::class_data() + MY_Controller::data_session();
        $data['base_function'] = 'tambah';
        $data['table_view']    = 'personal';
        $data['title']         = 'Tambah Data Personal';
        $data['form_data']     = $this->input->post();
        unset($data['form_data']['kirim']);
        $this->mod->tambah($data);
        redirect(base_url($data['base_level'] . '/personal'));
    }

    public function detail()
    {
        $data                  = self::class_data() + MY_Controller::data_session();
        $data['base_function'] = 'ubah_personal';
        $data['table_view']    = 'personal';
        $data['title']         = 'Detail Data Personal';
        $data['id_detail']      = $this->uri->segment(4);
        $data = $this->mod->fetch_id($data);
        //dump_exit($data);
        $this->parser->parse('tpl_admin/template', $data);
    }

    public function hapus()
    {
        $id = $this->uri->segment(4);
        $this->mod->hapus('personal', $id);
        redirect(base_url($data['base_level'] . 'admin/personal'));
    }


    public function ubah()
    {
    $aksi = $this->input->post('aksi');
    $data = [
        'id_personal' => $this->input->post('id_personal'),
        'nama_personal' => $this->input->post('nama_personal'),
        'hp_personal' => $this->input->post('hp_personal'),
        'email_personal' => $this->input->post('email_personal'),
        'level_personal' => $this->input->post('level_personal'),
    ];
    //print('<pre>'); print_r($data); print_r($aksi); exit();
    if ($aksi == 'simpan'){
        $this->mod->ubah_personal($data);
        redirect(site_url('admin/personal'));
    } else {
        //echo "no";
        redirect(site_url('admin/personal'));
        }
    }

    public function upload()
    {
        $data['base_level'] = '';
        $data['base_class'] = 'personal';
        $data['base_function'] = 'upload';
        $data['title'] = 'Upload Foto Profil';
        $data['result'] = $this->mod->detail_personal($this->uri->segment(4));
        //print('<pre>'); print_r($data); exit();
        $this->parser->parse('tpl_admin/template', $data);
    }

    public function upload_proses()
    {
        $config['upload_path']          = './assets/foto_personal';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 20000;
        $config['max_width']            = 5000;
        $config['max_height']           = 1000;

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

# Akhir dari file Personal.php
# lokasi file    : ./application/modules/Personal/controllers/Personal.php
