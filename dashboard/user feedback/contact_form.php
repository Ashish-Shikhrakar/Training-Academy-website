<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Notable&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
 
<!-- comment -->
<style>
*{
    padding:0;
    margin:0;
    box-sizing: border-box;
}
body{
    background-image:url(FloodedKabul.jpg);
    background-size:cover;
    font-family: sans-serif; 
}

.logo{
    padding-right: 400px;  
}

body{
    background-size:cover;
    font-family: sans-serif;
}

.menubar{
    text-align: center;
    background-image: url(../photo/FloodedKabul.jpg);
    height: 543px;
    width: 100%;
    background-size: cover;

}

.menubarItems{
color:black;
font-size: larger;
}

.menubar1,.menubarItems:hover{
    color:  rgb(190, 109, 3);
}

.popup1{
    position: absolute;
    top: 42%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 1460px;
    height: 400px;
    padding: 50px;
    box-shadow: 0 5px 30px rgba(0,0,0,0,.30);
    background:#454A34;
    margin-top: 37px;
    text-align: center;
    color:  #B8B683;
    letter-spacing: 2px;
    line-height: 30px;
    font-family: 'Notable', sans-serif;
    font-size: larger;
}

.popup1 p{
    font-family: 'Poppins', sans-serif;
    font-size: large;
}

 .menubar1{
    text-align: center;
    height: 543px;
    width: 100%;
    background-size: cover;
    
 }
 
 .menubar1 ul{
    display: inline-flex;
    list-style: none;
    color:#fff
}

.menubar1 li{
    width: 92px;
    margin:13px;
    text-align: justify;
    margin-top: 35px;
    margin-right:20px;
  
}

.menubar1 a{
    text-decoration: none;   
}
 
h1{
    text-align: center;
    position: relative; 
    line-height: 50px; 
    margin-top: 5px;
    
}

h1::after{   
 content:" ";
 position: absolute;
 display:block;
 left: 40%;
 bottom: -20.13px;
 width: 20%;
 height: 4px;
 background-color:#454A34;
 

}

 h2{
    line-height: normal;
    text-align: center;
   

}

.p{
    text-align: center;
    font-size: 30px;
    line-height: 30px;
    margin-top: 50px;
    font-size: larger;
    margin-inline-start: 60px;
    margin-inline-end: 60px; 
    font-family: 'Poppins', sans-serif;
}

.wwr{
    text-decoration: none;
    font-size: 50px;
    text-align: center; 
    margin-top: 50px; 
    
}

 .p1{
    text-align: justify;
    font-size: 30px;
    line-height: 30px;
    margin-top: 50px;
    font-size: larger;  
    margin-inline-start: 60px;  
    margin-inline-end: 60px;
 }

 .p2{
    text-align: justify;
    font-size: 30px;
    line-height: 30px;
    margin-top: 50px;
    font-size: larger;  
    margin-inline-start: 60px;  
    margin-inline-end: 60px;
 }

   .photoOne img{
    max-width: 320px;
    margin-left: 40px;
    margin-top: 50px;
    width: 300px;
    height: 400px;
    margin-left: 119px; 
  }  

  .contact-box{
    width: 364px;
    background-color: #E3E3E3;
    box-shadow: 0 0 20px 0 #999;
    top:125%;
    left: 50%;
    transform: translate(-50%,-50%);
    position:absolute;
    margin-top: 180px ;
    margin-bottom: 80px;
    
  }
    
  form{
    margin: 57px;
    height: 350px;
   
  }
  form h2{
    text-align: center;
    margin-bottom: 36px;
   
  }
 
  .input-field{
    width: 250px;
    height: 40px;
    margin-bottom: 10px;
    padding-left: 10px;
    padding-right: 10px;
    border:1px solid #777;
    outline: none;
    align-items: center;

}

.textarea-field{
    height: 133px;
    padding-top: 10px;
    align-items: center;
}
.btn{
    margin-bottom: 10px;
    padding: 14px 28px;
    background-color: #A7A44E;
    border: none;
    font-family: 'Inter', sans-serif;
    color: #fff;
    cursor: pointer;
    width: 100%;
    padding: 10px;

   
  }
  .footer{
    background-color: #454A34;
    color: #EDEDED;
    padding: 20px;
    font-size: 14px;
    font-weight: bold;
    text-transform: uppercase;
    margin-top: 50px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
    text-align: center;
    align-content: center; 
}

.maps{
    margin-top: 50px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
    border: 2px solid #000000;
    width: fit-content;
}
  
.footer-columns {
    position: relative;
    padding: 10px;
    display: grid;
    align-items: center;
    justify-content: center;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    column-gap: 15px;
    text-align: center;
}
  
.column {
    align-content: center;

}
  
.column h3 {
    font-size: 16px;
}
  
.column ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}
  
.column ul li {
    margin-bottom: 5px;
}
.column ul li:hover {
    color: rgb(190, 109, 3);
    text-decoration: underline;
    cursor: pointer;
}
  
input[type="email"] {
    width: 100%;
    padding: 5px;
    margin-bottom: 5px;
}

@media (max-width: 500px) {
    .outer-container {
        padding: 10px 20px 10px 20px;
    }

    .section-head-text {
        text-align: center;
    }
}
</style>
</head>
<body>
    <div class="menubar1">
        <div class="logo" style="display: inline; float: left;">
            <img src="../images/logo.png">
        </div>
      <div>
    <ul>
        <a href="#"><li  class="menubarItems">Home</li></a>
        <a href="about.html"><li  class="menubarItems">About Us</li></a>
        <a href="#"><li class="menubarItems">Services</li></a>  
        <a href="#"><li  class="menubarItems">Schedule</li></a>  
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
  <p class="p"><i>We are here to help you. Please feel free to leave us a message <br> on how we could assist you</i></p>
  


 <div class="contact-box">
  <form method="POST" action=""  onsubmit="sendEmail(); reset(); return false;"> 
    <!-- form method="POST" action="userfeedback.php" -->
    <h2>Contact Form</h2>
    <input type="text" class="input-field" required name="u_name" placeholder="Name">
    <input type="text" class="input-field" required name="u_email" placeholder="Your e-mail address">
    <input type="text" class="input-field" required name="phone" placeholder="Enter phone no">
    <textarea type="text" required class="input-field textarea-field" name="u_message" placeholder="Message"></textarea>
    <input type="submit" value=" Send Message" name="save"  class="btn"> 
  </form>
 </div>
<script src="https://smtpjs.com/v3/smtp.js"></script>

<!-- user feedback message direct on gmail account  -->
<!-- <script> -->
    function sendEmail(){
            Email.send({
                Host : "smtp.gmail.com",
                Username : "bhishmapoudel408@gmail.com",
                Password : "password",
                To : 'bhishma.192006@ncit.edu.np',
                From : document.getElementById("email").value,
                Subject : "New feedback from user",
                Body : "And this is the body",
            }).then(
                message => alert(message sent sucessfully)
            );
    }
</script>
</body>
</html>

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
       
        // echo "Data inserted successfully.";
    }
    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>