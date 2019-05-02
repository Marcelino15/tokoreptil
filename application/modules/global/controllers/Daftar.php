<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Daftar extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_daftar', 'mod');
	}

	public function classdata()
    {
    	$data['title'] ='Halaman Pendaftaran';
    	$data['table']='personal';
    	$data['fields']=[
			'id_personal',
			'nama_personal',
            'foto_personal',
			'hp_personal',
			'email_personal',
			'provinsi_personal',
			'kabupaten_personal',
			'level_personal',
			'password_personal',
			'insert_on'
		];
		
    	return $data;
	}

	public function index()
	{	
		$data = array(
			'classdata' => $this->classdata(),
			'provinsi' => $this->mod->get_provinsi(),
			'kabupaten' => $this->mod->get_kabupaten(),
			'provinsi_selected' => '',
			'kabupaten_selected' => '',
		);
		$data['title']	= 'Halaman Pendaftaran';
		$this->parser->parse('global/daftar/index', $data);
	}

	public function tambah_proses()
	{
		$config['upload_path']          = './assets/foto_personal';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 20000;
        $config['max_width']            = 5000;
        $config['max_height']           = 1000;

        $this->load->library('upload', $config);           
        $this->upload->do_upload('foto_personal');
        $foto_personal = $this->upload->data('file_name');
		$data = [
			"id_personal" => $this->input->post('id_personal'),
			"nama_personal" => $this->input->post('nama_personal'),
			"foto_personal"=>$foto_personal,
			"hp_personal"=>$this->input->post('hp_personal'),
			"email_personal"=>$this->input->post('email_personal'),
			"provinsi_personal"=>$this->input->post('provinsi_personal'),
			"kabupaten_personal" => $this->input->post('kabupaten_personal'),
			"level_personal"=>$this->input->post('level_personal'),
			"password_personal"=>$this->input->post('password_personal')
		];
		$this->mod->tambah($data);
		redirect('global/login');
	}

	
	
}