<?php
/**
 *File Name :CLoginPage.php
* File Path :http://localhost/MyProject/users
* Author :Manish Kumar
* Date of creation :30/8/2016
* Comments if any : this page verify the userid  and password.
*/

require_once(__DIR__.'/../Lib/CLoginPage.php');
$c=new Login(); //object creation of file /lib/CLoginPage.php
$c->verify();
