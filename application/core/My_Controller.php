<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class My_Controller extends CI_Controller
{
	public $manufacturerId;

	public $userId;

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('path');
		$this->load->library('encryption');
		$this->load->library('session');
		$this->manufacturerId = $this->session->userdata('manufacturerId');
		$this->userId = $this->session->userdata('userId');
	}

	public function getDomain()
	{
		$CI = &get_instance();
		return preg_replace("/^[\w]{2,6}:\/\/([\w\d\.\-]+).*$/", "$1", $CI->config->slash_item('base_url'));
	}

	protected function handling($message, $status= 200, $options = [])
    { 
        $result = ['status' => $status, 'message' => $message];

        foreach($options as $key=> $option)
            $result[$key] = $option;

        return $this->output->set_content_type('application/json')
					->set_status_header($status)
					->set_output(json_encode($result));
    }
}
