<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->helper('url');
	}


	public function class_data()
	{
		$data['base_level'] = $this->uri->segment(1);
		$data['base_class']	= 'frontend';

		return $data;
	}

	public function index()
	{
		$data['title']='Home';
		$this->parser->parse('tpl_frontend/template', $data);
	}

	public function shop($keyword = null)
	{
		$temp = null;
		$this->load->model('M_frontend', 'mod');
		$data 					= self::class_data();
		$data['search'] 		= $this->input->get('search-product');
		$data['sorting']		= $this->input->get('sorting');
		$data['title']			= 'Shop';
		$data['table_view'] 	= 'v_barang_personal_kategori';
		$data['fields']			= ["id_barang", "nama_barang", "harga_barang", "keterangan_barang", "gambar1_barang", "gambar2_barang", "gambar3_barang", "idsubkategori_barang", "idpersonal_barang", "status_barang", "nama_provinsi"];
		// $data['total']			= $this->mod->tampil($data)['total'];
		// $data['result']			= $this->mod->tampil($data)['result'];
		// //print('<pre>'); print_r($data); exit();
		// foreach ($data['result'] as $records) {
		// 	$records['level']	= $data['base_level'];
		// 	$temp[]				= $records;
		// }
		// $data['result']			= $temp;
		
		
		//konfigurasi pagination
		$this->load->library('pagination');
        $config['base_url'] = site_url('frontend/shop'); //site url
		$config['total_rows'] =$this->db->count_all('barang');
		$config['per_page']= 6;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['per_page'] = $config["per_page"];
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->mod->get_barang_list($config["per_page"], $data['page']);           
        $data['pagination'] = $this->pagination->create_links();
		//load view mahasiswa view

        $limit = 1;
		$data['result']			= $this->mod->tampil($data)['result'];
		//print('<pre>'); print_r($data); exit();
		foreach ($data['result'] as $records) {
			$records['level']	= $data['base_level'];
			$temp[]				= $records;
		}
		$data['result']			= $temp;
        
		if ($temp != null)
		{
			$this->parser->parse('tpl_frontend/shop', $data);
		} else {
			$this->parser->parse('tpl_frontend/barang_kosong', $data);
		}
	}

	public function shop_ular($keyword = null)
	{
		$temp = null;
		$this->load->model('M_frontend', 'mod');
		$data 					= self::class_data();
		$data['title']			='Shop';
		$data['table_view'] 	= 'barang';
		$data['search'] 		= $this->input->get('search-product');
		$data['sorting']		= $this->input->get('sorting');
		$data['fields']			= ["id_barang", "nama_barang", "harga_barang", "keterangan_barang", "gambar1_barang", "gambar2_barang", "gambar3_barang", "idsubkategori_barang", "idpersonal_barang", "status_barang"];
		/*$data['total']			= $this->mod->tampil_ular($data)['total'];
		$data['result']			= $this->mod->tampil_ular($data)['result'];
		foreach ($data['result'] as $records) {
			$temp[]				= $records;
		}*/
		$this->load->library('pagination');
        $config['base_url'] = site_url('frontend/shop_ular'); //site url
		$config['total_rows'] =$this->db->count_all('barang');
		$config['per_page']= 6;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['per_page'] = $config["per_page"];
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->mod->get_barang_list($config["per_page"], $data['page']);           
        $data['pagination'] = $this->pagination->create_links();
		//load view mahasiswa view

        $limit = 1;
		$data['result']			= $this->mod->tampil_ular($data)['result'];
		//print('<pre>'); print_r($data); exit();
		foreach ($data['result'] as $records) {
			$records['level']	= $data['base_level'];
			$temp[]				= $records;
		}
		$data['result']			= $temp;
		if ($temp != null)
		{
			$this->parser->parse('tpl_frontend/shop_ular', $data);
		} else {
			$this->parser->parse('tpl_frontend/barang_kosong', $data);
		}
	
	}

	public function shop_katak($keyword = null)
	{
		$temp = null;
		$this->load->model('M_frontend', 'mod');
		$data 					= self::class_data();
		$data['title']			='Shop';
		$data['search'] 		= $this->input->get('search-product');
		$data['sorting']		= $this->input->get('sorting');
		$data['table_view'] 	= 'barang';
		$data['fields']			= ["id_barang", "nama_barang", "harga_barang", "keterangan_barang", "gambar1_barang", "gambar2_barang", "gambar3_barang", "idsubkategori_barang", "idpersonal_barang", "status_barang"];
		/*$data['total']			= $this->mod->tampil_katak($data)['total'];
		$data['result']			= $this->mod->tampil_katak($data)['result'];
		foreach ($data['result'] as $records) {
			$temp[]				= $records;
		}*/
		$this->load->library('pagination');
        $config['base_url'] = site_url('frontend/shop_katak'); //site url
		$config['total_rows'] =$this->db->count_all('barang');
		$config['per_page']= 6;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['per_page'] = $config["per_page"];
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->mod->get_barang_list($config["per_page"], $data['page']);           
        $data['pagination'] = $this->pagination->create_links();
		//load view mahasiswa view

        $limit = 1;
		$data['result']			= $this->mod->tampil_katak($data)['result'];
		//print('<pre>'); print_r($data); exit();
		foreach ($data['result'] as $records) {
			$records['level']	= $data['base_level'];
			$temp[]				= $records;
		}
		$data['result']			= $temp;
		if ($temp != null)
		{
			$this->parser->parse('tpl_frontend/shop_katak', $data);
		} else {
			$this->parser->parse('tpl_frontend/barang_kosong', $data);
		}
	}
	
		

	public function shop_kura($keyword = null)
	{
		$temp = null;
		$this->load->model('M_frontend', 'mod');
		$data 					= self::class_data();
		$data['title']			='Shop';
		$data['search'] 		= $this->input->get('search-product');
		$data['sorting']		= $this->input->get('sorting');
		$data['table_view'] 	= 'barang';
		$data['fields']			= ["id_barang", "nama_barang", "harga_barang", "keterangan_barang", "gambar1_barang", "gambar2_barang", "gambar3_barang", "idsubkategori_barang", "idpersonal_barang", "status_barang"];
		/*$data['total']			= $this->mod->tampil_kura($data)['total'];
		$data['result']			= $this->mod->tampil_kura($data)['result'];
		foreach ($data['result'] as $records) {
			$temp[]				= $records;
		}*/
		$this->load->library('pagination');
        $config['base_url'] = site_url('frontend/shop_kura'); //site url
		$config['total_rows'] =$this->db->count_all('barang');
		$config['per_page']= 6;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['per_page'] = $config["per_page"];
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->mod->get_barang_list($config["per_page"], $data['page']);           
        $data['pagination'] = $this->pagination->create_links();
		//load view mahasiswa view

        $limit = 1;
		$data['result']			= $this->mod->tampil_kura($data)['result'];
		//print('<pre>'); print_r($data); exit();
		foreach ($data['result'] as $records) {
			$records['level']	= $data['base_level'];
			$temp[]				= $records;
		}
		$data['result']			= $temp;
		if ($temp != null)
		{
			$this->parser->parse('tpl_frontend/shop_kura', $data);
		} else {
			$this->parser->parse('tpl_frontend/barang_kosong', $data);
		}
		
	}

	public function shop_kadal($keyword = null)
	{
		$temp = null;
		$this->load->model('M_frontend', 'mod');
		$data 					= self::class_data();
		$data['title']			='Shop';
		$data['table_view'] 	= 'barang';
		$data['search'] 		= $this->input->get('search-product');
		$data['sorting']		= $this->input->get('sorting');
		$data['fields']			= ["id_barang", "nama_barang", "harga_barang", "keterangan_barang", "gambar1_barang", "gambar2_barang", "gambar3_barang", "idsubkategori_barang", "idpersonal_barang", "status_barang"];
		/*$data['total']			= $this->mod->tampil_kadal($data)['total'];
		$data['result']			= $this->mod->tampil_kadal($data)['result'];
		foreach ($data['result'] as $records) {
			$temp[]				= $records;
		}*/
		$this->load->library('pagination');
        $config['base_url'] = site_url('frontend/shop_kadal'); //site url
		$config['total_rows'] =$this->db->count_all('barang');
		$config['per_page']= 6;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['per_page'] = $config["per_page"];
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->mod->get_barang_list($config["per_page"], $data['page']);           
        $data['pagination'] = $this->pagination->create_links();
		//load view mahasiswa view

        $limit = 1;
		$data['result']			= $this->mod->tampil_kadal($data)['result'];
		//print('<pre>'); print_r($data); exit();
		foreach ($data['result'] as $records) {
			$records['level']	= $data['base_level'];
			$temp[]				= $records;
		}
		$data['result']			= $temp;
		if ($temp != null)
		{
			$this->parser->parse('tpl_frontend/shop_kadal', $data);
		} else {
			$this->parser->parse('tpl_frontend/barang_kosong', $data);
		}
		
	}

	public function shop_acc($keyword = null)
	{
		$temp = null;
		$this->load->model('M_frontend', 'mod');
		$data 					= self::class_data();
		$data['title']			='Shop';
		$data['table_view'] 	= 'barang';
		$data['search'] 		= $this->input->get('search-product');
		$data['sorting']		= $this->input->get('sorting');
		$data['fields']			= ["id_barang", "nama_barang", "harga_barang", "keterangan_barang", "gambar1_barang", "gambar2_barang", "gambar3_barang", "idsubkategori_barang", "idpersonal_barang", "status_barang"];
		/*$data['total']			= $this->mod->tampil_acc($data)['total'];
		$data['result']			= $this->mod->tampil_acc($data)['result'];
		foreach ($data['result'] as $records) {
			$temp[]				= $records;
		}*/
		$this->load->library('pagination');
        $config['base_url'] = site_url('frontend/shop_acc'); //site url
		$config['total_rows'] =$this->db->count_all('barang');
		$config['per_page']= 6;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['per_page'] = $config["per_page"];
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->mod->get_barang_list($config["per_page"], $data['page']);           
        $data['pagination'] = $this->pagination->create_links();
		//load view mahasiswa view

        $limit = 1;
		$data['result']			= $this->mod->tampil_acc($data)['result'];
		//print('<pre>'); print_r($data); exit();
		foreach ($data['result'] as $records) {
			$records['level']	= $data['base_level'];
			$temp[]				= $records;
		}
		$data['result']			= $temp;
		if ($temp != null)
		{
			$this->parser->parse('tpl_frontend/shop_acc', $data);
		} else {
			$this->parser->parse('tpl_frontend/barang_kosong', $data);
		}
		
	}

	public function shop_ser($keyword = null)
	{
		$temp = null;
		$this->load->model('M_frontend', 'mod');
		$data 					= self::class_data();
		$data['title']			='Shop';
		$data['table_view'] 	= 'barang';
		$data['search'] 		= $this->input->get('search-product');
		$data['sorting']		= $this->input->get('sorting');
		$data['fields']			= ["id_barang", "nama_barang", "harga_barang", "keterangan_barang", "gambar1_barang", "gambar2_barang", "gambar3_barang", "idsubkategori_barang", "idpersonal_barang", "status_barang"];
		/*$data['total']			= $this->mod->tampil_ser($data)['total'];
		$data['result']			= $this->mod->tampil_ser($data)['result'];
		foreach ($data['result'] as $records) {
			$temp[]				= $records;
		}*/
		$this->load->library('pagination');
        $config['base_url'] = site_url('frontend/shop_ser'); //site url
		$config['total_rows'] =$this->db->count_all('barang');
		$config['per_page']= 6;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['per_page'] = $config["per_page"];
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->mod->get_barang_list($config["per_page"], $data['page']);           
        $data['pagination'] = $this->pagination->create_links();
		//load view mahasiswa view

        $limit = 1;
		$data['result']			= $this->mod->tampil_ser($data)['result'];
		//print('<pre>'); print_r($data); exit();
		foreach ($data['result'] as $records) {
			$records['level']	= $data['base_level'];
			$temp[]				= $records;
		}
		$data['result']			= $temp;
		if ($temp != null)
		{
			$this->parser->parse('tpl_frontend/shop_ser', $data);
		} else {
			$this->parser->parse('tpl_frontend/barang_kosong', $data);
		}
		
	}

	public function blog($keyword = null)
	{	
		$temp = null;
		$this->load->helper(array('string', 'text'));
		$this->load->model('admin/M_artikel', 'mod');
		$data 					= self::class_data();
		$data['title']			='Blog';
		$data['table_view']     = 'v_artikel_katar';
		$data['search'] 		= $this->input->get('search-product');
		$data['sorting']		= $this->input->get('sorting');
        $data['fields']         = ["id_artikel", "judul_artikel", "isi_artikel", "penulis_artikel", "kategori_artikel", "gambar_artikel", "insert_on"];
       
		$this->load->library('pagination');
        $config['base_url'] = site_url('frontend/blog'); //site url
		$config['total_rows'] =$this->db->count_all('artikel');
		$config['per_page']= 3;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['per_page'] = $config["per_page"];
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->mod->get_artikel_list($config["per_page"], $data['page']);           
        $data['pagination'] = $this->pagination->create_links();
		//load view mahasiswa view

        $limit = 1;
		$data['result']			= $this->mod->fetch_data($data)['result'];
		//print('<pre>'); print_r($data); exit();
		foreach ($data['result'] as $records) {
			$records['level']	= $data['base_level'];
			$temp[]				= $records;
		}
		$data['result']         = $temp;
		//print('<pre>'); print_r($data); exit();
		if ($temp != null)
		{
			$this->parser->parse('tpl_frontend/blog', $data);
		} else {
			$this->parser->parse('tpl_frontend/blog_kosong', $data);
		}
	
		
	}

	public function blog_peng($keyword = null)
	{
		$temp = null;
		$this->load->helper(array('string', 'text'));
		$this->load->model('admin/M_artikel', 'mod');
		$data 					= self::class_data();
		$data['title']			='Blog';
		$data['table_view']     = 'artikel';
		$data['search'] 		= $this->input->get('search-product');
		$data['sorting']		= $this->input->get('sorting');
        $data['fields']         = ["id_artikel", "judul_artikel", "isi_artikel", "penulis_artikel", "kategori_artikel", "gambar_artikel", "insert_on"];
        
		//print('<pre>'); print_r($data); exit();
		$this->load->library('pagination');
        $config['base_url'] = site_url('frontend/blog_peng'); //site url
		$config['total_rows'] =$this->db->count_all('artikel');
		$config['per_page']= 3;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['per_page'] = $config["per_page"];
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->mod->get_artikel_list($config["per_page"], $data['page']);           
        $data['pagination'] = $this->pagination->create_links();
		//load view mahasiswa view

        $limit = 1;
		$data['result']			= $this->mod->kat_peng($data)['result'];
		//print('<pre>'); print_r($data); exit();
		foreach ($data['result'] as $records) {
			$records['level']	= $data['base_level'];
			$temp[]				= $records;
		}
		$data['result']         = $temp;
		//print('<pre>'); print_r($data); exit();
		if ($temp != null)
		{
			$this->parser->parse('tpl_frontend/blog_peng', $data);
		} else {
			$this->parser->parse('tpl_frontend/blog_kosong', $data);
		}
	}

	public function blog_per($keyword = null)
	{
		$temp = null;
		$this->load->helper(array('string', 'text'));
		$this->load->model('admin/M_artikel', 'mod');
		$data 					= self::class_data();
		$data['title']			='Blog';
		$data['table_view']     = 'artikel';
		$data['search'] 		= $this->input->get('search-product');
		$data['sorting']		= $this->input->get('sorting');
        $data['fields']         = ["id_artikel", "judul_artikel", "isi_artikel", "penulis_artikel", "kategori_artikel", "gambar_artikel", "insert_on"];
		$this->load->library('pagination');
        $config['base_url'] = site_url('frontend/blog_per'); //site url
		$config['total_rows'] =$this->db->count_all('artikel');
		$config['per_page']= 3;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['per_page'] = $config["per_page"];
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->mod->get_artikel_list($config["per_page"], $data['page']);           
        $data['pagination'] = $this->pagination->create_links();
		//load view mahasiswa view

        $limit = 1;
		$data['result']			= $this->mod->kat_per($data)['result'];
		//print('<pre>'); print_r($data); exit();
		foreach ($data['result'] as $records) {
			$records['level']	= $data['base_level'];
			$temp[]				= $records;
		}
	
		$data['result']         = $temp;
		//print('<pre>'); print_r($data); exit();
		if ($temp != null)
		{
			$this->parser->parse('tpl_frontend/blog_per', $data);
		} else {
			$this->parser->parse('tpl_frontend/blog_kosong', $data);
		}
	}

	public function about()
	{
		$data['title']='About';
		$this->parser->parse('tpl_frontend/about', $data);
	}
	
	public function product_detail($id_barang)
	{

		$this->load->model('M_frontend', 'mod');
		$data					= self::class_data();
		$data['title'] 			= 'Product Detail';
		$data['table_view'] 	= 'v_barang_personal_kategori';
		$data['result'] 		= $this->mod->detail_barang($id_barang);
		//print('<pre>'); print_r($data); exit();
		$this->parser->parse('tpl_frontend/product-detail', $data);
	}

	public function blog_detail($id_artikel)
	{
		
		$this->load->model('admin/M_artikel', 'mod');
		$data['title'] 			= 'Blog Detail';
		$data['table_view'] 	= 'v_artikel_katar';
		$data['result']			= $this->mod->detail_blog($id_artikel);
		//print('<pre>'); print_r($data); exit();
		$this->parser->parse('tpl_frontend/blog-detail', $data);
	}

	public function search_shop()
	{
		$this->load->model('M_frontend', 'mod');
		$data 					= self::class_data();
		$data['title']			='Shop';
		$data['table_view'] 	= 'barang';
		$data['fields']			= ["id_barang", "nama_barang", "harga_barang", "keterangan_barang", "gambar1_barang", "gambar2_barang", "gambar3_barang", "idsubkategori_barang", "idpersonal_barang", "status_barang"];
		$data['total']			= $this->mod->tampil_search_shop($data)['total'];
		$data['result']			= $this->mod->tampil_search_shop($data)['result'];
		foreach ($data['result'] as $records) {
			$records['level']	= $data['base_level'];
			$temp[]				= $records;
		}
		$data['result']			= $temp;
		//print('<pre>'); print_r($data); exit();
		$this->parser->parse('tpl_frontend/shop', $data);
	}

	public function blog_07()
	{
		$this->load->helper(array('string', 'text'));
		$this->load->model('admin/M_artikel', 'mod');
		$data['title']			='Blog';
		$data['table_view']     = 'artikel';
        $data['fields']         = ["id_artikel", "judul_artikel", "isi_artikel", "penulis_artikel", "kategori_artikel", "gambar_artikel", "tanggal_artikel","insert_on"];
        $data['total']          = $this->mod->fetch_data($data)['total'];
        $data['result']         = $this->mod->fetch_data($data)['result'];

        foreach ($data['result'] as $records) {
            $temp[]             = $records;
        }
        //print('<pre>'); print_r($data); exit();
		$data['result']         = $temp;
        //print('<pre>'); print_r($data); exit();
		$this->parser->parse('tpl_frontend/07_blog', $data);
	}
}

/* End of file Frontend.php */
/* Location: ./application/controllers/Frontend.php */