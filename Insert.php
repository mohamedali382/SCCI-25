<?php 
include('connection.php');

if (isset($_SESSION['UserId']))
{
    $UserId = $_SESSION['UserId'] ;
}
// else
// {
//     echo 'please login first';
// }


if (isset($_POST['submit'])){
    $UserName = $_POST['Name'];
    $phone = $_POST['phone'];
    $UserEmail = $_POST['Email'];
    $Message = $_POST['Message'];

    $insert = "INSERT INTO `contact` (`Id`, `Name`, `phone`, `Email`, `Message`) 
                            VALUES   (NULL, '$UserName', '$phone', '$UserEmail', '$Message')";

    $run_insert = mysqli_query($connect, $insert);
    if($run_insert) $message = 'Your message has been submitted successfully.';
    else echo'failed';
}
?>
