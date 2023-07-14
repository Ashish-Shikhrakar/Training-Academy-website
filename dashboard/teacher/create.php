<?php

@include("db_connection.php");

$tid = '';
$tname = '';
$taddress = '';
$email = '';
$phone = '';
$salary = '';

$cid = '';
$submit_message = '';
$mode = "Add";
// $name = '';
// $tmp = '';

if (isset($_POST["tid"])) {
  $tid = $_POST["tid"];
  $mode = "Update";

  $sql = "SELECT * FROM teacher WHERE tid = '$tid'";

  // Execute the query
  $result = mysqli_query($conn, $sql);

  // Check if there are any rows returned
  if (mysqli_num_rows($result) > 0) {
    // Loop through each row and display the elements
  
    $row = mysqli_fetch_assoc($result);
    $tid = $row["tid"];
    $tname = $row["tname"];
    $taddress = $row["taddress"];
    $email = $row["email"];
    $phone = $row["phone"];
    $salary = $row["salary"];
    $cid = $row["cid"];
    $foto = $row["photo"];
    $changed_ph = '';
//      $name = $_FILES["photo"]["name"];
//      $tmp = $_FILES["photo"]["tmp_name"];
}

}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

  <title>
    <?php echo ($mode === "Add") ? "Insert " : "Update "; ?>Teacher Data
  </title>
  <script>
    function pictureChanged(){
      var image = document.getElementById("hidephoto");
      image.style.display = "none";
    }
  </script>
</head>

<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-80">
        <div class="card">
          <div class="card-header">
            <h2>
              <?php echo ($mode === "Add") ? "Insert " : "Update "; ?>teacher data
            </h2>
          </div>
          <div>
            <a href="teacherdata.php"><h3 style="text-decoration:none;">See Teacher Data</h3></a>
          </div>
          <div class="card-body">
            <!-- <?php //echo $submit_message ?> -->
            <form action="" method="POST" enctype="multipart/form-data">

              <div class="form-group">
                <label>name</label><br>
                <input type="text" name="tname" class="form-control" placeholder="Enter teacher's full name"
                  value="<?php echo $tname; ?>">
              </div>
              <div class="form-group">
                <label>address</label>
                <input type="text" name="taddress" class="form-control" placeholder="Enter teacher's address"
                  value="<?php echo $taddress; ?>">
              </div>
              <div class="form-group">
                <label for="">email</label>
                <input type="text" name="email" class="form-control" placeholder="Enterteacher's eamil"
                  value="<?php echo $email; ?>">
              </div>
              <div class="form-group">
                <label for="">phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Enter teacher's phone"
                  value="<?php echo $phone; ?>">
              </div>
              <div class="form-group">
                <label for="">salary</label>
                <input type="bignit" name="salary" class="form-control" placeholder="Enter teacher's salary"
                  value="<?php echo $salary; ?>">
              </div>
              <div class="form-group">
                <label for="">course id</label>
                <input type="text" name="cid" class="form-control" placeholder="Enter teacher course id"
                  value="<?php echo $cid; ?>">
              </div>
              <div class="form-group">
              <label for="">photo</label>
              <?php 
                if ($mode === "Add") {
                  echo '<input type="file" name="photo" class="form-control">';
                } elseif ($mode === "Update") {
                  if ($row["photo"]) {
                    echo '<br><td><img id="hidephoto" width="100px" src="../../uploadsT/'.$row['photo']. '"alt="Image"></td>';
                    echo '<input type = "text" name="photo-text" value = '.$foto.' style="visibility:hidden">';
                  }
                  echo '<input type="file" name="photo" class="form-control" onchange="pictureChanged()">';
                  // $changed_ph = $_FILES['photo']['name'];
                  // echo '<br><td><img id="dhidephoto" width="100px" src="../../uploadsT/'.$changed_ph. '"alt="Image"></td>';
                }
              ?>
                
                <!--  -->
              </div>
              <div class="form-group">
                <input type="hidden" name="mode" value="<?php echo $mode; ?>">
                <input type="hidden" name="tid" value="<?php echo $tid; ?>">
                <button type="submit" name="save" class="btn btn-primary">
                  <?php echo $mode; ?>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- jQuery, Popper.js, and Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
</body>

</html>




<?php

$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, 'army_project');


if (isset($_POST['save'])) {
  $tname = $_POST['tname'];
  $taddress = $_POST['taddress'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $salary = $_POST['salary'];
  $cid = $_POST['cid'];
  $mode = $_POST['mode'];
  // $file = $_FILES['photo']['tmp_name'];

  //  $file = addslashes(file_get_contents($_FILES["image"]["temp_name"]));
  // $file = isset($_FILES['photo']) ? $_FILES['photo'] : null;

  $name = $_FILES["photo"]["name"];
  $tmp = $_FILES["photo"]["tmp_name"];
  
  // print_R($_FILES);exit;

  $uploadStatus = move_uploaded_file($tmp, "../../uploadsT/" . $name);
  if ($uploadStatus) {

    //echo $name;exit;
  }
  // print_r($_FILES);
  // Validate and process the data



  if ($mode === "Add") {
    // Insert the data into the teacher table
    $query = "INSERT INTO teacher (tid, tname, taddress, email, phone, salary, cid, photo) 
            VALUES (NULL,'$tname', '$taddress', '$email', '$phone', '$salary', '$cid','$name')";
  } elseif ($mode === "Update") {
    $check = $_FILES['photo']['name'];
    if ($check!='') {
      $query = "UPDATE `teacher` SET `tname`='$tname',`taddress`='$taddress',`email`= '$email',`phone`= '$phone',`salary`= '$salary',`cid`='$cid', `photo`= '$name' WHERE tid = '$tid'";
    } else {
      // $query = "UPDATE `teacher` SET `tname`='$tname',`taddress`='$taddress',`email`= '$email',`phone`= '$phone',`salary`= '$salary',`cid`='$cid', `photo`= $foto WHERE tid = ";
      $query = "UPDATE `teacher` SET `tname`= '$tname',`taddress`= '$taddress',`email`= '$email',`phone`= '$phone',`salary`= '$salary',`cid`='$cid', `photo`= '$foto' WHERE `tid`= '$tid'";
    }
  }
  
  //echo $tmp;
  
  if (mysqli_query($conn, $query)) {
    // 
    header("location: create.php?error=none");
   
    }
    else{
    echo "Error: " . mysqli_error($conn);
  }

  // Close the database connection
  mysqli_close($conn);
}

?>