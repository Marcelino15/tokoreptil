<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title']='Home';
		$this->parser->parse('tpl_frontend/template', $data);
	}

	public function shop()
	{
		$data['title']='Shop';
		$this->parser->parse('tpl_frontend/shop', $data);
	}

	public function blog()
	{
		$data['title']='Blog';
		$this->parser->parse('tpl_frontend/blog', $data);
	}
	public function about()
	{
		$data['title']='About';
		$this->parser->parse('tpl_frontend/about', $data);
	}

}

/* End of file Frontend.php */
/* Location: ./application/controllers/Frontend.php */