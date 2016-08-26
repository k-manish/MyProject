<!DOCTYPE html>
<html>
    <head>
        <title>signnup</title>
        <link rel="stylesheet" type="text/css" 
               href=" <?php echo 'http://' .$_SERVER['HTTP_HOST'].'/MyProject/Assets/css/CssSign.css'; ?>" >
    </head>
    <body style="Background-color: rgb(100,170,150)">
        
        <div id="heading" class="form1">
            <h2> SignUp YourSelf....</h2>
        </div>
        
        <form id="signform" class="form1" onsubmit="return checkfun();" action="CSignUp.php" method="get" >
            <table style="border-bottom: 1px solid black ; width:70%" >
                <tr class="info" >    
                    <th class="info1" height="50">Name</th>
                    <td class="info1"><input id="name" name="name" type="text" size="35" value=""></td>
                    <td id="name_err"></td>
                </tr>
                <tr class="info" height="50">
                    <th class="info1">E-mail</th>
                    <td class="info1"><input id="mail" name="mail" type="email" size="35" value=""></td>
                    <td id="mail_err"></td>
                </tr>
                <tr class="info" height="50">
                    <th>Mobile</th>
                    <td><input id="mobile" type="text" size="35" name="mobile" value=""></td>
                    <td id="mobile_err"></td>
                </tr>
                <tr class="info">
                    <td ><input type="submit" style="margin-left: 100%"></td>
                </tr>
            </table>
        </form>
        
        <script src="<?php echo 'http://' .$_SERVER['HTTP_HOST'].'/MyProject/Assets/js/SignUp.js'; ?>"></script>
        
    </body>
</html>
        