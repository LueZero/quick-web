<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($params)
    {
        $this->load->view('welcome_message');
    }
}
