<?php
/**
* File Name :Header.php
* File Path :http://localhost/MyProject/Lib/
* Author :Manish Kumar
* Date of creation :29/8/2016
* Comments if any : this page is added in homepage ,showuser,userprofile pages.
*        it is present at top of pages and keep some url link about showing user-profile, other users
*       added by the user. this page also contains the logout button.
*
*/
?>

<!DOCTYPE html>
<html lang="en">
<html>
    <head>
       <link rel="stylesheet" type="text/css"
             href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/MyProject/Assets/css/CssHeader.css'; ?>" >
    </head>
    
    <body>
        <div id="homediv1">
            <a href="UserProfile.php" target=_self>MyProfile</a>
            <a href="AddUser.php" target=_self>Add_user</a>
            <a href="DisplayUser.php" target=_self>user_list</a>
            <span id="homespan1">
                <form action="CLogOut.php" method="post">
                    <input type="submit" id="logout" value="Logout">
                </form>
            </span>
        </div>
    </body>
</html>