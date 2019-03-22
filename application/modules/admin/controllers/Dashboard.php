<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

#----------------------------------------------------------------
# nama file        : Dashboard.php
# lokasi file    : ./application/modules/admin/controllers/Dashboard.php
# dibuat oleh    : Zamah Sari
#----------------------------------------------------------------

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
        $data                  = MY_Controller::data_session() + self::class_data();
        $data['base_function'] = 'index';
        $data['title']         = 'Dashboard';

        // dump_exit($data);
        $this->parser->parse('tpl_admin/template', $data);
    }

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
