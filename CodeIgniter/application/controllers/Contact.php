<?php

class Contact extends CI_Controller{

	public function index(){

		$data['title'] = 'Post Method';

		$this->load->view('templates/header');
		$this->load->view('posts/index',$data);
		$this->load->view('templates/footer');
	}

    public function contact_view()
     {
        
            $this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');

            $this->load->view('templates/header');
            $this->load->view('pages/contact');
            $this->load->view('templates/footer');
     }

    public function save_contact()
        {
        	    $this->load->helper(array('form', 'url'));
			    $this->load->library('form_validation');
				$this->form_validation->set_rules('name', 'Name', 'trim|required');
				$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
				$this->form_validation->set_rules('comments', 'Comments', 'trim|required');
                $name = $_POST['name'];
                $email = $_POST['email'];
                $comments = $_POST['comments'];
                $this->session->set_userdata('name', $name);
                $this->session->set_userdata('email', $email);
                $this->session->set_userdata('comments', $comments);
                
                if ($this->form_validation->run() == FALSE)
                {
           			$this->load->view('templates/header');
            		$this->load->view('pages/contact');
            		$this->load->view('templates/footer');
                }
                else
                {

                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $comments = $_POST['comments'];
                    $this->load->model('contact_model');
                    $this->contact_model->create_contact($name,$email,$comments);
                    $this->session->set_flashdata('msg', 'Comments Noted!!');
                    redirect('contact/contact_view');
                }
        }
}

?>