<?php

class ddatabases
{
    protected $servername="localhost";
    protected $username="root";
    protected $pass="";
    protected $conn;
    
    public function __construct()
    {
        
    }
    function connection()
    {
        $conn=new mysqli($this->servername, $this->username, $this->pass);
        if ($conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        else{
            echo 'connected successfully';
        }
    }
    
    function createdbs()
    {
        $sql="create database demodb";
        if($conn->query($sql)==true)
        {
            echo 'demodb created successfully';
        }
        else{
            die("database creation failed");
        }
    }
    function createtable()
    {
        $conn=new mysqli($servername, $username, $password,"demodb");
        if ($conn->connect_error) {
            die("Connection failed: ");
        }
        else
        {
            $sql="create table pswdinfo(userid varchar(20),password varchar(15))";
            if($conn->query($sql)==true){
                echo 'table create successfuly';
            }
        }
    }
    
   
}
 $d = new ddatabases();
    $d->connection();
?>