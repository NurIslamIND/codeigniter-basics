<?php
    class users extends CI_Controller{
       
        public function login(){
            
            $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');


            if($this->form_validation->run() == FALSE){
                $data = array(
                    'errors' => validation_errors()

                );
            } else {
                $username = $this->input->post('username');
                $password = $this->input->post('password');


                $user_details = $this->user_model->login_user($username, $password);
                // print_r($user_id);
                // die();
                //echo $user_details-> username;
                //die();
                if($user_details-> id){
                    $user_data = array(
                        'user_id' => $user_details-> id,
                        'username' => $user_details-> username,
                        'logged_in' => true
                     );
                     $this->session->set_userdata($user_data);
                     $this->session->set_flashdata('login_success', 'You are now logged in');
                     redirect('home/index');
                } else {
                    $this->session->set_flashdata('login_failed', 'Sorry, you are not logged in');
                    redirect('home/index');

                }
            }






            $this->session->set_flashdata($data);
            redirect('home');





        }


    }


?>