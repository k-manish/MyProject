<?php
require_once('ShowUser.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                $res=$c->show("demodb");
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
            ?>
        </div>
    </body>
</html>