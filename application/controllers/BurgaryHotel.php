<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class BurGaryHotel extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('bur-gary-hotels/index');
    }

    public function about()
    {
       echo "burgaryhotel 建構中...";
    }
}