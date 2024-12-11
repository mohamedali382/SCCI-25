<?php
$localhost = "localhost";
$username = "root";
$password = "";
// han8er el esm bta2 el db lma na5odha 
$database ="sportigo";
$connect = mysqli_connect($localhost, $username ,$password , $database); 
if($connect){
    // echo"connected" ;
}
session_start();
ob_start();
if(isset($_POST['logout']))
{
    session_unset();
    session_destroy();
    header("location:login.php");
}
    error_reporting(0);

?>
