<?php if (!defined('BASEPATH')) { exit('No direct script access allowed');}

class Kabupaten extends MY_Conroller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kabupaten', 'mod');
    }

    public function index()
    {
        $data = MY_Controller::data_session();

        $data['base_level']     = $this->uri->segment(1);
        $data['base_class']     = 'kabupaten';
        $data['base_function']  = 'index';
        $data['table_view']     = 'kabupaten'
        $data['fields']         = ['id_kabupaten', 'idprovinsi_kabupaten', 'nama_kabupaten'];
        $data['title']          = 'Table Kabupaten';

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
        $data['base_class']     = 'kabupaten';
        $data['base_function']  = 'tambah_kabupaten';
        $data['title']          = 'Tambah Kabupaten';
        //print('<pre>'); print_r($data); exit();
        $this->parser->parse('tpl_admin/template', $data);
    }

    public function tambah_proses()
    {
        $data = [
            "id_kabupaten" => $this->input->post('id_kabupaten'),
            "idprovinsi_kabupaten" => $this->input->post('idprovinsi_kabupaten'),
            "nama_kabupaten" => $this->input->post('nama_kabupaten')
        ];
        //print('<pre>'); print_r($data); exit();
        $this->mod->tambah_kabupaten($data);
        redirect(site_url('admin/kabupaten'));
    }

    public function ubah()
    {
        $data['base_level']     = '';
        $data['base_class']     = 'kabupaten';
        $data['base_function']  = 'ubah_kabupaten';
        $data['title']          = 'Ubah Kabupaten';
        $data['result']         = $this->mod->detail_kabupaten($this->uri->segment(4));
        //print('<pre>'); print_r($data); exit();
        $this->parser->parse('tpl_admin/template', $data);
    }

    public function ubah_proses()
    {
        $aksi = $this->input->post('aksi');
        $data = [
            'id_kabupaten' => $this->input->post('id_kabupaten'),
            'idprovinsi_kabupaten'=> $this->input->post('idprovinsi_kabupaten'),
            'nama_kabupaten' => $this->input->post('nama_kabupaten'),
        ];
        //print('<pre>'); print_r($data); exit();
        if ($aksi == 'simpan') {
            $this->mod->ubah_kabupaten($data);
            redirect(site_url('admin/kabupaten'));
        } else {
            redirect(site_url('admin/kabupaten'));
        }
    }

    public function hapus()
    {
        $id = $this->uri->segment(4);
        $this->mod->hapus('kabupaten', $id);
        //print('<pre>'); print_r($id); exit();
        redirect(base_url('admin/template', $data));
    }
}