<?php
/**
* File Name :ErrorLogin.php
* File Path :http://localhost/MyProject/Lib/
* Author :Manish Kumar
* Date of creation :29/8/2016
* Comments if any : used to show error message.
*
*/
if(isset($_SESSION["err_msg"]))
{
    echo $_SESSION["err_msg"];
    session_unset($_SESSION["err_msg"]);
}
    