<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
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
		$data['title']			='Shop';
		$data['table_view'] 	= 'barang';
		$data['fields']			= ["id_barang", "nama_barang", "harga_barang", "keterangan_barang", "gambar1_barang", "gambar2_barang", "gambar3_barang", "idsubkategori_barang", "idpersonal_barang", "status_barang"];
		$data['total']			= $this->mod->tampil($data)['total'];
		$data['result']			= $this->mod->tampil($data)['result'];
		foreach ($data['result'] as $records) {
			$records['level']	= $data['base_level'];
			$temp[]				= $records;
		}
		$data['result']			= $temp;
		//print('<pre>'); print_r($data); exit();
		if ($temp != null)
		{
			$this->parser->parse('tpl_frontend/shop', $data);
		} else {
			$this->parser->parse('tpl_frontend/barang_kosong', $data);
		}
	}

	public function shop_ular()
	{
		$temp = null;
		$this->load->model('M_frontend', 'mod');
		$data['title']			='Shop';
		$data['table_view'] 	= 'barang';
		$data['search'] 		= $this->input->get('search-product');
		$data['sorting']		= $this->input->get('sorting');
		$data['fields']			= ["id_barang", "nama_barang", "harga_barang", "keterangan_barang", "gambar1_barang", "gambar2_barang", "gambar3_barang", "idsubkategori_barang", "idpersonal_barang", "status_barang"];
		$data['total']			= $this->mod->tampil_ular($data)['total'];
		$data['result']			= $this->mod->tampil_ular($data)['result'];
		foreach ($data['result'] as $records) {
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

	public function shop_katak()
	{
		$temp = null;
		$this->load->model('M_frontend', 'mod');
		$data['title']			='Shop';
		$data['search'] 		= $this->input->get('search-product');
		$data['sorting']		= $this->input->get('sorting');
		$data['table_view'] 	= 'barang';
		$data['fields']			= ["id_barang", "nama_barang", "harga_barang", "keterangan_barang", "gambar1_barang", "gambar2_barang", "gambar3_barang", "idsubkategori_barang", "idpersonal_barang", "status_barang"];
		$data['total']			= $this->mod->tampil_katak($data)['total'];
		$data['result']			= $this->mod->tampil_katak($data)['result'];
		foreach ($data['result'] as $records) {
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
	
		

	public function shop_kura()
	{
		$temp = null;
		$this->load->model('M_frontend', 'mod');
		$data['title']			='Shop';
		$data['search'] 		= $this->input->get('search-product');
		$data['sorting']		= $this->input->get('sorting');
		$data['table_view'] 	= 'barang';
		$data['fields']			= ["id_barang", "nama_barang", "harga_barang", "keterangan_barang", "gambar1_barang", "gambar2_barang", "gambar3_barang", "idsubkategori_barang", "idpersonal_barang", "status_barang"];
		$data['total']			= $this->mod->tampil_kura($data)['total'];
		$data['result']			= $this->mod->tampil_kura($data)['result'];
		foreach ($data['result'] as $records) {
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

	public function shop_kadal()
	{
		$temp = null;
		$this->load->model('M_frontend', 'mod');
		$data['title']			='Shop';
		$data['table_view'] 	= 'barang';
		$data['search'] 		= $this->input->get('search-product');
		$data['sorting']		= $this->input->get('sorting');
		$data['fields']			= ["id_barang", "nama_barang", "harga_barang", "keterangan_barang", "gambar1_barang", "gambar2_barang", "gambar3_barang", "idsubkategori_barang", "idpersonal_barang", "status_barang"];
		$data['total']			= $this->mod->tampil_kadal($data)['total'];
		$data['result']			= $this->mod->tampil_kadal($data)['result'];
		foreach ($data['result'] as $records) {
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

	public function shop_acc()
	{
		$temp = null;
		$this->load->model('M_frontend', 'mod');
		$data['title']			='Shop';
		$data['table_view'] 	= 'barang';
		$data['search'] 		= $this->input->get('search-product');
		$data['sorting']		= $this->input->get('sorting');
		$data['fields']			= ["id_barang", "nama_barang", "harga_barang", "keterangan_barang", "gambar1_barang", "gambar2_barang", "gambar3_barang", "idsubkategori_barang", "idpersonal_barang", "status_barang"];
		$data['total']			= $this->mod->tampil_acc($data)['total'];
		$data['result']			= $this->mod->tampil_acc($data)['result'];
		foreach ($data['result'] as $records) {
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

	public function shop_ser()
	{
		$temp = null;
		$this->load->model('M_frontend', 'mod');
		$data['title']			='Shop';
		$data['table_view'] 	= 'barang';
		$data['search'] 		= $this->input->get('search-product');
		$data['sorting']		= $this->input->get('sorting');
		$data['fields']			= ["id_barang", "nama_barang", "harga_barang", "keterangan_barang", "gambar1_barang", "gambar2_barang", "gambar3_barang", "idsubkategori_barang", "idpersonal_barang", "status_barang"];
		$data['total']			= $this->mod->tampil_ser($data)['total'];
		$data['result']			= $this->mod->tampil_ser($data)['result'];
		foreach ($data['result'] as $records) {
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

	public function blog()
	{	
		$temp = null;
		$this->load->helper(array('string', 'text'));
		$this->load->model('admin/M_artikel', 'mod');
		$data['title']			='Blog';
		$data['table_view']     = 'artikel';
		$data['search'] 		= $this->input->get('search-product');
		$data['sorting']		= $this->input->get('sorting');
        $data['fields']         = ["id_artikel", "judul_artikel", "isi_artikel", "penulis_artikel", "kategori_artikel", "gambar_artikel", "insert_on"];
        $data['total']          = $this->mod->fetch_data($data)['total'];
        $data['result']         = $this->mod->fetch_data($data)['result'];

        foreach ($data['result'] as $records) {
            $temp[]             = $records;
        }
        //print('<pre>'); print_r($data); exit();
		$data['result']         = $temp;
		//print('<pre>'); print_r($data); exit();
		if ($temp != null)
		{
			$this->parser->parse('tpl_frontend/blog', $data);
		} else {
			$this->parser->parse('tpl_frontend/barang_kosong', $data);
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
		$data['table_view'] 	= 'artikel';
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