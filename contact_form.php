<!DOCTYPE html>
<html lang="en">
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


    // $stmt = $conn->prepare("INSERT INTO user_feedback (u_name,u_email,phone,u_message) VALUES (?, ?, ?, ?)");
    // $stmt->bind_param("ssis", $u_name, $u_email, $phone, $u_message);
    // // Execute query
    // if (! $stmt->execute()) {
    //     echo "Error : " . $stmt->error;
    // } 
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