<?php
$server="localhost";
$user   ="root";
$password ="";
$db   ="login";

//db connection
$conn =mysqli_connect($server,$user,$password,$db);

//check connection status
if(mysqli_connect_errno()){
    echo "Connection failed".mysqli_connect_error();
}
?>