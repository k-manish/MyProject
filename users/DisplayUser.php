<?php
require_once(__DIR__ .'/../Lib/ShowUser.php');
require_once(__DIR__.'/../Lib/CheckServer.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <?php
            $site="http://maxcdn.bootstrapcdn.com";
            $port=80;
            $check=statweb($site,$port);
            if(!$check)
            {
                echo '<link rel="stylesheet" href="http:// '.$_SERVER['HTTP_HOST'].
                '/MyProject/Assets/vendor/bootstrap-3.3.7/css/bootstrap.min.css';
            }
        ?>
            
       
    </head>
    <body>
        <div class="container">
            <h3>Users Added by You.....</h3>
            <div class="row">
                <div class="col-sm-4" style="text-decoration: underline"><b>Name</b></div>
                <div class="col-sm-4" style="text-decoration: underline"><b>Email-id</b></div>
                <div class="col-sm-4" style="text-decoration: underline"><b>mobile</b></div>
            </div>
            <?php
                $c=new ShowUser();  
                $res=$c->show(dbname);
                if(!empty($res)){
                    while($rows=$res->fetch_assoc())  //getting data row-by-row
                    {
                        echo '<div class="row">';
                        echo '<div class="col-sm-4">';
                        echo $rows["name"];
                        echo '</div>';
                        echo '<div class="col-sm-4">';
                        echo $rows["mail_id"];
                        echo '</div>';
                        echo '<div class="col-sm-4">';
                        echo $rows["mobile"];
                        echo '</div>';
                        echo '</div>';          
                    }
                }
            ?>
        </div>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <?php
            if(!$check)
            {
                echo '<link rel="stylesheet" href="http:// '.$_SERVER['HTTP_HOST'].
                '/MyProject/Assets/vendor/bootstrap-3.3.7/js/bootstrap.min.js';
            }
        ?>
    </body>
</html>