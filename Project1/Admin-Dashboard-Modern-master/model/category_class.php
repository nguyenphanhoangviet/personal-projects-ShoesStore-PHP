<?php
    include('connect.php');
    Class Category{
        public function insert($category_name){
            $data = new Database();
            $data -> connection -> query("INSERT INTO category (category_name) VALUES ('".$category_name."')");
        }
        public function update($category_id , $category_name ){
            $data = new Database();
            $data -> connection -> query("UPDATE category SET  category_name = '".$category_name ."' WHERE category_id = ".$category_id);
        }
        public function delete($category_id){
            $data = new Database();
            $data->connection -> query("DELETE FROM category WHERE category_id = ".$category_id."");
        }
        public function get_all_category(){
            $data = new Database();
            return $data -> connection -> query('SELECT * FROM category');   
        }
        public function get_by_id($category_id){
            $data = new Database();
            return $data -> connection->query("SELECT * FROM category WHERE category_id = ".$category_id."");  
        }
    }
    
?>