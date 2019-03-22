<?php if (!defined('BASEPATH')) { exit('No direct script access allowed');}

class M_coverage extends CI_Model
{
	public $table = 'coverage';
	public $field_select = ["id_coverage", "idpropinsi_coverage", "idkecamatan_coverage", "idkota_coverage"];
	
	public function __construct()
	{
		parent::__construct();
	}

	public function fetch_data($data)
	{
		$this->db->select($data['fields'])
			->from($data['table_view']);

		$data['total'] 	= $this->db->count_all_results(null, false);
		$sql 		   	= $this->db->get_compiled_select();
		$data['result'] = $this->db->query($sql)->result_array();
		//print('<pre>'); print_r($query); exit();
		return $data;	
	}
}