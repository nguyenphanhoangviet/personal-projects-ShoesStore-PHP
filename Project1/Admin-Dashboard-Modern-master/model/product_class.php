<?php
    include('connect.php');
    Class Product{
        public function insert($product_name, $product_price, $description, $category_id, $img) {
            $data = new Database();
            
            // Sử dụng prepared statement để tránh SQL Injection
            $query = "INSERT INTO product (product_name, product_price, description, category_id, img) VALUES (?, ?, ?, ?, ?)";
            $stmt = $data->connection->prepare($query);
            $stmt->bind_param("sssis", $product_name, $product_price, $description, $category_id, $img);
        
            // Thực hiện truy vấn
            $stmt->execute();
        
            // Đóng prepared statement
            $stmt->close();
        }
        
        public function update($product_id, $product_name, $product_price, $description, $category_id, $img) {
            $data = new Database();
        
            // Sử dụng prepared statement để tránh SQL Injection
            $query = "UPDATE product SET product_name = ?, product_price = ?, description = ?, category_id = ?, img = ? WHERE product_id = ?";
            $stmt = $data->connection->prepare($query);
            $stmt->bind_param("ssssii", $product_name, $product_price, $description, $category_id, $img, $product_id);
        
            // Thực hiện truy vấn
            $stmt->execute();
        
            // Đóng prepared statement
            $stmt->close();
        }
        
        public function delete($product_id) {
            $data = new Database();
        
            // Sử dụng prepared statement để tránh SQL Injection
            $query = "DELETE FROM product WHERE product_id = ?";
            $stmt = $data->connection->prepare($query);
            $stmt->bind_param("i", $product_id);
        
            // Thực hiện truy vấn
            $stmt->execute();
        
            // Đóng prepared statement
            $stmt->close();
        }
        
        public function get_all_product(){
            $data = new Database();
            return $data -> connection -> query('SELECT * FROM product');   
        }
        public function get_by_id($product_id){
            $data = new Database();
            return $data -> connection->query("SELECT * FROM product WHERE product_id = ".$product_id."");  
        }
    }
?>