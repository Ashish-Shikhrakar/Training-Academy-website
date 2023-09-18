<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="icon" type="image/x-icon" href="photo/favicon.ico">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Notable&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&family=Quicksand&display=swap" rel="stylesheet">
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

   
  }
  </style>
</head>

<body>
  <div class="wrapper">

  </div>
  <div class="menubar" style="background-image: none; height: 65px;">
    <div id="navbar" style="transition: 0s;">
      <div class="logo" style="display: inline; float: left;">

        <img src="photo/logo.png">
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
=======
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Notable&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&family=Quicksand&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">


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

</body>


<?php
function test_input($data) {
  $data = trim($data);//Strip unnecessary characters (extra space, tab, newline) from the user input data
  $data = stripslashes($data);//Remove backslashes (\) from the user input data
  $data = htmlspecialchars($data);//converts special characters to HTML entities
  return $data;
}
function test_name($data){
  if (!preg_match("/^[a-zA-Z-' ]*$/",$data)) {
      return false;
  }
  else {
      return true;
  }
}
function validatePhone($phone) {

// Check if the phone number is a valid format
if (!preg_match("/^[0-9]{10}+$/", $phone)) {
  return false;

}
// The phone number is valid
else{
  return true;
}
}
// This function validates an email address.
function validateEmail($email) {
  // Check if the email address is valid.
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return false;
  }

  // Check if the email address is in the blacklist.
  // $blacklist = array('example@domain.com', 'example2@domain.com');
  // if (in_array($email, $blacklist)) {
  //     return false;
  // }

  // The email address is valid.
  return true;
}
$nameErr = $emailErr = $phoneErr =$msgErr="";
$u_name=$u_email=$u_message="";
$phone=null;
$valcheck=true;

@include("db_connection.php");
>>>>>>> a68696968772efd7f74e6ba11a26c130248dbf25
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'army_project';
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
<<<<<<< HEAD
  die("Connection failed: " . $conn->connect_error);
=======
    die("Connection failed: " . $conn->connect_error);
>>>>>>> a68696968772efd7f74e6ba11a26c130248dbf25
}

// Check for form submission

<<<<<<< HEAD
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['save'])) {
    $u_name = $_POST['u_name'];
    $u_email = $_POST['u_email'];
    $phone = $_POST['phone'];
    $u_message = $_POST['u_message'];
=======
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  if(isset($_POST['save'])){
    if(empty($_POST['u_name'])){
      $nameErr="Name cannot be empty";
      $valcheck=false;
    }
    else{
      $u_name=test_input($_POST['u_name']);
      if(test_name($u_name)==false){
        $nameErr ="Only letters and white space allowed in name.";
        $valcheck=false;
      }
    }
    if (empty($_POST['u_email'])) {
      $emailErr = "Email is required";
      $valcheck=false;
    }
    else {
      $u_email = test_input($_POST['u_email']);
    // check if e-mail address is well-formed
    if (validateEmail($u_email)==false) {
      $emailErr = "Invalid email format";
      $valcheck=false;
    }
  }
  if(empty($_POST['phone'])){
    $phoneErr="Phone number can not be blank!";
    $valcheck=false;
  }
  else {
    $phone=$_POST['phone'];
    if(validatePhone($phone)==false){
      $phoneErr="Please enter a valid phone number";
      $valcheck=false;
    }
  }
  if(empty($_POST['u_message'])){
    $msgErr="Message cannot be empty! Please type something to send us your message...";
    $valcheck=false;
  }
  else{
    $u_message=test_input($_POST['u_message']);
  }
>>>>>>> a68696968772efd7f74e6ba11a26c130248dbf25


    // $stmt = $conn->prepare("INSERT INTO user_feedback (u_name,u_email,phone,u_message) VALUES (?, ?, ?, ?)");
    // $stmt->bind_param("ssis", $u_name, $u_email, $phone, $u_message);
    // // Execute query
    // if (! $stmt->execute()) {
    //     echo "Error : " . $stmt->error;
    // } 
<<<<<<< HEAD
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
                </ul>
              </div>
            </div>
            <div class="social-link"> 
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-facebook-messenger"></i></a>
              <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>

            <div style="clear:both;"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i
                  class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a
                href="#"><i class="icon ion-social-instagram"></i></a>
              <p class="copyright" >Aim Gurkha <br> ©2023 All Rights Reserved</p>
            </div>
          </div>
        </div>
      </footer>
    </div>
<script src="jscript.js"></script>
</body>

</html>
=======
    $insert="INSERT INTO user_feedback(u_name,u_email,phone,u_message) VALUES ('$u_name', '$u_email', '$phone', '$u_message')";
    if($valcheck==true){
    $query= mysqli_query($conn,$insert);
    if($query){
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
  
    //Close the database connection
    // $stmt->close();
    $conn->close();
  }
}
 }
?>

  
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
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    <!-- form method="POST" action="userfeedback.php" -->
    <h2>Contact Form</h2>
    <input type="text" class="input-field"  name="u_name" placeholder="Name"><span class="error"> <?php echo $nameErr;?></span>
    <input type="text" class="input-field"  name="u_email" placeholder="Your e-mail address"><span class="error"> <?php echo $emailErr;?></span>
    <input type="text" class="input-field"  name="phone" placeholder="Enter phone no"><span class="error"><?php echo $phoneErr;?></span>
    <textarea type="text"  class="input-field textarea-field" name="u_message" placeholder="Message"></textarea><span><?php echo $msgErr;?></span>
    <input type="submit" value=" Send Message" name="save"  class="btn"> 
  </form>
 </div>



</body>

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
>>>>>>> a68696968772efd7f74e6ba11a26c130248dbf25
