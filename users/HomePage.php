<?php
/**
* File Name :Homepage.php
* File Path :http://localhost/Myproject/users/
* Author :Manish Kumar
* Date of creation :29/08/2016
* Comments if any : this is home page where user is redirected if user-id and password is correct.
*
*/
session_start();
require_once(__DIR__.'/../Lib/UserCheck.php');
require_once(__DIR__.'/../Lib/Header.php'); //include header file in page
?>

<!DOCTYPE html>
<html>
   <head>
      <title>HomePage</title>
      <link rel="stylesheet" type="text/css"
            href="<?php echo 'http://' .__DIR__.'/../Assets/css/CssHome.css'; ?>" >
   </head>
   <body>
      
      <?php
      if(isset($_SESSION['addition']))
      {
         echo $_SESSION['addition'];
      }
      ?>
      
   </body>
</html>
    