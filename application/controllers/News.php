<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class News extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->verify();
    }

    public function index()
    {
        $this->load->view('backstage/news');
    }

    public function add()
    {
        $this->load->view('backstage/add-news');
    }

    public function edit($id)
    {
        $news = $this->news_model->getWhere(['id' => $id])->row();
        if(is_null($news))
            return;
        $this->load->view('backstage/edit-news', ['news' => $news]);
    }
}