<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UploadData extends CI_Controller {

	public function index()
	{
		$this->load->view('partial/header');
		$this->load->view('upload');
		$this->load->view('partial/footer');		
	}

	public function upload(){
        $fileName = date('ydmshsi').'.jpg';
        $config['upload_path'] = './assets/dataset/'; //buat folder dengan nama assets di root folder
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'jpg|jpeg';
        $config['max_size'] =50000;
         
        $this->load->library('upload');
        $this->upload->initialize($config);

       	if ( ! $this->upload->do_upload('fileImg'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        redirect("manipulation/data/".$fileName);
                }
    }

}

/* End of file UploadData.php */
/* Location: ./application/controllers/UploadData.php */