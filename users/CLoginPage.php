<?php
session_start();
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
        $cd=new DbLogin();
        $result=$cd->authenticate($this->userid,$this->password);
        if($result)
        {
          if($result->num_rows > 0)
            {
                $_SESSION["user"]=$this->userid;
                //echo $_SESSION["user"];
                header("Location:HomePage.php");
                exit;
            }
            else
            {
                $_SESSION["err_msg"]="userid/password is not correct !!!!";
                header("Location:LoginPage.php");
                exit;
            }
        
        }
        else
        {
            echo 'database server is down now';
            exit;
        } 
        
    }
    
}
$c=new Login();
$c->verify();

?>
