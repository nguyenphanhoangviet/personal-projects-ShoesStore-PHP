<?php 
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'project1');

class Database{
    public $connection;
    public function __construct(){
        $this -> connect();
    }
    public function connect(){
        $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
        if($this -> connection != null){
        }
    }
}
$data = new Database();
?>
