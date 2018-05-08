<?php

class AskVet extends CI_Controller{

	public function index(){

		$data['title'] = 'Post Method';

		$this->load->view('templates/header');
		$this->load->view('posts/index',$data);
		$this->load->view('templates/footer');
	}

    public function askvet_view()
     {
        
            $this->load->model('askvet_model');
            $this->data['questions']=$this->askvet_model->get_questions();
            $this->load->view('templates/header');
            $this->load->view('pages/askvet',$this->data);
            $this->load->view('templates/footer');
     }
}

?>