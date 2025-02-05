<?php
$localhost = "localhost";
$username = "root";
$password = "";
// han8er el esm bta2 el db lma na5odha 
$database ="scci'25";
$connect = mysqli_connect($localhost, $username ,$password , $database); 
if($connect){
    // echo"connected" ;
}
if (session_status() == PHP_SESSION_NONE) {
    session_start();  // Start the session only if it's not started yet
}
ob_start();
if(isset($_POST['logout']))
{
    session_unset();
    session_destroy();
    header("location:login.php");
}
    // error_reporting(0);

?>
