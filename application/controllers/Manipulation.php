<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manipulation extends CI_Controller {

	public function index()
	{
		$this->load->view('partial/header');
		$this->load->view('manipulation');
		$this->load->view('partial/footer');
	}
	public function data(){
        $img=file_get_contents($_FILES['fileImg']['tmp_name']);
        $datImg = base64_encode($img);
        $fileName = date('ydmshsi').'.jpg';
        $datas = array(
            'string_encoded' => $datImg,
            'name' => $fileName,
        );
        $json_respnse=$this->curl->simple_post('http://localhost/bananaApi/index.php/dataset', $datas, array(CURLOPT_BUFFERSIZE => 10));
        //var_dump($json_respnse);
        $data['img'] = json_decode($json_respnse);
        
        if ($data['img']->status == 'sukses') {
            $this->load->view('partial/header');
            $this->load->view('manipulation',$data);
            $this->load->view('partial/footer');
        }
        else
        {
            
            //redirect('uploaddata','refresh');
        }
    }
    public function new(){
        $data['img']->filename ='http://localhost/bananaVision/assets/images/faces/face1.jpg';
        $this->load->view('partial/header');
        $this->load->view('manipulation',$data);
        $this->load->view('partial/footer');
    }   

}

/* End of file Manipulation.php */
/* Location: ./application/controllers/Manipulation.php */