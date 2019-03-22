<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class Coverage extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_coverage', 'mod');
	}

	public function index()
	{
		$data = MY_Controller::data_session();

		$data['base_level'] = $this->uri->segment(1);
		$data['base_class'] = 'coverage';
		$data['base_function'] = 'index';
		$data['table_view'] = 'v_personal_coverage';
		$data['fields'] = ['id_personal', 'idpropinsi_coverage', 'idkota_coverage', 'idkecamatan_coverage'];
		$data['title'] = 'Tabel Coverage';
		
		$data['total'] = $this->mod->fetch_data($data)['total'];
		$data['result'] = $this->mod->fetch_data($data)['result'];
		foreach ($data['result'] as $records)
		{
			$records['level'] 	= $data['base_level'];
			$temp[]				= $records;
		}
		$data['result'] = $temp;
		//print('<pre>'); print_r($data); exit();
		$this->parser->parse('tpl_admin/template', $data);
	}
}

