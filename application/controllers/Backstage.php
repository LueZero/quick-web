<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Backstage extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('backstage/index');
    }
}