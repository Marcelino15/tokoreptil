<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Kategori extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kategori', 'mod');
	}

	public function index()
	{
		$data = MY_Controller::data_session();

		$data['base_level'] = $this->uri->segment(1);
		$data['base_class'] = 'kategori';
		$data['base_function'] = 'index';
		$data['table_view'] = 'kategori';
		$data['fields'] = ['id_kategori', 'nama_kategori'];
		$data['title'] = 'Table Kategori';

		$data['total'] = $this->mod->fetch_data($data)['total'];
		$data['result'] = $this->mod->fetch_data($data)['result'];
		foreach ($data['result'] as $records) {
			$records['level'] = $data['base_level'];
			$temp[] 		= $records;
		}
		$data['result'] = $temp;
		//print('<pre>'); print_r($data); exit();
		$this->parser->parse('tpl_admin/template', $data);
	}

	public function tambah()
	{
		$data['base_level'] = $this->uri->segment(1);
		$data['base_class'] = 'kategori';
		$data['base_function'] = 'tambah_kategori';
		$data['title'] = 'Tambah Kategori';
		//print('<pre>'); print_r($data); exit();
		$this->parser->parse('tpl_admin/template', $data);
	}

	public function tambah_proses()
	{
		$data = [
			"nama_kategori" => $this->input->post('nama_kategori'),
			//"sub_kategori" => $this->input->post('sub_kategori'),
		];
		//print('<pre>'); print_r($data); exit();
		$this->mod->tambah_kategori($data);
		redirect(site_url('admin/kategori'));
	}

	public function ubah()
	{
		$data['base_level'] = '';
		$data['base_class'] = 'kategori';
		$data['base_function'] = 'ubah_kategori';
		$data['title'] = 'Ubah Kategori';
		$data['result'] = $this->mod->detail_kategori($this->uri->segment(4));
		//print('<pre>'); print_r($data); exit();
		$this->parser->parse('tpl_admin/template', $data);
	}

	public function ubah_proses()
	{
		$aksi = $this->input->post('aksi');
		$data = [
			'id_kategori' => $this->input->post('id_kategori'),
			'nama_kategori' => $this->input->post('nama_kategori'),
		];
		//print('<pre>'); print_r($data); print_r($aksi);  exit();
		if ($aksi == 'simpan') {
			$this->mod->ubah_kategori($data);
			//echo "yes";
			redirect(site_url('admin/kategori'));
		} else {
			//echo "no";
			redirect(site_url('admin/kategori'));
		}
	}	

	public function hapus()
	{
		$id = $this->uri->segment(4);
		$this->mod->hapus('kategori', $id);
		//print('<pre>'); print_r($id); exit();
		redirect(base_url('admin/kategori'));
	}
}