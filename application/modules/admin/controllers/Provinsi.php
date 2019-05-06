<?php if (!defined('BASEPATH')) { exit('No direct script access allowed');}

class Provinsi extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_provinsi', 'mod');
    }

    public function index()
    {
        $data = MY_Controller::data_session();

        $data['base_level']     = $this->uri->segment(1);
        $data['base_class']     = 'provinsi'  ;
        $data['base_function']  = 'index';
        $data['table_view']     = 'provinsi';
        $data['fields']         = ['id_provinsi', 'nama_provinsi'];
        $data['title']          = 'Table Provinsi';

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
        $data['base_level']     = $this->uri->segment(1);
        $data['base_class']     = 'provinsi';
        $data['base_function']  = 'tambah_provinsi';
        $data['title']          = 'Tambah Provinsi';
        //print('<pre>'); print_r($data); exit();
        $this->parser->parse('tpl_admin/template', $data);
    }

    public function tambah_proses()
    {
        $data = [
            "id_provinsi"   => $this->input->post('id_provinsi'),
            "nama_provinsi" => $this->input->post('nama_provinsi'),
        ];
        //print('<pre>'); print_r($data); exit();
        $this->mod->tambah_provinsi($data);
        redirect(site_url('admin/provinsi'));
    }

    public function ubah()
    {
        $data['base_level']     = '';
        $data['base_class']     = 'provinsi';
        $data['base_function']  = 'ubah_provinsi';
        $data['title']          = 'Ubah Provinsi';
        $data['result']         = $this->mod->detail_provinsi($this->uri->segment(4));
        //print('<pre>'); print_r($data); exit();
        $this->parser->parse('tpl_admin/template', $data);
    }

    public function ubah_proses()
    {
        $aksi = $this->input->post('aksi');
        $data = [
            'id_provinsi' => $this->input->post('id_provinsi'),
            'nama_provinsi' => $this->input->post('nama_provinsi'),
        ];
        //print('<pre>'); print_r($data); exit();
        if ($aksi == 'simpan') {
            $this->mod->ubah_provinsi($data);
            redirect(site_url('admin/provinsi'));
        } else {
            redirect(site_url('admin/provinsi'));
        }
    }

    public function hapus()
    {
        $id = $this->uri->segment(4);
        $this->mod->hapus('provinsi', $id);
        //print('<pre>'); print_r($id); exit();
        redirect(base_url('admin/template', $data));
    }

}