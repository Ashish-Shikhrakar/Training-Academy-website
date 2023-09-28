<?php




include($_SERVER['DOCUMENT_ROOT'] . '/ARMY-WEBSITE-PROJECT/dashboard/common/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/ARMY-WEBSITE-PROJECT/dashboard/common/sidebar.php') ?>


<section id="interface">
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/ARMY-WEBSITE-PROJECT/dashboard/common/top-menu.php');

$aname=$_SESSION['admin_name'];
?>
<?php

// if (isset($_POST["id"])) {
//    $id = $_POST["id"];

   $sql = "SELECT * FROM `admin_form` WHERE name = '$aname'";


   $result = mysqli_query($conn, $sql);

   // Check if there are any rows returned
   if (mysqli_num_rows($result) > 0) {
       // Loop through each row and display the elements

       $row = mysqli_fetch_assoc($result);

      //  $name = $row['name'];
      //  $email = $row['email'];
      //  $password = $row['password'];
       $id = $_POST['id'];

   
      
   }
?>


   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

<!-- </head>
<body> -->
   
<div class="container">

   <div class="content">
      <!-- <h3>hi, </h3> -->
      <h1>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
      <a href="register_form.php" class="btn">Register</a>
      <a href="logout.php" class="btn">Logout</a> <br>
      <br><br>
      <!-- <a href="change_account.php" class="btn" >Change account details</a> -->
      <?php
      echo '<input class="btn " type="button" style="padding: 10px 22px;" onclick="editThis(' . $row["id"] . ')" value="Change account details">';

      ?>
   </div>

</div>
</section>

<script>
function editThis(id) {
		var form = document.createElement("form");
		form.method = "POST";
		form.action = "change_account.php";

		var input = document.createElement("input");
		input.type = "hidden";
		input.name = "id";
		input.value = id;

		form.appendChild(input);

		document.body.appendChild(form);
		form.submit();
	}
   </script>

   
