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
    $UserId = 1;
    $UserName = $_POST['UserName'];
    $UserWorkshop = $_POST['UserWorkshop'];
    $UserEmail = $_POST['UserEmail'];
    $Message = $_POST['Message'];

    $insert = "INSERT INTO `contact` (`Id`,`UserId`, `UserName`, `UserWorkshop`, `UserEmail`, `Message`) 
                            VALUES   (NULL,$UserId, '$UserName', '$UserWorkshop', '$UserEmail', '$Message')";

    $run_insert = mysqli_query($connect, $insert);
    if($run_insert) $message = 'Your message has been submitted successfully.';
    else echo'failed';
}
?>
