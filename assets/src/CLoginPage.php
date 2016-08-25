<?php
//echo '<pre>';
//print_r($_SERVER);
//exit;
include_once('DbLogin.php');
class Login
{
    protected $userid;
    protected $password;
    
    public function __construct()
    {
        $this->userid = $_POST["username"];
        $this->password = $_POST["pswd"];
    }
    function verify()
    {
        $c=new DbLogin();
        $result=$c->authenticate($this->userid,$this->password);
        if($result===TRUE)
        {
            echo 'you have logged in ';
        }
        else
        {
            echo 'error';
        }  
    }
    function display()
    {
        echo $this->userid;
        echo $this->password;
    }
}
$c=new Login();
$c->verify();

?>
