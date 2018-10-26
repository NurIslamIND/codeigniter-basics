<?php
    class users extends CI_Controller{
        public function show($user_id){
           // $this -> load->model('user_model'); // Manual Loading of Model

            $data['results'] = $this->user_model->get_users($user_id,'suave');

            // foreach ($result as $object) {
            //     echo $object->username ."<br>";
            //}


           // $data['welcome'] = "welcome to my page";


            $this->load->view('user_view', $data);






        }

        public function insert(){
            $username = "peter";
            $password = "secret";

            $this->user_model->create_users([
                'username' =>$username,
                'password' =>$password
            ]);
        }



    }


?>