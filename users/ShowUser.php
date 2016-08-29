<?php
/**
* File Name :ShowUser.php
* File Path :http://localhost/MyProject/users/
* Author :Manish Kumar
* Date of creation :29/8/2016
* Comments if any : this page will show userlist added by the user himself.
*
*/
?>


<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'].'/MyProject/config/Constants.php');
require_once(basedir.'/MyProject/Lib/UserCheck.php');
require_once(basedir.'/MyProject/Lib/Header.php');
require_once(basedir.'/MyProject/Lib/DbConnection.php');

class ShowUser
{
    /**
     *@param string  $dbaname
     *@return mixed[]
     */
    public function show($dbname)
    {
        $conn=connectdb($dbname);
        $sql="select name,mail_id,mobile from user_detail where refered_by='".$_SESSION['user'] ."';";
        $result=dbquery($conn,$sql);
        return $result;
    }
}

?>