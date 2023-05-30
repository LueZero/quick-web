<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class My_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('path');
	}

	function getDomain()
	{
		$CI = &get_instance();
		return preg_replace("/^[\w]{2,6}:\/\/([\w\d\.\-]+).*$/", "$1", $CI->config->slash_item('base_url'));
	}
}
