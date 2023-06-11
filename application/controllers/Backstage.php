<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Backstage extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function login()
    {
        $this->load->view('backstage/login');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url("/backstage/login"));
    }
}