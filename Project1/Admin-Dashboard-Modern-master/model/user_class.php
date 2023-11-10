<?php
    include('connect.php');
    Class User{
        public function insert($user_name , $user_email , $user_pass , $user_phone , $role_id){
            $data = new Database();
            $data -> connection -> query("INSERT INTO user (user_name,user_email,user_pass,user_phone,role_id) VALUES ('".$user_name."' ,'".$user_email."','".$user_pass."','".$user_phone."',".$role_id.")");
        }
        public function update($user_id , $user_name , $user_email , $user_pass ,$user_phone, $role_id ){
            $data = new Database();
            $data -> connection -> query("UPDATE user SET user_name = '".$user_name."', user_email = '".$user_email."', user_pass = '".$user_pass."' , user_phone = '".$user_phone."', role_id = '".$role_id ."' WHERE user_id = ".$user_id);
        }
        public function delete($user_id){
            $data = new Database();
            $data->connection -> query("DELETE FROM user WHERE user_id = ".$user_id."");
        }
        public function get_all_user(){
            $data = new Database();
            return $data -> connection -> query('SELECT * FROM user');   
        }
        public function get_by_id($user_id){
            $data = new Database();
            return $data -> connection->query("SELECT * FROM user WHERE user_id = '".$user_id."'");  
        }
    }
?>