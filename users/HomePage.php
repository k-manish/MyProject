<?php
/**
* File Name :Homepage.php
* File Path :http://localhost/Myproject/users/
* Author :Manish Kumar
* Date of creation :29/08/2016
* Comments if any : this is home page where user is redirected if user-id and password is correct.
*
*/
?>
<!--
this is the first page which will be displayed first after succesfull login.
-->
<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'].'/MyProject/Lib/UserCheck.php');
?>

<!DOCTYPE html>
<html>
   <head>
      <title>HomePage</title>
      <link rel="stylesheet" type="text/css"
            href="<?php echo 'http://' .$_SERVER['HTTP_HOST'].'/MyProject/Assets/css/CssHome.css'; ?>" >
   </head>
   <body>
      <?php
      require_once($_SERVER['DOCUMENT_ROOT'].'/MyProject/Lib/Header.php'); //include header file in page
      if(isset($_SESSION['addition']))
      {
         echo $_SESSION['addition'];
      }
      ?>
      <script src="<?php echo 'http://' .$_SERVER['HTTP_HOST'].'/MyProject/Assets/js/LogOut.js'; ?>"></script>
   </body>
</html>
    