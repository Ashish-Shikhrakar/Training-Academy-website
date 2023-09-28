<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="icon" type="image/x-icon" href="photo/favicon.ico">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Notable&display=swap" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&family=Quicksand&display=swap" rel="stylesheet">
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">

  <style>
    form{
    margin: 57px;
    height: fit-content;
   
  }
  .input-field{
    width: 250px;
    height: 35px;
    margin-bottom: 20px;
    padding-left: 12px;
    padding-right: 12px;
    border:1px solid #777;
    outline: none;
    align-items: center;
    border-radius: 5px;

}

.textarea-field{
    height: 133px;
    padding-top: 10px;
    align-items: center;
    height: 95px;
}
.btn-form{
    margin-bottom: 10px;
    padding: 14px 28px;
    background-color: #A7A44E;
    border: none;
    font-family: 'Inter', sans-serif;
    color: #fff;
    cursor: pointer;
    width: 50%;
    padding: 10px;
    border-radius: 5px;
   
  }
  </style>
</head>

<body>
  <div class="wrapper">

  </div>
  <div class="menubar" style="background-image: none; height: 65px;">
    <div id="navbar" style="transition: 0s;">
      <div class="logo" style="display: inline; float: left;">
      <a href="index.php">
          <img src="photo/logo.png">
          </a>
      </div>

      <div class="nav">
        <ul>
          <a href="index.php">
            <li class="menubarItems">Home</li>
          </a>
          <a href="about.html">
            <li class="menubarItems">About Us</li>
          </a>
          <a href="notice.html">
            <li class="menubarItems">Notice</li>
          </a>
          <a href="schedule.html">
            <li class="menubarItems">Schedule</li>
          </a>
          <a href="contact_form.php">
            <li class="menubarItems">Contact</li>
          </a>
        </ul>
      </div>
    </div>
  </div>
  <div class="bannersec">
    <div class="titlesec">
      <p style="font-family: 'Notable', sans-serif;">Contact us</p>
      <p class="servicetext" style="text-align: center; float: none; margin-top: 60px;">Provide us your feedback and
        queries so we can help you or make amends</p>
    </div>
  </div>

  <section class="about">
    <div class="container" style="margin: 0 auto; top: 0px;">
      <p class="servicetitle" style="text-align: center;">Get In Touch</p>
    </div>
  </section>
  <div class="container" style="top: 10px;">
    <p class="servicetext" style="text-align: center; float: none;"><i>"We are here to help you. Please feel free to
        leave us a message <br>
        on how we could assist you".</i></p>
  </div>



  <div class="container">
    <div class="contact-box">
      <form method="POST" action="">
        <!-- form method="POST" action="userfeedback.php" -->
        <p class="servicetitle" style="text-align: center;font-family: poppins,bold;">Contact Form</p>
        <input type="text" class="input-field" required name="u_name" placeholder="Name">
        <input type="text" class="input-field" required name="u_email" placeholder="Your e-mail address">
        <input type="text" class="input-field" required name="phone" placeholder="Enter phone no">
        <textarea type="text" required class="input-field textarea-field" name="u_message"
          placeholder="Message"></textarea>
        <input type="submit" value=" Send Message" name="save" class="btn-form">
      </form>
    </div>
  </div>


  <!-- <div class="contact-box">
    <form method="POST" action="">
      form method="POST" action="userfeedback.php" 
      <h2>Contact Form</h2>
      <input type="text" class="input-field" required name="u_name" placeholder="Name">
      <input type="text" class="input-field" required name="u_email" placeholder="Your e-mail address">
      <input type="text" class="input-field" required name="phone" placeholder="Enter phone no">
      <textarea type="text" required class="input-field textarea-field" name="u_message"
        placeholder="Message"></textarea>
      <input type="submit" value=" Send Message" name="save" class="btn">
    </form>
  </div> -->

<?php
/*
@include("dashboard/student/db_connection.php");
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'army_project';
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check for form submission

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['save'])) {
    $u_name = $_POST['u_name'];
    $u_email = $_POST['u_email'];
    $phone = $_POST['phone'];
    $u_message = $_POST['u_message'];


    // $stmt = $conn->prepare("INSERT INTO user_feedback (u_name,u_email,phone,u_message) VALUES (?, ?, ?, ?)");
    // $stmt->bind_param("ssis", $u_name, $u_email, $phone, $u_message);
    // // Execute query
    // if (! $stmt->execute()) {
    //     echo "Error : " . $stmt->error;
    // } 
    $insert = "INSERT INTO user_feedback(u_name,u_email,phone,u_message) VALUES ('$u_name', '$u_email', '$phone', '$u_message')";
    $query = mysqli_query($conn, $insert);
    if ($query) {
      ?>
      <script>
        swal({
          title: "submitted",
          text: "Data inserted!",
          icon: "success",
        });
      </script>
      <?php
    }
  }
  // Close the database connection
  // $stmt->close();
  // $conn->close();
}*/
?>

<div class="footer-clean">
      <footer>
        <div class="responsive-container-block">
          <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12" style="width:80%;">
            <div class="maps" style="position: relative; float: left;">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3534.4475013421393!2d85.31652587497275!3d27.641623228388042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb17e23effe8e7%3A0x59718c25400cd926!2sAim%20Gurkha%20Training%20Centre!5e0!3m2!1sen!2sus!4v1688035424975!5m2!1sen!2sus"
                width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; text-align: left;padding: 30px;">


              <div style="position: relative;">
                <h3 class="introtitle" style="text-align:left;padding-left: 0px;margin-left: 0px;">Services</h3>
                <ul style="text-align:left;">
                  <li><a href="#">Web design</a></li>
                  <li><a href="#">Development</a></li>
                  <li><a href="#">Hosting</a></li>
                </ul>

              </div>
              <div style="position: relative;">
                <h3 class="introtitle" style="text-align:left;padding-left: 0px;margin-left: 0px;">About</h3>
                <ul style="text-align:left;">
                  <li><a href="#">Company</a></li>
                  <li><a href="#">Team</a></li>
                  <li><a href="#">Legacy</a></li>
                </ul>
              </div>
              <div style="position: relative;">
                <h3 class="introtitle" style="text-align:left;padding-left: 0px;margin-left: 0px;">Careers</h3>
                <ul style="text-align:left;">
                  <li><a href="#">Job openings</a></li>
                  <li><a href="#">Employee success</a></li>
                  <li><a href="#">Benefits</a></li>
                </ul>
              </div>
              <div style="position: relative;">
                <h3 class="introtitle" style="text-align:left;padding-left: 0px;margin-left: 0px;">Aim Gurkha</h3>
                <ul style="text-align:left;">
                  <li><a href="#">Dholahity, Lalitpur</a></li>
                  <li><a href="#">aimgurkha@email.com.np</a></li>
                  <li><a href="#">01-5574095/9851046632</a></li>
                   <li><div class="social-link" style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; text-align: center; margin-top: 10px;"> 
                            <a href="https://www.instagram.com/aimgurkha/" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100063674538639" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.facebook.com/messages/t/155741854590882" target="_blank"><i class="fab fa-facebook-messenger"></i></a>
                            <!-- <a href="https://wa.me/03062000920" target="_blank"><i class="fab fa-whatsapp"></i></a> -->
                            <a href="https://mail.google.com/mail/u/0/#search/aimgurkha%40gmail.com?compose=GTvVlcRwRQPFTcQVdvMkcSqdjlVTNMvbBSZzlpnTLFjLQzPXlTXrrvDJjdLWfPSnBLMBZFJFSMChS" target="_blank"><i class="fa fa-envelope"></i></a>
                          </div></li>
                </ul>
              </div>
            </div>

            <div style="clear:both;">
              <p class="copyright" >Aim Gurkha <br> ©2023 All Rights Reserved</p>
            </div>
          </div>
        </div>
      </footer>
    </div>
<script src="jscript.js"></script>
</body>

</html>