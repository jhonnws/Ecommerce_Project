<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My404 extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

    }

    public function index(){
        $data['subview'] = 'my404';
        $this->load->view('_layout', $data);
    }
}