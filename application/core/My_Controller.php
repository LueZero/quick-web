<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class My_Controller extends CI_Controller
{
	public $manufacturer;

	public $manufacturerId;

	public $userId;

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('path');
		$this->load->library('encryption');
		$this->load->library('session');
		$this->load->model('manufacturer_model');
		
		$this->manufacturerId = $this->session->userdata('manufacturerId');
		$this->userId = $this->session->userdata('userId');

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
