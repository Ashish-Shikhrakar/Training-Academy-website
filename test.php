<?php
// Create a database connection
$conn = mysqli_connect("localhost", "root", "", "wtexam");
  die("ERROR: Could not connect to database");

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $contact = $_POST["contact"];
  $address = $_POST["address"];

  // Validate the form data
  if (empty($name)) {
    $error_name = "Please enter your name";
  }
  if (empty($email)) {
    $error_email = "Please enter your email address";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error_email = "Please enter a valid email address";
  }
  if (empty($contact)) {
    $error_contact = "Please enter your contact number";
  }
  if (empty($address)) {
    $error_address = "Please enter your address";
  }

  // If there are no errors, store the data in the database
  if (!isset($error_name) && !isset($error_email) && !isset($error_contact) && !isset($error_address)) {
    $sql = "INSERT INTO users (name, email, contact, address) VALUES ('$name', '$email', '$contact', '$address')";
    mysqli_query($conn, $sql);
    echo "Data stored in database successfully";
  }
}

// Display the form
?>

<html>
<head>
<title>Registration Form</title>
</head>
<body>
<h1>Registration Form</h1>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
  <input type="text" name="name" placeholder="Name">
  <?php if (isset($error_name)) { echo "<span class='error'>$error_name</span>"; } ?>
  <br>
  <input type="email" name="email" placeholder="Email">
  <?php if (isset($error_email)) { echo "<span class='error'>$error_email</span>"; } ?>
  <br>
  <input type="text" name="contact" placeholder="Contact">
  <?php if (isset($error_contact)) { echo "<span class='error'>$error_contact</span>"; } ?>
  <br>
  <input type="text" name="address" placeholder="Address">
  <?php if (isset($error_address)) { echo "<span class='error'>$error_address</span>"; } ?>
  <br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
