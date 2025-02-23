<?php 
include('connection.php');
include('Insert.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../bootstrap/CSS bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../CSS/contact.css">
  <link rel="stylesheet" href="../main.css">
  <link rel="stylesheet" href="../webfonts/">
  <link rel="stylesheet" href="../CSS/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Literata:ital,opsz,wght@0,7..72,200..900;1,7..72,200..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Literata:ital,opsz,wght@0,7..72,200..900;1,7..72,200..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/Contact.css" />
  </head>
  <body>
    <header style="height: 10vh" id="bars">
      <nav id="nav">
        <div class="logo">
          <img src="../Images/scci logo.png" alt="" />
        </div>
        <div class="Darkicons">
          <img src="../icons/adjust-dark.svg" alt="" />
        </div>
        <div class="listIcon">
          <img id="list_icon" src="../icons/bars.svg" alt="" />
        </div>
      </nav>
      <ul id="lists">
        <li><a href="#">Home</a></li>
        <li><a href="#">Crew</a></li>
        <li><a href="#">Workshops</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Login In</a></li>
        <li><a href="#">About Us</a></li>
        <div class="contactUs">
          <li><a href="#">Contact Us</a></li>
        </div>
      </ul>
    </header>


    <section class="contact position-relative d-flex flex-column align-items-center justify-content-center ">
   <div class="black-layer position-absolute top-0 bottom-0 start-0 end-0"></div>
   </section>


   <section>
    <div class="container"> 
      <div class="section-contentt text-center ">
        <h2 class="pt-5 titlee text-capitalize"> <span>contact info</span></h2>
      </div>
      <div class="row p-4 mt-5 mb-5">
        <div class="col-md-4 d-flex flex-column justify-content-between align-items-center">
          <i class="fa-solid fa-location-dot mb-3 fs-1 font-red" style="color: #c52525;"></i>
          <h5>Address</h5>
          <img src="../Images/address02.png" style="width: 50px;height: 50px" >
          <p class="font-p-style mt-2">267 El Dokki street, Giza</p>


        </div>

        <div class="col-md-4 d-flex flex-column justify-content-between align-items-center">
          <i class="fa-solid fa-phone-volume mb-3 fs-1 font-blue" style="color: #c52525;"></i>
          <h5>Call Us</h5>
          <img src="../Images/call-us.jpg" style="width: 50px;height: 50px" >
          <p class="font-p-style mt-2">01129351876</p>
        </div>
        
        <div class="col-md-4 d-flex flex-column justify-content-between align-items-center">
          <i class="fa-solid fa-envelope mb-3 fs-1 font-blue" style="color: #c52525;"></i>
          <h5>Email</h5>
          <img src="../Images/email.jpg" style="width: 50px;height: 50px" >
          <p class="font-p-style mt-2">SCCI25@gmail.com</p>
        </div>
      </div>
    </div>
    </div>
  </section>




  <?php if (!empty($message)): ?>
        <div id="notification" class="<?php echo $run_insert ? '' : 'error'; ?>">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

  <section style="background-color: #f9f9f9;">
    <div class="container">
      <div class="section-contentt text-center ">
        <h2 class="pt-5 titlee text-capitalize"> <span>get in touch</span></h2>
      </div>
      <form id="form" method="post">
        <div class="row mt-5 mb-md-5">


          <div class="mb-3 col-md-4">
            <input type="text" id="uname" name="UserName" class="form-control border-0 border-bottom"
              id="exampleFormControlInput1" placeholder="Name">
            <span style="color: red; padding-left: 11px;" id="name_error"></span>
          </div>
  
          <div class="mb-3 col-md-4">
            <input type="email" id="email" name="UserEmail" class="form-control border-0 border-bottom" placeholder="Email">
            <span style="color: red; padding-left: 11px;" id="email_error"></span>
          </div>

          <div class="mb-3 col-md-4">
            
            <input type="dr" id="UserWorkshop" name="UserWorkshop" class="form-control border-0 border-bottom"
              placeholder="UserWorkshop">
            <span style="color: red; padding-left: 11px;" id="subject_error"></span>
          </div>
        </div>
         


        <div class="mb-3">
          <textarea id="message" class="form-control border-0 border-bottom" placeholder="Enter Your Message" rows="7"
            name="Message"></textarea>
            
          <span style="color: red; padding-left: 11px;" id="message_error"></span>
        </div>

        <div class=" col-2">
          <button type="submit" name="submit" style="background-color: #00005B; color: white;" class="btn mb-5 mt-2 text-capitalize  btn-Subscribe rounded-pill btn-lg">Send
            </button>
        </div>

      </form>
    </div>
  </section>
    
    <footer>
        <div class="description">
            <article>
                <a class="logo" href="#">
                    <img src="../images/scci logo.png" alt="alt">
                    <h2>SCCI</h2>
                </a>
                <p>SCCI Is An Abbreviation For Student's Conference For Communication And Information, Which Helps You In Bridging The Gap Between The Technical Life And The Practical Life In The Market Place. You Can Know More About Our Organization Right Here.</p>
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
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Crew</a></li>
                    <li><a href="#">Workshops</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Login In</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="linkHeadLine">
                <h1>CONTACT</h1>
                <ul>
                    <li><a href="#"><img src="../icons/house.svg"> DOKKI, GIZA, EGYPT</a></li>
                    <li><a href="#"><img src="../icons/mail.svg" alt=""> SCCI@Example.Com</a></li>
                </ul>
            </div>
            
        </div>
        <div class="socialMedia">
            <div class="icons">
                <ul>
                    <li><img src="../icons/facebook.svg" alt=""></li>
                    <li><img src="../icons/instagram.svg" alt=""></li>
                    <li><img src="../icons/youtube.svg" alt=""></li>
                    <li><img src="../icons/tiktok.svg" alt=""></li>
                </ul>
            </div>
            <p>© 2025 Copyright: SCCI'25 IT COMMITTEE</p>
        </div>
    </footer>
    <script src="../JS/main.js"></script>
    <script src="../JS/contact.js"></script>
    
    <style>
#notification {
  display: none; 
  position: fixed;
  top: 10%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #4CAF50; 
  color: white;
  padding: 20px 30px;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  font-size: 18px;
  font-family: Arial, sans-serif;
  text-align: center;
  z-index: 1000;
}

    </style>
  </body>

</html>
