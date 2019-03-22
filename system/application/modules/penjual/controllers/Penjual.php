<?php if (!defined('BASEPATH')) { exit('No direct script access allowed');}

class Penjual extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_personal', 'mod');
	}

	public function class_data()
	{
		$data['base_level']	= $this->uri->segment(1);
		$data['base_class']	= 'personal';

		return $data;
	}

	public function index()
	{
		$data = self::class_data() + MY_Controller::data_session();

		$data['base_function']	= 'index';
		$data['title']			= 'Dashboard'
	}

	public function tambah()
	{
		$data['base_class']		= 'personal';
		$data['base_function']	= 'tambah_penjual';
		$data['title']			= 'Tambah Penjual';
		$this->parser->parse('tpl_admin/template', $data);
	}
}