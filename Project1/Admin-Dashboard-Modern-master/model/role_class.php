<?php
    include('connect.php');
    Class Role{
        public function insert($role_name){
            $data = new Database();
            $data -> connection -> query("INSERT INTO role (role_name) VALUES ('".$role_name."')");
        }
        public function update($role_id , $role_name ){
            $data = new Database();
            $data -> connection -> query("UPDATE role SET  role_name = '".$role_name ."' WHERE role_id = ".$role_id);
        }
        public function delete($role_id){
            $data = new Database();
            $data->connection -> query("DELETE FROM role WHERE role_id = ".$role_id."");
        }
        public function get_all_role(){
            $data = new Database();
            return $data -> connection -> query('SELECT * FROM role');   
        }
        public function get_by_id($role_id){
            $data = new Database();
            return $data -> connection->query("SELECT * FROM role WHERE role_id = ".$role_id."");  
        }
    }
?>