<?php
/**
* File Name :LoginPage.php
* File Path :http://localhost/MyProject/users/
* Author :Manish Kumar
* Date of creation :29/8/2016
* Comments if any : this page is used to login the user.
*           it also provide the link to signup for a new user and resetting password. 
* 
*/
?>
<?php
session_start();
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
            <p id="errline" >
                <?php require_once($_SERVER['DOCUMENT_ROOT'].'/MyProject/Lib/ErrorLogin.php'); ?>
                <span style="display: none">please provide correct username/password</span>
            </p>
            
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
                        <td style="padding-right: 0"><a href="https://www.google.com" >forget password</a></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
    
</html>
            