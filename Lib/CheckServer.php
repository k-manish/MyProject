<?php
/**
* File Name :CheckServer.php
* File Path :http://localhost/MyProject/Lib/
* Author :Manish Kumar
* Date of creation :30/8/2016
* Comments if any : check server  status .
*
*

*@param string $site
*@param int    $port
*@return boolean
*/

function statWeb($site, $port){	
$fp = @fsockopen($site, $port, $errno, $errstr, 2);
return (!$fp);
}