<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

#----------------------------------------------------------------
# nama file        : Login.php
# lokasi file    : ./application/modules/admin/controllers/Login.php
# dibuat oleh    : Zamah Sari
#----------------------------------------------------------------

class Login extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login', 'mod');
    }

    #-----------------------------------------------------------
    # nama metode     : index()
    # @parameter    :
    # catatan        :
    #-----------------------------------------------------------

    public function classdata()
    {
    	$data['title'] = 'Halaman Login';
    	$data['table']='personal';
    	$data['fields']=[
			'id_personal',
			'nama_personal',
            'foto_personal',
			'hp_personal',
			'email_personal',
            'lokasi_personal',
			'level_personal',
			'insert_on'
    	];
    	return $data;
    }

    public function index()
    {
        $data=$this->classdata();
        if($this->session->flashdata('error')){
        	$data['error']=$this->session->flashdata('error');
        }
        $this->parser->parse('global/login/index', $data);
    }

    public function login_cek()
    {
    	$data=$this->classdata();
        $data['formdata']=[
        	'email_personal'=>$this->input->post('email_personal'),
        	'password_personal'=>$this->input->post('password_personal')
        ];
       	$this->form_validation->set_rules('email_personal', 'Email', 'required', ['required'=>'Email harus di isi']);
       	$this->form_validation->set_rules('password_personal', 'Password', 'required', ['required'=>'Password harus di isi']);
        
        if($this->form_validation->run() == FALSE) {
        	$this->parser->parse('global/login/index', $data);
        } else {
	        $data=$this->mod->login_cek($data);
	        if ($data['count']===1) {
                // dump_exit($data);
                $data['session']=[
                    'id_session' => $data['result']->id_personal,
                    'nama_session' => $data['result']->nama_personal,
                    'foto_session' => $data['result']->foto_personal,
                    'hp_session' => $data['result']->hp_personal,
                    'email_session' => $data['result']->email_personal,
                    'lokasi_session' => $data['resut']->lokasi_personal,
                    'level_session' => $data['result']->level_personal,
                    'insert_on_session' => $data['result']->insert_on,
                    'logged_in' => true
                ];
                // dump_exit($data);
                $this->session->set_userdata($data['session']);
	        	switch ($data['result']->level_personal) {
	        		case 'admin':
                        // dump_exit($data);
	        			redirect('admin/dashboard');
	        			break;

                    case 'penjual':
                        // dump_exit($data);
                        redirect('penjual/dashboard');
                        break;
                    
                    default:
                        $this->session->set_flashdata('error', 'otoritas anda belum divalidasi');
                        redirect('global/login');
                        break;
	           }
	        }
        }
    }
 }



# Akhir dari file Login.php
# lokasi file    : ./application/modules/admin/controllers/Login.php
