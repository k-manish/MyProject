<?php
session_start();

if(!(isset($_SESSION["user"])))
 {
    $_SESSION["err_msg"]="please login first";
    header("Location:LoginPage.php");
    exit;
}
else{
    echo "Hi " .$_SESSION["user"];
}
?>
<!DOCTYPE html>
<html>
   <head>
      <title>HomePage</title>
      <link rel="stylesheet" type="text/css"
            href="<?php echo 'http://' .$_SERVER['HTTP_HOST'].'/MyProject/Assets/css/CssHome.css'; ?>" >
   </head>
   <body>
      <div id="homediv1">
         <span id="homespan1">
            <form action="CLogOut.php" method="post" onsubmit="return logout();">
               <input type="submit" id="logout" value="Logout">
            </form>
         </span>
      </div>
      <div id="homediv2">
         <h1>This is your home page</h1> 
      </div>
       
       <script src="<?php echo 'http://' .$_SERVER['HTTP_HOST'].'/MyProject/Assets/js/LogOut.js'; ?>"></script>
    </body>
</html>
    