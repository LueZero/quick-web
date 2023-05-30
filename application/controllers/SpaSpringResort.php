<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class SpaSpringResort extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('spa-spring-resorts/index');
    }

    public function hotel()
    {
        $this->load->view('spa-spring-resorts/hotel');
    }

    public function facility()
    {
        $this->load->view('spa-spring-resorts/facility');
    }

    public function news()
    {
        $this->load->view('spa-spring-resorts/news');
    }

    public function newsDetail($id)
    {
        $this->load->view('spa-spring-resorts/newsdetail');
    }
}