<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class SpaSpringResort extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('manufacturer_domain_model');
        $this->load->model('news_model');
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
        $domain = $_SERVER['HTTP_HOST'];
        $manufacturer = $this->manufacturer_domain_model->getWhere(['domain' => $domain])->row();
        $manufacturerId = $manufacturer->manufacturer_id;
        if(is_null($manufacturer))
            return;
        $news = $this->news_model->getWhere(['manufacturer_id' => $manufacturerId])->result();
        if(is_null($news))
            return;
        $this->load->view('spa-spring-resorts/news', ['news' => $news]);
    }

    public function newsDetail($id)
    {
        $news = $this->news_model->getWhere(['id' => $id])->row();
        if(is_null($news))
            return;
        $this->load->view('spa-spring-resorts/news-detail', ['news' => $news]);
    }
}