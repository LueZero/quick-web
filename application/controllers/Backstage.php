<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Backstage extends My_Controller
{
    public $manufacturer;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('manufacturer_model');
        $this->manufacturer = $this->manufacturer_model->getWhere(['id' => $this->manufacturerId])->row();
        $this->load->vars(['manufacturer' => $this->manufacturer]);
    }

    public function verify()
    {
        if(is_null($this->manufacturer))
        {
            $message = '<div class="alert alert-danger alert-dismissable my-4">';
			$message .= '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
			$message .= '<strong>Warning! </strong>請登入！';
			$message .= '</div>';
			$this->session->set_flashdata("message", $message );
			redirect(base_url("/backstage/login"));
        }
    }

    public function news()
    {
        $this->verify();
        $this->load->view('backstage/layouts/header');
        $this->load->view('backstage/news');
        $this->load->view('backstage/layouts/footer');
    }

    public function addition()
    {
        $this->verify();
        $this->load->view('backstage/layouts/header');
        $this->load->view('backstage/add-news');
        $this->load->view('backstage/layouts/footer');
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