<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Pesan extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pesan', 'mod');
    }

    public function classdata()
    {
        $data['title'] ='Halaman Ganti Password';
        $data['table']='pesan';
        $data['fields']=[
            'id_pesan',
            'judul_pesan',
            'email_pesan',
            'hp_pesan',
            'isi_pesan',
            'levelpengirim_pesan',
            'status_pesan',
            'datetime_pesan',
            'penerima_pesan',
            'pengiriman_pesan',
        ];
        
        return $data;
    }

    public function index()
    {   
        $data['classdata'] = $this->classdata();
        $data['title']  = 'Form Lupa Password';
        $this->parser->parse('global/pesan/index', $data);
    }

    public function tambah_proses()
    {
        $data = [
            "id_pesan" => $this->input->post('id_pesan'),
            "judul_pesan" => $this->input->post('judul_pesan'),
            "email_pesan" => $this->input->post('email_pesan'),
            "hp_pesan" => $this->input->post('hp_pesan'),
            "isi_pesan" => $this->input->post('isi_pesan'),
            "levelpengirim_pesan" => $this->input->post('levelpengirim_pesan'),
            "status_pesan" => $this->input->post('status_pesan'),
            "penerima_pesan" => $this->input->post('penerima_pesan'),
            "pengiriman_pesan" => $this->input->post('pengiriman_pesan')
        ];
        //print('<pre>'); print_r($data); exit();
        $this->mod->tambah_pesan($data);
        redirect(site_url('global/login'));
    }
}