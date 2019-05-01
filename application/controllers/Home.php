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

        $jsonString3=$this->curl->simple_get('http://localhost/bananaApi/index.php/scaterdata', array(CURLOPT_BUFFERSIZE => 10));
        $data['dataScatter']=json_decode($jsonString3);

        $jsonString4=$this->curl->simple_get('http://localhost/bananaApi/index.php/metode', array(CURLOPT_BUFFERSIZE => 10));
        $data['datametode']=json_decode($jsonString4);

        $this->load->view('partial/header');
		$this->load->view('home',$data);
		$this->load->view('partial/footer');
	}

	

	
}
