<?php
/**
* File Name :CLogOut.php
* File Path :http://localhost/MyProject/users/
* Author :Manish Kumar
* Date of creation :29/8/2016
* Comments if any : this page is used to make user logout.
*
*/
?>

<?php
session_start();
session_destroy();
header("Location:LoginPage.php");
exit;
?>