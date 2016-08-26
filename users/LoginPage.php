<?php
session_start();
if(isset($_SESSION["err_msg"]))
{
    echo $_SESSION["err_msg"];
    session_unset($_SESSION["err_msg"]);
}
if(isset($_GET['registered']) && $_GET['registered']==1)
{
    echo 'you have been registered and password has been sent to your mail';
}
if(isset($_GET['registered']) && $_GET['registered']==2)
{
    echo "<b>Email-id is alreay registered</b>";
}
?>
<!DOCTYPE html>
<html>
    
    <head>
        <title>LoginPage</title>
        <link rel="stylesheet" type="text/css"
              href="<?php echo 'http://' .$_SERVER['HTTP_HOST'].'/MyProject/Assets/css/CssLogin.css'; ?>" >
    </head>
    
    <body style="background-color: rgb(50,100,70)">
        <div id="firstdiv">
            <p id="errline" ><span style="display: none">please provide correct username/password</span></p>
            <form id="loginform" action="CLoginPage.php" method="post" >
                <table id="logtable" width="50%" style="padding: 15px">
                        <th>User-Id:-</th>
                        <td><input type="text" id="username" name="username" autocomplete></td>
                    </tr>
                    <tr>
                        <th>Password:-</th>
                        <td><input type="password" id="pswd" name="pswd"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" id="submit" value="submit" style="margin-left: 60%"></td>
                    </tr>
                    <tr>
                        <td><a href="<?php echo 'http://' .$_SERVER['HTTP_HOST'].'/MyProject/users/SignUp.php'; ?>" target=_blank>singup</a></td>
                        <td><a href="https://www.google.com">forget password</a></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
    
</html>
            