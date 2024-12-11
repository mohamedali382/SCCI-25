<?php
include 'nav.php';
// 3l4an my5o44 mn url w hwa msh 3amel login
if (!isset($_SESSION['user_id'])) {
    header("location:login.php");
}

$user_id = $_SESSION['user_id'];
// select attendance
$select = "SELECT * FROM `attendance` WHERE user_id='$user_id' ";
$run_select = mysqli_query($connect, $select);
$fetch = mysqli_fetch_assoc($run_select);
// select data user
$select_user = "SELECT * FROM `users` WHERE user_id='$user_id' ";
$run_select_user = mysqli_query($connect, $select_user);
$fetch_user = mysqli_fetch_assoc($run_select_user);
// update_photo
if (isset($_POST["save"]) && isset($_FILES['image']['name'])) {
    $image = basename($_FILES['image']['name']);
    $tmp_name = $_FILES['image']['tmp_name'];
    //  unique file name
    $fileExt = pathinfo($image, PATHINFO_EXTENSION);
    $newFileName = "user_" . $user_id . "_" . time() . "." . $fileExt;
    $uploadPath = "./images/" . $newFileName;


    move_uploaded_file($tmp_name, $uploadPath);
    $update = "UPDATE `users` SET `user_image`='$newFileName' WHERE user_id='$user_id'";
    mysqli_query($connect, $update);
    header("Location: profile.php");


}


?>
<!DOCTYPE html>
<div lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- links -->
        <script src="https://kit.fontawesome.com/567d267f56.js" crossorigin="anonymous"></script>
        <link rel="icon" href="./images/SCCI.png" type="image/png">
        <link rel="stylesheet" href="./css/profile.css">
        <link rel="stylesheet" href="./css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700" rel="stylesheet">
        <title>profile</title>
    </head>

    <body>
        <!-- card info -->
        <form action="" method="POST" enctype="multipart/form-data">
            <?php foreach ($run_select_user as $data) { ?>
                <div class="card">
                    <div class="profile">
                        <div class="profile__img">

                            <img src="./images/<?php echo $data['user_image'] ?>" alt="profile_photo" class="profile">
                        </div>


                        <div class="upload-icon">
                            <input type="file" id="photoInput" name="image" accept="image/*" style="display: none;">
                            <button type="button" id="uploadTrigger">
                                <i class="fas fa-camera"></i>
                            </button>
                            <button type="submit" class="save-btn" name="save">Save</button>
                        </div>


                        <div class="profile__info">
                            <!-- han3ml echo le el name/workshop hna lma na5od el database -->
                            <h1 class="cssanimation typing " id="spicialstyle">Mahmoud Allam</h1>
                            <h3 class="cssanimation typing">Web Devoloper</h3>
                        </div>
                    </div>
                </div>
    </div>
<?php } ?>

</form>

<!----attendance table -->
<h1 class="title_courses">Your attendance</h1>

<section>
    <form action="" method="post">
        <table>
            <thead>
                <tr>
                    <th>Session</th>
                    <th>Attendance</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($run_select as $row) {
                    if ($row['attendance'] == 1) {
                        $attendanceClass = 'attendance-present';
                        $attendanceText = 'Present';
                    } else {
                        $attendanceClass = 'attendance-absent';
                        $attendanceText = 'Absent';
                    } ?>
                    <tr>
                        <td><?php echo $row['session_name']; ?></td>
                        <td class="attendance <?php echo $attendanceClass; ?>">
                            <?php echo $attendanceText; ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php if (isset($_SESSION['user_id'])) { ?>
            <button name="logout" class="logout-btn" type="submit">
                Logout
            </button>
        <?php } ?>
    </form>
</section>


<!--links Section -->
<h1 class="title_courses">Your Courses</h1>
<section class="cards-section">
    <!-- han3m foreachloop hna mn el db lma tegy w hatb2a card wa7da bs  -->

    <div class="card-item">
        <h3>php</h3>
        <p>Explore more about Resource 1.</p>
        <a href="https://example.com/link1">Go to Resource</a>
    </div>


    <div class="card-item">
        <h3>JS</h3>
        <p>Learn about Resource 2 in detail.</p>
        <a href="#" target="_blank">Go to Resource</a>
    </div>


    <div class="card-item">
        <h3>CSS</h3>
        <p>Find information about Resource 3.</p>
        <a href="#" target="_blank">Go to Resource</a>
    </div>

    <div class="card-item">
        <h3>node JS</h3>
        <p>Find information about Resource 3.</p>
        <a href="#" target="_blank">Go to Resource</a>
    </div>

    <div class="card-item">
        <h3>react</h3>
        <p>Find information about Resource 3.</p>
        <a href="#" target="_blank">Go to Resource</a>
    </div>

    <div class="card-item">
        <h3>html</h3>
        <p>Find information about Resource 3.</p>
        <a href="#" target="_blank">Go to Resource</a>
    </div>

    <div class="card-item">
        <h3>node js part 2</h3>
        <p>Find information about Resource 3.</p>
        <a href="#" target="_blank">Go to Resource</a>
    </div>

    <div class="card-item">
        <h3>js part 2</h3>
        <p>Find information about Resource 3.</p>
        <a href="#" target="_blank">Go to Resource</a>
    </div>

</section>

<!-- footer -->

<footer>
    <div class="description">
        <article>
            <a class="logo" href="home.php">
                <img src="./icons/scci logo.png" alt="alt">
                <h2>SCCI</h2>
            </a>
            <p>SCCI Is An Abbreviation For Student's Conference For Communication And Information, Which Helps You In
                Bridging The Gap Between The Technical Life And The Practical Life In The Market Place. You Can Know
                More About Our Organization Right Here.</p>
        </article>
    </div>
    <div class="links">
        <div class="linkHeadLine">
            <h1>COMMITTEES</h1>
            <ul>
                <li><a href="#">AC</a></li>
                <li><a href="#">IT</a></li>
                <li><a href="#">SMM</a></li>
                <li><a href="#">MP</a></li>
                <li><a href="#">DD</a></li>
                <li><a href="#">MC</a></li>
            </ul>
        </div>
        <div class="linkHeadLine">
            <h1>COMMITTEES</h1>
            <ul>
                <li><a href="#">HR</a></li>
                <li><a href="#">PR</a></li>
                <li><a href="#">CR</a></li>
                <li><a href="#">LOGISTICS</a></li>
                <li><a href="#">BD</a></li>
            </ul>
        </div>
        <div class="linkHeadLine">
            <h1>USEFUL LINKS</h1>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="crew.php">Crew</a></li>
                <li><a href="workshops.php">Workshops</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="login.php">login</a></li>
                <li><a href="about_us.php">About Us</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
            </ul>
        </div>
        <div class="linkHeadLine">
            <h1>CONTACT</h1>
            <ul>
                <li><a href="#"><img src="./icons/house.svg"> DOKKI, GIZA, EGYPT</a></li>
                <li><a href="#"><img src="./icons/mail.svg" alt=""> SCCI@Example.Com</a></li>
            </ul>
        </div>

    </div>
    <div class="socialMedia">
        <div class="icons">
            <ul>
                <li><img src="./icons/facebook.svg" alt=""></li>
                <li><img src="./icons/instagram.svg" alt=""></li>
                <li><img src="./icons/youtube.svg" alt=""></li>
                <li><img src="./icons/tiktok.svg" alt=""></li>
            </ul>
        </div>
        <p>© 2025 Copyright: SCCI'25 IT COMMITTEE</p>
    </div>
</footer>

</body>
<script src="./js/main.js"></script>
<script src="./js/profile.js"></script>

</html>