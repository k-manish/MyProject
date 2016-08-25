<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/MyProject/config/dbconnection.php');
/*class ddatabases
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
        $this->conn=new mysqli($this->servername, $this->username, $this->pass);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        else{
            echo 'connected successfully';
            echo $_SERVER['DOCUMENT_ROOT'];
        }
    }
    
    function createdbs()
    {
        $sql="create database demodb";
        if($this->conn->query($sql)=== TRUE)
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
    $d->createdbs(); */
connectdb("demodb");


echo $_SERVER['DOCUMENT_ROOT']
    
?>