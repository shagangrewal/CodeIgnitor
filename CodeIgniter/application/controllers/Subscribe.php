<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe extends CI_Controller {

       public function index()
    {
        $this->load->view('index');
    }


     public function subscribe_view()
     {
        
            $this->load->model('subscribe_model');
            $this->data['service']=$this->subscribe_model->get_service();
            $this->data['pet']=$this->subscribe_model->get_pet();
            $this->load->view('templates/header');
            $this->load->view('pages/subscribe',$this->data);
            $this->load->view('templates/footer');
     }

     

         public function save_subscription()
        {
                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('client_name', 'Client Name', 'trim|required|min_length[3]|max_length[35]');
                $this->form_validation->set_rules('client_email', 'Email', 'trim|required|valid_email');
                $this->form_validation->set_rules('address', 'Address', 'trim|required|min_length[10]|max_length[35]');
                $this->form_validation->set_rules('phone', 'Phone', 'trim|required|regex_match[/^[0-9]{10}$/]');
                $this->form_validation->set_rules('client_password', 'Password', 'trim|required|max_length[16]|min_length[8]|alpha_numeric');
                $this->form_validation->set_rules('type_of_service', 'Type of Services','required');
                $this->form_validation->set_rules('pet', 'Pet','required');

                if ($this->form_validation->run() == FALSE)
                {
                    $this->load->model('subscribe_model');
                    $this->data['service']=$this->subscribe_model->get_service();
                    $this->data['pet']=$this->subscribe_model->get_pet();
                    $this->load->view('templates/header');
                    $this->load->view('pages/subscribe',$this->data);
                    $this->load->view('templates/footer');
                    return;
                }
                else
                {
                    $this->load->helper('security');
                    $client_name = $_POST['client_name'];
                    $address = $_POST['address'];
                    $client_email = $_POST['client_email'];
                    $phone = $_POST['phone'];
                    $client_password = $_POST['client_password'];
                    $type_of_service = $_POST['type_of_service'];
                    $pet = $_POST['pet'];
                    $this->load->model('subscribe_model');
                    $this->subscribe_model->create_subscription($client_name,$address,$client_email,$phone,$client_password,$type_of_service,$pet);
                     redirect('subscribe/subscribe_view');;
                }
        }
}
