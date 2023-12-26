<?php
class config{
public $localhost = 'localhost'; 
public $username = 'root'; 
public $password = ''; 
public $db_name = 'chat_bot'; 
public $conn;

public function __construct(){
    $this->conn= mysqli_connect($this->localhost,$this->username,$this->password,$this->db_name);
    if ($this->conn) {
        echo"connected";      
    }else {
        echo "eroor";
    }
}
}