<?php
function connectdb($dbname)
{
    $conn=new mysqli("localhost","root","",$dbname);
    if($conn->connect_error)
    {
        echo 'connection failed';
        exit;
    }
    else
    {
        return $conn;
    }  
}

function createdb($dbname)
{
    $conn=new mysqli("localhost","root","");
    if($conn->connect_error)
    {
        echo "connection failed";
        exit;
    }
    else{
        $sql="create database ".$dbname;
        if($conn->query($sql)===TRUE)
        {
            return $conn;
        }
        else{
            echo 'database creation failed';
        }
    }
}