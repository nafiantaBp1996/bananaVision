<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
    }
	public function index()
	{
		$jsonString=$this->curl->simple_get('http://localhost/bananaApi/index.php/dataset', array(CURLOPT_BUFFERSIZE => 10));
        $data['dataset']=json_decode($jsonString);

		$this->load->view('partial/header');
		$this->load->view('home',$data);
		$this->load->view('partial/footer');	
	}

	

	
}
