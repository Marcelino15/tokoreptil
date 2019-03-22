<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Barang extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_barang', 'mod');
	}

	public function class_data()
	{
		$data['base_level'] = $this->uri->segment(1);
		$data['base_class'] = 'barang';
		return $data;
	}

	public function index()
	{
		$data = self::class_data() + MY_Controller::data_session();
		$data['base_function'] 	= 'index';
		$data['table_view']		= 'v_barang_personal';
		$data['fields']			= ['id_barang', 'nama_barang','id_personal'];
		$data['title']			= 'Tabel Barang';
		$data['total']			= $this->mod->fetch_data($data)['total'];
		$data['result']			= $this->mod->fetch_data($data)['result'];
		foreach ($data['result'] as $records) {
			$records['level']	= $data['base_level'];
			$temp[]				= $records;
		}
		$data['result']			= $temp;
		//print('<pre>'); print_r($data); exit();
		$this->parser->parse('tpl_admin/template', $data);
	}
}