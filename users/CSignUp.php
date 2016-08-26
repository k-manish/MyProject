<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/MyProject/config/dbconnection.php');
class SignUp
{
    public $name;
    public $mail;
    public $mobile;
    
    function setdata()
    {
        $this->name=$_GET["name"];
        $this->mail=$_GET["mail"];
        $this->mobile=$_GET["mobile"];
    }
    function check()
    {
        if($this->name==="")
        {
            echo 'name error';  //want redirect form page
            exit;
        }
        if($this->mail==="")
        {
            echo 'mail error';
            exit;
        }
        if($this->mobile==="")
        {
            echo 'mobile error';
            exit;
        }
        $this->store();
    }
    function store()
    {
        $conn=connectdb("demodb");
        $sql="insert into user_detail values('" . $this->name ."','" . $this->mail ."','" .$this->mobile ."');";
        if($conn->query($sql)===TRUE){
            echo 'you have been signed up now';
            header('Location: LoginPage.php?registered=1');
        }
        else{
            header('Location: LoginPage.php?registered=2');
        }
    }
    
}

if(isset($_GET["name"]))
{
    $obj=new SignUp();
    $obj->setdata();
    $obj->check();
}
?>