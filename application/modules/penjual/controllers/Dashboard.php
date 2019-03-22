<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Dashboard extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function class_data()
    {
        $data['base_level'] = $this->uri->segment(1);
        $data['base_class'] = 'dashboard';

        return $data;
    }

    public function index()
    {
        $data                   = MY_Controller::data_session() + self::class_data();
        $data['base_function']  = 'index';
        $data['title']          = 'Dashboard';

        $this->parser->parse('tpl_penjual/template', $data);
    }
}