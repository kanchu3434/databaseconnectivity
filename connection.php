<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="mcai";
$conn= mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    echo"Connection OK";
}
else{
    echo"Connection Failed",mysqli_connect_error();
}
?>