<?php
class subscribe_model extends CI_Model
{

    public function __construct(){
        $this->load->database();
    }

    public function get_service()
    {
        $query =  $this->db->select('*');
        $query =  $this->db->from('service');
        $query = $this->db->get();
        $result=$query->result_array();
        return $result;
    }

        public function get_pet()
    {
        $query =  $this->db->select('*');
        $query =  $this->db->from('pet');
        $query = $this->db->get();
        $result=$query->result_array();
        return $result;
    }

    public function create_subscription($client_name,$address,$client_email,$phone,$client_password,$type_of_service,$pet)
    {
        

                $hash = password_hash($client_password, PASSWORD_BCRYPT, array("cost" => 10));
                $ins_data = array('name'=>$client_name,
                    'address'=>$address,
                    'phone'=>$phone,
                    'email'=>$client_email,
                    'password'=>do_hash($client_password)
                );
                $query = $this->db->insert('client',$ins_data);
                $cmp_id = $this->db->insert_id();
                $sub_data = array('clientid'=>$cmp_id,
                    'serviceid'=>$type_of_service,
                    'petid'=>$pet,
                    'date'=>date('Y-m-d')
                );
                $query1 = $this->db->insert('subscription',$sub_data);
    }

}
