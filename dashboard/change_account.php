<?php
$conn = new mysqli("localhost", "root", "", "army_project");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// UPDATE `admin_form` SET `id`='[value-1]',`name`='[value-2]',`email`='[value-3]',`password`='[value-4]',`image`='[value-5]',`user_type`='[value-6]' WHERE 1

$id='';
$name='';
$email='';
$password='';

if (isset($_POST["id"])) {
    $id = $_POST["id"];

    $sql = "SELECT * FROM `admin_form` WHERE id = '$id'";


    $result = mysqli_query($conn, $sql);

    // Check if there are any rows returned
    if (mysqli_num_rows($result) > 0) {
        // Loop through each row and display the elements

        $row = mysqli_fetch_assoc($result);

        $name = $row['name'];
        $email = $row['email'];
        // $password = $row['password'];
        $id = $_POST['id'];

    
       
    }
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update Account</title>

   <!-- custom css file link  -->
   
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password =md5( $_POST['password']);
    $cpass= md5( $_POST['cpassword']);
    


if($password != $cpass){
    $error[] = 'password not matched!';
 }else{
   
    $query = "UPDATE `admin_form` SET  `email`='$email', `password`='$password' WHERE id = '$id'";
    // Execute query
    if (mysqli_query($conn, $query)) {
        echo "Data updated successfully.";
        header('Location: admin_page.php?error=none');
    
    }
}
   mysqli_close($conn);
}

?>

<div class="form-container">

   <form action="" method="post">
      <h3>Update Your Account</h3>
       <?php


      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?> 
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <input type="text" name="name" value="<?php echo $name; ?>" required placeholder="Enter user name">
      <input type="email" name="email" value="<?php echo $email; ?>" required placeholder="Enter your email">
      <input type="password" name="password"  required placeholder="Enter new password">
      <input type="password" name="cpassword"  required placeholder="Confirm your password">
      <!-- <select name="user_type">
      <option value="admin">admin</option>
         <!-- <option value="user">user</option>
       
      </select> -->


      <input type="submit" name="submit" value="Update Now" class="form-btn">
      <!-- <p>already have an account? <a href="login_form.php">login now</a></p> -->
   </form>

</div>

</body>
</html>


