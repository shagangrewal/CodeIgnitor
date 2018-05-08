<?php
	class Pages extends CI_Controller{
		public function view($page = 'index'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}

			if($page=='subscribe'){
				$this->load->model('subscribe_model');
            	$this->data['service']=$this->subscribe_model->get_service();
            	$this->data['pet']=$this->subscribe_model->get_pet();
			}
			if($page=='services')
			{
				$this->load->model('subscribe_model');
            	$this->data['service']=$this->subscribe_model->get_service();
			}
			if($page=='askvet'){
				$this->load->model('askvet_model');
            	$this->data['questions']=$this->askvet_model->get_questions();
			}
			$this->data['title'] = ucfirst($page);
			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $this->data);
			$this->load->view('templates/footer');
		}
	}