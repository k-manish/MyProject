<?php
/**
* File Name :DbConnection.php
* File Path :http://localhost/MyProject/Lib/
* Author :Manish Kumar
* Date of creation :29/8/2016
* Comments if any : this is used for connecting database, doing sql query and after that retyrn the result.
*
*/

require_once(__DIR__.'/../config/Constants.php');

/**
* function for connecting database and return connection value
*/
/** @ param string $dbname  name of schema.
    @return $conn 
*/
function connectdb($dbname)
{
    $conn=new mysqli(server,user,dbpassword,$dbname);
    return $conn; 
}

/** @ param string $dbname  name of schema. */
function createdb($dbname)
{
    $conn=new mysqli(server,user,dbpassword);
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

/**@param $conn
 * @param string $sql  sql instruction to be queried
 * @return $result   query result;
 */
function dbquery($conn,$sql)
{
    $result=$conn->query($sql);
    return $result;
}
