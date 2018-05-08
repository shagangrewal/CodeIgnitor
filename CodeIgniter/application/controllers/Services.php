<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

    public function index()
    {
        $this->load->view('index');
    }


     public function service_view()
     {
			$this->load->view('templates/header');
            $this->load->model('subscribe_model');
            $this->data['service']=$this->subscribe_model->get_service();
            
            $this->load->view('pages/services',$this->data);
            $this->load->view('templates/footer');
     }
}
