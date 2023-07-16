
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ontact</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Notable&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&family=Quicksand&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">


</head>
<body>
    <div class="menubar1">
        <div class="logo" style="display: inline; float: left;">
            <img src="photo/logo.png">
        </div>
      <div>
    <ul>
        <a href="#"><li  class="menubarItems">Home</li></a>
        <a href="about.html"><li  class="menubarItems">About Us</li></a>
        <a href="#"><li class="menubarItems">Services</li></a>  
        <a href="#"><li class="menubarItems">Schedule</li></a>  
        <a href="#"><li class="menubarItems">Exams</li></a>
        <a href="contact.html"><li class="menubarItems">Contact</li></a>
    </ul>
    
   </div> 
</div>

 <div class="popup1">
    <h2>Contact US</h2>
    <p><br><br> Provide us your feedback and queries so we can help you or make amends</p> 
  </div>
  <h1>Get In Touch</h1>
  <p class="p"><i>"We are here to help you. Please feel free to leave us a message <br> on how we could assist you".</i></p>
  
</div>


 
<div class="contact-box">
  <form method="POST" action="" > 
    <!-- form method="POST" action="userfeedback.php" -->
    <h2>Contact Form</h2>
    <input type="text" class="input-field" required name="u_name" placeholder="Name">
    <input type="text" class="input-field" required name="u_email" placeholder="Your e-mail address">
    <input type="text" class="input-field" required name="phone" placeholder="Enter phone no">
    <textarea type="text" required class="input-field textarea-field" name="u_message" placeholder="Message"></textarea>
    <input type="submit" value=" Send Message" name="save"  class="btn"> 
  </form>
 </div>

<?php
@include("db_connection.php");
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

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $u_name = $_POST['u_name'];
    $u_email = $_POST['u_email'];
    $phone= $_POST['phone'];
    $u_message = $_POST['u_message'];

    $stmt = $conn->prepare("INSERT INTO user_feedback (u_name,u_email,phone,u_message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $u_name, $u_email, $phone, $u_message);
    // Execute query
    if (! $stmt->execute()) {
        echo "Error : " . $stmt->error;
    } 
    else {

      echo "Data inserted successfully.";

    }
    // Close the database connection
    $stmt->close();
    $conn->close();
}
?> 

<footer>

  <div class="footer">
    <div class="container">
    <div class = "maps" style="position: relative; float: left;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3534.4475013421393!2d85.31652587497275!3d27.641623228388042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb17e23effe8e7%3A0x59718c25400cd926!2sAim%20Gurkha%20Training%20Centre!5e0!3m2!1sen!2sus!4v1688035424975!5m2!1sen!2sus" 
      width="360" height="240" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      
</div>
      <div class="row">
       
      <div class="footer-col" style = "text-align:left;">
        <h4>Product</h4>
        <ul>
          <li><a href="#">Installation Manual</a></li>
          <li><a href="#">Release Note</a></li>
          <li><a href="#">Community Help</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Company</h4>
        <ul>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Career</a></li>
          <li><a href="#">Exams</a></li>
          <li><a href="#">Schedule</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Aim Gurkha</h4>
        <ul>
        <li><a href="#">Dholahiti, Lalitpur</a></li>
        <li><a href="#">Contact Number</a></li>
        <li><a href="#">01-5574095/9851046632</a></li>
        <div class="social-link"> 
         <a href="#"><i class="fab fa-instagram"></i></a>
         <a href="#"><i class="fab fa-facebook-f"></i></a>
         <a href="#"><i class="fab fa-facebook-messenger"></i></a>
         <a href="#"><i class="fab fa-whatsapp"></i></a>
        </ul>
      </div>
    </div>
    </div>

    <div class="ag" >
      Aim Gurkha
      <div  class="spn">&copy;2023 All Rights Reserved</div>
    </div>
       
  </div>
 
</footer>

</body>
</html>