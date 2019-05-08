<?php if (!defined('BASEPATH')) {exit('No direct script access allowes');}

class Katar extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_katar', 'mod');
    }

    public function index()
    {
        $data = MY_Controller::data_session();

        $data['base_level']     = $this->uri->segment(1);
        $data['base_class']     = 'katar';
        $data['base_function']  = 'index';
        $data['table_view']     = 'kategori_artikel';
        $data['fields']         = ['id_katar', 'nama_katar', 'insert_on'];
        $data['title']          = 'Table Kategori Artikel';

        $data['total']          = $this->mod->fetch_data($data)['total'];
        $data['result']         = $this->mod->fetch_data($data)['result'];
        foreach ($data['result'] as $records) {
            $records['level']   = $data['base_level'];
            $temp[]             = $records;
        }
        $data['result'] = $temp;
        //print('<pre>'); print_r($data); exit();
        $this->parser->parse('tpl_admin/template', $data);
    }

    public function tambah()
    {
        $data                   = MY_Controller::data_session();
        $data['base_level']     = $this->uri->segment(1);
        $data['base_class']     = 'katar';
        $data['base_function']  = 'tambah_katar';
        $data['title']          = 'Tambah Kategori Artikel';
        //print('<pre>'); print_r($data); exit();    
        $this->parser->parse('tpl_admin/template', $data);
    }

    public function tambah_proses()
    {
        $data = [
            "id_katar"  => $this->input->post('id_katar'),
            "nama_katar" => $this->input->post('nama_katar'),
        ];
        //print('<pre>'); print_r($data); exit();
        $this->mod->tambah_katar($data);
        redirect(site_url('admin/katar'));
    }

    public function ubah()
    {
        $data                   = MY_Controller::data_session();
        $data['base_level']     = '';
        $data['base_class']     = 'katar';
        $data['base_function']  = 'ubah_katar';
        $data['title']          = 'Ubah Kategori';
        $data['result']         = $this->mod->detail_katar($this->uri->segment(4));
        //print('<pre>'); print_r($data); exit();
        $this->parser->parse('tpl_admin/template', $data);

    }

    public function ubah_proses()
    {
        $aksi   = $this->input->post('aksi');
        $data   = [
            'id_katar' => $this->input->post('id_katar'),
            'nama_katar' => $this->input->post('nama_katar'),
        ];
        //print('<pre>'); print_r($data); exit();
        if ($aksi == 'simpan') {
            $this->mod->ubah_katar($data);
            redirect(site_url('admin/katar'));
        } else {
            redirect(site_url('admin/katar'));
        }
    }

    public function hapus()
    {
        $id = $this->uri->segment(4);
        $this->mod->hapus('katar', $id);
        //print('<pre>'); print_r($id); exit();
        redirect(base_url('admin/katar', $data));
    }
}