<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Lokasi extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_lokasi');
	}

	function index()
	{
		$data['provinsi'] = $this->M_lokasi->fetch_provinsi();
		$this->load->view('lokasi/form', $data);
		//print('<pre>'); print_r($data); exit();
	}

	function fetch_kota()
	{
		if($this->input->post('id_provinsi'))
			{
				echo $this->M_lokasi->fetch_kota($this->input->post('id_provinsi'));
			}
		//print('<pre>'); print_r($data); exit();
	}

	function fetch_kecamatan()
	{
		if($this->input->post('id_kota'))
		{
			echo $this->M_lokasi->fetch_kecamatan($this->input->post('id_kota'));
		}
	}
}
