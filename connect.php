<?php

$hName='localhost'; // host name
$uName='root';   // database user name
$password='';   // database password
$dbName = 'test'; // database name
$tblName = 'products';
$con = mysqli_connect($hName,$uName,$password,"$dbName");

if(!$con){
    die('Could not Connect MySql Server:' .mysql_error());
}
?>