<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataset extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
    }
	public function index()
	{

		$jsonString=$this->curl->simple_get('http://localhost/bananaApi/index.php/dataset',array('kategori'=>'matang'), array(CURLOPT_BUFFERSIZE => 10));
        $data['dataMatang']=json_decode($jsonString);

        $jsonString1=$this->curl->simple_get('http://localhost/bananaApi/index.php/dataset',array('kategori'=>'setMatang'), array(CURLOPT_BUFFERSIZE => 10));
        $data['datasetMatang']=json_decode($jsonString1);

        $jsonString2=$this->curl->simple_get('http://localhost/bananaApi/index.php/dataset',array('kategori'=>'mentah'), array(CURLOPT_BUFFERSIZE => 10));
        $data['dataMentah']=json_decode($jsonString2);

        $jsonString3=$this->curl->simple_get('http://localhost/bananaApi/index.php/scaterdata', array(CURLOPT_BUFFERSIZE => 10));
        $data['dataScatter']=json_decode($jsonString3);

        $this->load->view('partial/header');
		$this->load->view('dataset',$data);
		$this->load->view('partial/footer');
	}
	
}
