<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <!-- nav -->
    <header style="height: 10vh" id="bars">
        <nav id="nav">
            <div class="logo">
                <img src="./icons/scci logo.png" alt="" />
            </div>
            <div class="Darkicons">
                <img src="./icons/adjust-dark.svg" alt="" />
            </div>
            <div class="listIcon">
                <img id="list_icon" src="./icons/scci logo.png" alt="" />
            </div>
        </nav>
        <ul id="lists">
            <li><a href="home.html">Home</a></li>
            <li><a href="crew.php">Crew</a></li>
            <li><a href="workshops.php">Workshops</a></li>
            <li><a href="gallery.php">Gallery</a></li>

            <?php if (!isset($_SESSION['user_id'])) { ?>
                <li><a href="login.php">Login In</a></li>
            <?php } else { ?>
                <li><a href="profile.php">Profile</a></li>
            <?php } ?>
            <li><a href="about.php">About Us</a></li>
            <div class="contactUs">
                <li><a href="contact.php">Contact Us</a></li>
            </div>
        </ul>
    </header>

</body>

</html>