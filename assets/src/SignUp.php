<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/MyProject/config/dbconnection.php');
class SignUp
{
    protected $name;
    protected $mail;
    protected $mobile;
    
    function setdata()
    {
        $name=$_GET["name"];
        $mail=$_GET["mail"];
        $mobile=$_GET["mobile"];
    }
    function check()
    {
        if($this->name=="")
        {
            echo 'name error';  //want redirect form page
            exit;
        }
        if($this->mail=="")
        {
            echo 'mail error';
            exit;
        }
        if($this->mobile=="")
        {
            echo 'mobile error';
            exit;
        }
        store();
    }
    function store()
    {
        $conn=connectdb("demodb");
        $sql="insert into user_detail values($this->name,$this->mail,$this->mobile)";
        if($conn->query($sql)===TRUE){
            echo 'you have been signed up now';
        }
    }
    
}

if(isset($_GET["name"]))
{
    $obj=new SignUp();
    $obj->check();
}
?>

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
        <form id="signform" class="form1" action="SignUp.php" method="get">
            <table style="border-bottom: 1px solid black ; width:70%">
                <tr class="info" >    
                    <th class="info1" height="50">Name</th>
                    <td class="info1"><input id="name" name="name" type="text" size="35" value=""></td>
                </tr>
                <tr class="info" height="50">
                    <th class="info1">E-mail</th>
                    <td class="info1"><input id="mail" name="mail" type="email" size="35" value=""></td>
                </tr>
                <tr class="info" height="50">
                    <th>Mobile</th>
                    <td><input id="mobile" type="text" size="35" name="mobile" value=""></td>
                </tr>
                <tr class="info">
                    <td ><input type="submit" style="margin-left: 100%" onclick="checkfun();"></td>
                </tr>
            </table>
        </form>
        
        <script>
            function checkfun()
            {
                window.alert("vhhuibb");
            }
        </script>
        <script src="<?php echo 'http://' .$_SERVER['HTTP_HOST'].'/MyProject/Assets/js/SignUp.js'; ?>"></script>
    </body>
</html>
        