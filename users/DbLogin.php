<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/MyProject/Lib/dbconnection.php');

class DbLogin
{
    protected $conn;
    
    public function __construct()
    {
        $this->conn=connectdb("demodb");
    }
    
    public function authenticate($userid,$pswd)
    {
        $sql= "select * from login where userid='"  . $userid ."' and password='".$pswd . "'";
        $result = $this->conn->query($sql);
        return $result;
    }
}
?>