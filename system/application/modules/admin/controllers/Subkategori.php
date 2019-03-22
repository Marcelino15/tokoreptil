<?php if(!defined('BASEPATH')) {
	exit ('No direct script access allowed');
}

class Subkategori extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_subkategori', 'mod');
	}

	public function class_data()
	{
		$data['base_level'] = $this->uri->segment(1);
		$data['base_class'] = 'subkategori';

		return $data;
	}

	public function index()
	{
		$data = MY_Controller::data_session();

		$data['base_level'] = $this->uri->segment(1);
		$data['base_class'] = 'subkategori';
		$data['base_function'] = 'index';
		$data['table_view'] = 'v_kategori_subkategori';

		$data['fields'] = ['id_subkategori', 'nama_subkategori', 'id_kategori', 'nama_kategori'];
		$data['title'] = 'Tabel Subkategori';

		$data['total'] = $this->mod->fetch_data($data)['total'];
		$data['result'] = $this->mod->fetch_data($data)['result'];
		foreach ($data['result'] as $records) {
			$records['level']   = $data['base_level'];
			$temp[] 			= $records;
		}
		$data['result'] = $temp;
		//print('<pre>'); print_r($data); exit();
		$this->parser->parse('tpl_admin/template', $data);
	}

	public function tambah()
	{
		$data['base_level'] = $this->uri->segment(1);
		$data['base_class'] = 'subkategori';
		$data['base_function'] = 'tambah_subkategori';
		$data['title'] = 'Tambah Kategori';
		//print('<pre>'); print_r($data); exit();
		$this->parser->parse('tpl_admin/template', $data);
	}

	public function tambah_proses()
	{
		//print('<pre>'); print_r($data); exit();
		$data = MY_Controller::data_session();
		$data['base_function'] = 'tambah';
		$data['table_view'] = 'subkategori';
		$data['title'] = 'Tambah Data Subkategori';
		$data['form_data'] = $this->input->post();
		unset($data['form_data']['kirim']);
		$this->mod->tambah($data);
		redirect(base_url($data['base_level'] . '/admin/subkategori'));	
	}

	public function hapus()
	{
		$id = $this->uri->segment(4);
		$this->mod->hapus('subkategori', $id);
		redirect(base_url($data['base_level'] . '/admin/subkategori'));
	}

	public function ubah()
	{
		$data['base_level'] = '';
		$data['base_class'] = 'subkategori';
		$data['base_function'] = 'ubah';
		$data['title'] = 'Ubah Subkategori';
		$data['result'] = $this->mod->detail_subkategori($this->uri->segment(4));
		//print('<pre>'); print_r($data); exit();
		$this->parser->parse('tpl_admin/template', $data);
	}

	public function ubah_proses()
	{
		$aksi = $this->input->post('aksi');
		$data = [
			'id_subkategori' => $this->input->post('id_subkategori'),
			'nama_subkategori' => $this->input->post('nama_subkategori'),
			'idkategori_subkategori' => $this->input->post('idkategori_subkategori'),
		];
		//print('<pre>'); print_r($data); exit();
		if ($aksi == 'simpan') {
			$this->mod->ubah_subkategori($data);
			redirect(base_url($data['base_level']. '/admin/subkategori'));
		} else {
			redirect(base_url($data['base_level']. '/admin/subkategori'));
		}
	}
}