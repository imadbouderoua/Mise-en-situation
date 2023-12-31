<?php
include 'config.php';
class CHAT extends config{


// gaching password
public function hach_password($password)
    {
        $hach = sha1($password);
        return $hach;
    }


// insert in data base
public function insert($sql)
    {   
        //echo"<br> hello ";
        $result = mysqli_query($this->conn,$sql);
        // echo"<br> hello ";
        if (!$result) {
            echo mysqli_error($this->conn);
        }else { 
            echo"error";        
            header("Location:..\VIEW\login.php");
        }
    }

public function select($sql,$email,$new_password){    
    $result = mysqli_query($this->conn,$sql);
    $row = mysqli_fetch_assoc($result);
    if ($email === $row['email'] && $new_password === $row['password'] ){
        return $row;
    }else {          
        echo "ERROR : " . mysqli_error($this->conn);
    }
}

}







?>