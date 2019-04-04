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
		$this->load->model('admin/M_barang', 'mod');
		$data['title']='Shop';
		$data['table_view'] 	= 'barang';
		$data['fields']			= ["id_barang", "nama_barang", "harga_barang", "keterangan_barang", "gambar1_barang", "gambar2_barang", "gambar3_barang", "idsubkategori_barang", "idpersonal_barang", "status_barang"];
		$data['total']			= $this->mod->tampil($data)['total'];
		$data['result']			= $this->mod->tampil($data)['result'];
		foreach ($data['result'] as $records) {
			$temp[]				= $records;
		}
		$data['result']			= $temp;
		$this->parser->parse('tpl_frontend/shop', $data);
	}

	public function shop_ular()
	{
		$this->load->model('admin/M_barang', 'mod');
		$data['title']='Shop';
		$data['table_view'] 	= 'barang';
		$data['fields']			= ["id_barang", "nama_barang", "harga_barang", "keterangan_barang", "gambar1_barang", "gambar2_barang", "gambar3_barang", "idsubkategori_barang", "idpersonal_barang", "status_barang"];
		$data['total']			= $this->mod->tampil_ular($data)['total'];
		$data['result']			= $this->mod->tampil_ular($data)['result'];
		foreach ($data['result'] as $records) {
			$temp[]				= $records;
		}
		$data['result']			= $temp;
		$this->parser->parse('tpl_frontend/shop_ular', $data);
	}

	public function blog()
	{
		$this->load->helper(array('string', 'text'));
		$this->load->model('admin/M_artikel', 'mod');
		$data['title']='Blog';
		$data['table_view']     = 'artikel';
        $data['fields']         = ["id_artikel", "judul_artikel", "isi_artikel", "penulis_artikel", "kategori_artikel", "gambar_artikel", "tanggal_artikel","insert_on"];
        $data['total']          = $this->mod->fetch_data($data)['total'];
        $data['result']         = $this->mod->fetch_data($data)['result'];
        foreach ($data['result'] as $records) {
            $temp[]             = $records;
        }
		$data['result']         = $temp;
	


        //print('<pre>'); print_r($data); exit();
		$this->parser->parse('tpl_frontend/blog', $data);
		
	}
	public function about()
	{
		$data['title']='About';
		$this->parser->parse('tpl_frontend/about', $data);
	}
	
	public function product_detail()
	{
		$data['title'] = 'Product Detail';
		$this->parser->parse('tpl_frontend/product-detail', $data);
	}

	public function blog_detail()
	{
		$this->load->model('admin/M_artikel', 'mod');
		$data['title'] = 'Blog Detail';

		$data['table_view'] = 'artikel';
		$data['result']         = $this->mod->fetch_id($data)['result'];
		// $data['result']			= $this->mod->detail_barang($this->uri->segment(4));
		$this->parser->parse('tpl_frontend/blog-detail', $data);
	}
}

/* End of file Frontend.php */
/* Location: ./application/controllers/Frontend.php */