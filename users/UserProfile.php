<?php
/**
* File Name :UserProfile.php
* File Path :http://localhost/MyProject/users/
* Author :Manish Kumar
* Date of creation :29/8/2016
* Comments if any : It shows profile detail of loged in user.
*
* @var string  $name
* @var string  $mail
* @var string  $mobile
*
*/
?>
<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'].'/MyProject/config/Constants.php');
require_once(basedir.'/MyProject/Lib/UserCheck.php');
require_once(basedir.'/MyProject/Lib/DbConnection.php');
require_once(basedir.'/MyProject/Lib/DbConnection.php');
require_once(basedir.'/MyProject/Lib/Header.php');

class UserProfile
{
    /** @var string  $name
    * @var string  $mail
    * @var string  $mobile
    */
    protected $name;
    protected $mail;
    protected $mobile;
    
    public function __construct()
    {
        $this->mail=$_SESSION["user"];
    }
    
    /**
    * Used to get deatil of something
    *
    * @param String $dbname - Name of database schema
    * @return void
    */
    public function getDetail($dbname)
    {
        $conn=connectdb($dbname);
        $sql= "select name,mail_id,mobile from user_detail where mail_id='" .$this->mail ."'";
        $result=dbquery($conn,$sql);
        $row=$result->fetch_array(MYSQLI_NUM);
        echo '<div
            style="background-color:blue;margin:20%">';
        $user=array("name:- ","E-mail:- ","mobile:- ");
        for($i=0;$i<3;$i++){
            echo '<p>';
            echo $user[$i];
            echo $row[$i];
            echo '</p>';
        }
       echo '</div>';
    }
    
}
$c=new UserProfile();
$c->getDetail("demodb");
?>