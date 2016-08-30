<?php
/**
* File Name :CLoginPage.php
* File Path :http://localhost/MyProject/users/
* Author :Manish Kumar
* Date of creation :29/8/2016
* Comments if any : this file is used for taking input from a form,verify it and rediredting on homepage or Login Page.
*
*/
session_start();
require_once(__DIR__.'/../Lib/DbConnection.php');

class Login
{
    /**
     *@var string $userid;
     *@var string $password;
     *@var 2-d array  $result; 
     */
    protected $userid;
    protected $password;
    protected $result;
    
    /** @method void _construct()  set value of userid, password;
     * @return void
     */
    public function __construct()
    {
        $this->userid = $_POST["username"];
        $this->password = $_POST["pswd"];
    }
    
    /**
     *
     *checking conection with database and perform query
     *
     *@return void
     */
    function verify()
    {
        $conn=connectdb("demodb");  /** @method  connectdb() get $conn value */
        if($conn->connect_error)
        {
            echo 'database server is down now';
            exit;
        }
        else
        {
            $sql= "select * from login where userid='"  . $this->userid ."' and password='".$this->password . "'";
            
           /** @method  dbquery() get $conn value */
            $this->result = dbquery($conn,$sql);  
        }
        
        if($this->result)
        {
            $this->actionfun($this->result);
        }
        echo 'database server is down now';
    }
    /**
     *used to redirected on either homepage or loginpage
     *
     *@param mixed[] $result
     *
     *@return void 
    */
    public function actionfun($result)
    {
        if($result->num_rows > 0)
            {
                $_SESSION["user"]=$this->userid;
                header("Location:HomePage.php");
               // echo 'you have logged in';
            }
        else
            {
                $_SESSION["err_msg"]="userid/password is not correct !!!!";
                header("Location:LoginPage.php");
            }
    }
    
}