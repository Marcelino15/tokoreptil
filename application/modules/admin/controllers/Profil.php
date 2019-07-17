<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Profil extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_profil', 'mod');
    }

    public function class_data()
    {
        $data['base_level'] = $this->uri->segment(1);
        $data['base_class'] = 'profil';
        return $data;
    }

    public function index()
    {
        $data                   = self::class_data() + MY_Controller::data_session();
        $data['base_function']  = 'index.php';
        $data['table_view']     = 'personal';
        $data['title']          = 'Detail Data Profil';
        $data['id_detail']      = $this->uri->segment(4);
        $data['personal']                   = $this->mod->tampil_personal($data);
        //print('<pre>'); print_r($data); exit();
        $this->parser->parse('tpl_admin/template', $data);
    }

    public function detail()
    {
        $data                   = self::class_data() + MY_Controller::data_session();
        $data['base_function']  = 'ubah_profil';
        $data['table_view']     = 'personal';
        $data['title']          = 'Ubah Data';
        $data['id_detail']      = $this->uri->segment(4);
        $data['lokasi']         = array (
            'provinsi' => $this->mod->get_provinsi(),
            'kabupaten' => $this->mod->get_kabupaten(),
            'provinsi_selected' => '',
            'kabupaten_selected' => '',
        );
        $data                   = $this->mod->fetch_id($data);
        $this->parser->parse('tpl_admin/template', $data);
    }

    public function hapus()
    {
        $id = $this->uri->segment(4);
        $this->mod->hapus('profil', $id);
        redirect(base_url($data['base_level'] . 'admin/profil'));
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
            'password_personal' => $this->input->post('password_personal'),
            'level_personal' => $this->input->post('level_personal'),
        ];
        //print('<pre>'); print_r($data); exit();
        if ($aksi == 'simpan') {
            $this->mod->ubah_personal($data);
            redirect(site_url('admin/profil'));
        } else {
            redirect(site_url('admin/profil'));
        }
    }

    public function upload()
    {
        $data                  = self::class_data() + MY_Controller::data_session();
        $data['base_level'] = '';
        $data['base_class'] = 'profil';
        $data['base_function'] = 'upload';
        $data['title'] = 'Upload Foto Profil';
        $data['result'] = $this->mod->detail_personal($this->uri->segment(4));
        //print('<pre>'); print_r($data); exit();
        $this->parser->parse('tpl_admin/template', $data);
    }

    public function upload_proses()
    {
        $config['upload_path']      = './assets/foto_personal';
        $config['allowed_types']    = 'jpg|png|jpeg';
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
            redirect(site_url('admin/profil'));
        } else {
            redirect(site_url('admin/profil'));
        }
    }
}