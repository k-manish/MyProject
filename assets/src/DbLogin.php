<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/MyProject/config/dbconnection.php');

class DbLogin
{
    protected $conn;
    
    public function __construct()
    {
        $this->conn=connectdb("demodb");
    }
    
    public function authenticate($userid,$pswd)
    {
        $sql= 'select * from login where userid="'. $userid.'" and password="'.$pswd . '"';
       
        $result = $this->conn->query($sql);
        
        if ($result) {
            
        } else {
            echo 'not working.';
        }
       
        if($result->num_rows > 0)
            {
                return true;
            }
            else
            {
              return false;
            }
        
        
    }
}
?>