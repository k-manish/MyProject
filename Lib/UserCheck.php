<?php
/**
* File Name :UserCheck.php
* File Path :http://localhost/MyProject/Lib/
* Author :Manish Kumar
* Date of creation :29/8/2016
* Comments if any : check user is logged in or not.
*
*/
?>
<?php
if(!(isset($_SESSION["user"])))
 {
    $_SESSION["err_msg"]="please login first";
    header("Location:LoginPage.php");
    exit;
}
?>