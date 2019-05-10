<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function get_count_barang()
	{
		return $this->db->get('barang')->num_rows();
	}

}

/* End of file M_dashboard.php */
/* Location: ./application/models/M_dashboard.php */