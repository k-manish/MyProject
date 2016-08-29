<?php
/**
* File Name :CSignUp.php
* File Path :http://localhost/MyProject/users/
* Author :Manish Kumar
* Date of creation :29/8/2016
* Comments if any : this file is used to add a user added by antoher user or the user itself.
*
*/
?>

<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'].'/MyProject/Lib/DbConnection.php');
class SignUp
{
    /** @var string $name name of user.
     * @var  string $mail  email-id of user.
     * @var  string  $mobile  mobile number of user.
     */
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
    
    /**
     *
     *check user is logeed in or not and call either foruseraddition or forsignup method 
     *@return void
     */
    function store()
    {
        $conn=connectdb("demodb");
        if($_SESSION['user']){
            $this->foruseraddition($conn);
        }
        else{
            $this->forsignup($conn);
        }
    }
        
        
    /**
     *take user detail and add into database if user mail-id is not present already.
     *@return void
     */
    public function foruseraddition($conn)
    {
        $sql="insert into user_detail values
                    ('" . $this->name ."','" . $this->mail ."','" .$this->mobile ."','" .$_SESSION['user'] ."');";
        if($conn->query($sql)===TRUE)
        {
            $_SESSION['addition']="user has been added successfully";
        }
        else{
            $_SESSION['addition']="user is already present";
        }
        header('Location:homepage.php');
    }
    
    /**
     *take user detail and add into database if user mail-id is not present already.
     *@return void
     */
    public function forsignup($conn)
    {
        $sql="insert into user_detail(name,mail_id,mobile) values
                    ('" . $this->name ."','" . $this->mail ."','" .$this->mobile ."');";
                    
        if($conn->query($sql)===TRUE){
            $_SESSION["err_msg"]="you have been registered and password has been sent to your mail";
        }
        else{
            $_SESSION["err_msg"]="Email-id is alreay registered";
        }
        
        header('Location:LoginPage.php');
    }
}

if(isset($_GET["name"]))
{
    $obj=new SignUp();
    $obj->setdata();
    $obj->check();
}
?>