<?php
/**
* File Name :UserProfile.php
* File Path :http://localhost/MyProject/users/
* Author :Manish Kumar
* Date of creation :29/8/2016
* Comments if any : It shows profile detail of loged in user.
*
*
*/
session_start();
require_once(__DIR__.'/../Lib/UserCheck.php');
require_once(__DIR__.'/../Lib/DbConnection.php');
require_once(__DIR__.'/../Lib/Header.php');


        $conn=connectdb(dbname);
        
        $sql= "select name,mail_id,mobile from user_detail where mail_id='" .$_SESSION['user'] ."'";
        $result=dbquery($conn,$sql);
        
        $row=$result->fetch_array(MYSQLI_NUM);
        echo '<div style="background-color:blue;margin:20%">';
        $user=array("name:- ","E-mail:- ","mobile:- ");
        for($i=0;$i<3;$i++){
            echo '<p>';
            echo $user[$i];
            echo $row[$i];
            echo '</p>';
        }
        echo '</div>';
?>