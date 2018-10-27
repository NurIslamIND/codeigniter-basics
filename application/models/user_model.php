<?php

class User_model extends CI_Model{

    public function get_users($user_id,$username){
        // $config['hostname'] = "localhost";
        // $config['username'] = "root";
        // $config['password'] = "";
        // $config['database'] = "errand_db";

        // $connection = $this->load->database($config);

        
        




        //$query = $this->db->query("SELECT * FROM users");
        //$this->db->where('id',$user_id);
        $this->db->where([
            'id'=>$user_id,
            'username' => $username
            ]);
        $query = $this->db->get('users');
        return $query->result();  




    }

    public function create_users($data){
        $this->db->insert('users',$data);
    }


    public function update_users($data,$id){
        $this->db->where(['id'=>$id]);
        $this->db->update('users',$data);
    }

    public function delete_users($id){
        $this->db->where(['id'=> $id]);
        $this->db->delete('users');
    }





}

?>