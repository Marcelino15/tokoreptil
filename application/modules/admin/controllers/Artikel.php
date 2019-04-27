<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Artikel extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
         
        $this->load->model('M_artikel', 'mod');
    }

    public function class_data()
    {
        $data['base_level'] = $this->uri->segment(1);
        $data['base_class'] = 'artikel';
        return $data;
    }

    public function index()
    {
        $data                   = self::class_data() + MY_Controller::data_session();
        $data['base_function']  = 'index';
        $data['table_view']     = 'artikel';
        $data['fields']         = ["id_artikel", "judul_artikel", "isi_artikel", "penulis_artikel", "kategori_artikel", "gambar_artikel"];
        $data['title']          = 'Table Artikel';

        $data['total']          = $this->mod->fetch_data($data)['total'];
        $data['result']         = $this->mod->fetch_data($data)['result'];
        foreach ($data['result'] as $records) {
            $records['level']   = $data['base_level'];
            $temp[]             = $records;
        }
        $data['result']         = $temp;
        $this->parser->parse('tpl_admin/template', $data);
    }

    public function tambah()
    {
        $data                   = self::class_data() + MY_Controller::data_session();
        $data['base_function']  = 'tambah_artikel';
        $data['title']          = 'Input Artikel';
        //print('<pre>'); print_r($data); exit();
        $this->parser->parse('tpl_admin/template', $data);
    }

    public function tambah_proses()
    {
        
        $data                       = self::class_data() + MY_Controller::data_session();
        $config['upload_path']      = './assets/foto_artikel';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = 20000;
        $config['max_width']        = 5000;
        $config['max_height']       = 1000;
        $this->load->library('upload', $config);
		$this->upload->do_upload('gambar_artikel');
		$gambar_artikel = $this->upload->data('file_name');

        $data   = [
            "id_artikel" => $this->input->post('id_artikel'),
            "judul_artikel" => $this->input->post('judul_artikel'),
            "isi_artikel" => $this->input->post('isi_artikel'),
            "penulis_artikel" => $this->input->post('penulis_artikel'),
            "kategori_artikel" => $this->input->post('kategori_artikel'),
            "gambar_artikel" => $gambar_artikel,
            "sumber_artikel" => $this->input->post('sumber_artikel'),
        ];
        $this->mod->tambah($data);
        redirect(site_url('admin/artikel'));
    }

    public function ubah()
    {
        $data                   = self::class_data() + MY_Controller::data_session();
        $data['base_function']  = 'ubah_artikel';
        $data['table_view']     = 'artikel';
        $data['title']          = 'Ubah Artikel';
        $data['id_detail']      = $this->uri->segment(4);
        $data                   = $this->mod->fetch_id($data);
        //print('<pre>'); print_r($data); exit();
        $this->parser->parse('tpl_admin/template', $data);
    }

    public function ubah_proses()
    {   
        $data                       = self::class_data() + MY_Controller::data_session();
        $aksi = $this->input->post('aksi');
        $data = [
            'id_artikel' => $this->input->post('id_artikel'),
            'judul_artikel'=> $this->input->post('judul_artikel'),
            'isi_artikel' => $this->input->post('isi_artikel'),
            'penulis_artikel'=> $this->input->post('penulis_artikel'),
            'kategori_artikel' => $this->input->post('kategori_artikel'),
            'sumber_artikel' => $this->input->post('sumber_artikel'),
        ];
        //print('<pre>'); print_r($data); exit();
        if ($aksi == 'simpan') {
            $this->mod->ubah_artikel($data);
            redirect(site_url('admin/artikel'));
        } else {
            redirect(site_url('admin/artikel'));
        }
    }

    public function hapus()
    {
        $id = $this->uri->segment(4);
        $this->mod->hapus('artikel', $id);
		//print('<pre>'); print_r($id); exit();
		redirect(base_url('admin/artikel'));
    }

    public function upload()
    {
        $data                   = self::class_data() + MY_Controller::data_session();
        $data['base_function']  = 'upload_foto_artikel';
        $data['title']          = 'Upload Foto Artikel';
        $data['result']         = $this->mod->detail_artikel($this->uri->segment(4));
        //print('<pre>'); print_r($data); exit();
        $this->parser->parse('tpl_admin/template', $data);
    }

    public function upload_proses()
    {
        $config['upload_path']          = './assets/foto_artikel';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 20000;
        $config['max_width']            = 5000;
        $config['max_height']           = 1000;

        $this->load->library('upload', $config);           
        $this->upload->do_upload('gambar_artikel');
        $gambar_artikel = $this->upload->data('file_name');
        $aksi = $this->input->post('aksi');
        $data = [
            'id_artikel' => $this->input->post('id_artikel'),
            'gambar_artikel' => $gambar_artikel,
        ];
        //print('<pre>'); print_r($data); exit();
        if ($aksi == 'simpan') {
            $this->mod->upload($data);
            redirect(site_url('admin/artikel'));
        } else {
            redirect(site_url('admin/artikel'));
        }
    }

    

}