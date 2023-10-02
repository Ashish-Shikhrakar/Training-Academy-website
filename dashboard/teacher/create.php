<?php

include("db_connection.php");

$tid = '';
$tname = '';
$taddress = '';
$email = '';
$phone = '';
$salary = '';
$cid = '';
$submit_message = '';
$mode = '';
// $name = '';
// $tmp = '';
$phoneErr='';
$addressErr='';
$nameErr='';
$emailErr='';
$row='';
// $row=['photo'];
$txtname='';


if (isset($_POST["tid"])) {
  $tid = $_POST["tid"];
  // $mode = "Update";                                     //for 2 operation like edit(update),insert.

  $sql = "SELECT * FROM teacher WHERE tid = '$tid'";

  // Execute the query
  $result = mysqli_query($conn, $sql);
                                                      // Check if there are any rows returned

  if (mysqli_num_rows($result) > 0) {                 // Loop through each row and display the elements
    
  
    $row = mysqli_fetch_assoc($result);
    $tid = $row["tid"];
    $tname = $row["tname"];
    $taddress = $row["taddress"];
    $email = $row["email"];
    $phone = $row["phone"];
    $salary = $row["salary"];
    $cid = $row["cid"];
    $foto = $row["photo"];//change photo
    $changed_ph = '';
    // $name = $row["photo"]["name"];
    // $tmp = $row["photo"]["tmp_name"];
    //  $name = $_FILES["photo"]["name"];
    //  $tmp = $_FILES["photo"]["tmp_name"];
}

}





// $tid=$_POST['tid'];
if(empty($tid)){
  $txtname = "Add";
  $mode='Add';
}
else{
  $txtname = "Update";
  $mode='Update';
}
 



// if(empty($txtname)){
//   $test=$_POST['txtname'];
//     if($test == 'Add'){
//     $mode='Add';
//   }
//   else{
//     $mode='Update';
//   }
// }




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
            <!-- <a href="teacherdata.php"><h3 style="text-decoration:none;">See Teacher Data</h3></a> -->
            <a class="btn btn-primary" href="../teacher/teacherdata.php" role="button">Back</a>

          </div>
          <div class="card-body">
            <!-- <?php //echo $submit_message ?> -->
            <form action="" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="txtname" value="<?php echo $txtname; ?>"  id="txt">

              <div class="form-group">
                <label>Name</label><br>
                <input type="text" name="tname" class="form-control" placeholder="Enter teacher's full name"
                  value="<?php echo $tname; ?>"><span><?php echo $nameErr ?></span>
              </div>
              <div class="form-group">
                <label>Address</label>
                <input type="text" name="taddress" class="form-control" placeholder="Enter teacher's address"
                  value="<?php echo $taddress; ?>"><span><?php echo $addressErr?></span>
              </div>
              <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" required placeholder="Enterteacher's eamil"
                  value="<?php echo $email; ?>"><span><?php echo $emailErr?></span>
              </div>
              <div class="form-group">
                <label for="">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Enter teacher's phone"
                  value="<?php echo $phone; ?>"><span><?php echo $phoneErr?></span>
              </div>
              <div class="form-group">
                <label for="">Salary</label>
                <input type="bignit" name="salary" class="form-control" placeholder="Enter teacher's salary"
                  value="<?php echo $salary; ?>">
              </div>
              <div class="form-group">
                <label for="">Course id</label>
                <input type="text" name="cid" class="form-control" placeholder="Enter teacher course id"
                  value="<?php echo $cid; ?>">
              </div>
              <div class="form-group">
              <label for="">Photo</label>
              <?php 

                    if ($mode == "Add") {
                      echo '<input type="file" name="photo" class="form-control">';
                    } elseif ($mode == "Update") {
                      if ($row["photo"]) {
                        echo '<br><td><img id="hidephoto" width="100px" src="../../uploadsT/'.$row['photo']. '"alt="Image"></td>';
                        echo '<input type = "text" name="photo-text" value = '.$foto.' style="visibility:hidden">';
                      }
                      echo '<input type="file" name="photo" class="form-control" onchange="pictureChanged()">';
                      // $changed_ph = $_FILES['photo']['name'];
                      // echo '<br><td><img id="dhidephoto" width="100px" src="../../uploadsT/'.$changed_ph. '"alt="Image"></td>';
                    }

              ?>
                
              </div>
              <div class="form-group">
                <input type="hidden" name="mode" value="<?php echo $mode; ?>">
                <input type="hidden" name="tid" value="<?php echo $tid; ?>">
                <button type="submit" name="save" class="btn btn-primary"><?php echo $mode; ?></button>
                <button type="reset" name="reset" class="btn btn-primary">Clear</button>
                
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
if (isset($_POST['save'])) {
  $tname = $_POST['tname'];
  $taddress = $_POST['taddress'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $salary = $_POST['salary'];
  $cid = $_POST['cid'];
  // $mode = $_POST['mode'];
  // $file = $_FILES['photo']['tmp_name'];

  //  $file = addslashes(file_get_contents($_FILES["image"]["temp_name"]));
  // $file = isset($_FILES['photo']) ? $_FILES['photo'] : null;

  $name = $_FILES["photo"]["name"];
  $tmp = $_FILES["photo"]["tmp_name"];
  $uploadStatus = move_uploaded_file($tmp, "../../uploadsT/" . $name);
    if ($uploadStatus) {      
    //echo $name;exit;
    }

    $error='';
    $valch=true;

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
        // $nameErr="";
        if (isset($_POST['save'])) {
          if(empty($_POST['tname'])){
            $error.="name cannot be empty";
            $valch=false;
          }
          else{
            $tname=test_input($_POST['tname']);
            if(test_name($tname)==false){
              $error.="<br>enter valid name";
              $valch=false;
            }
          }
          if(empty($_POST['taddress'])){
            $error.="<br>name cannot be empty";
            $valch=false;
          }
          else{
              $taddress=test_input($_POST['taddress']);
              if(test_name($taddress)==false){
                $error.="<br>enter valid address";
                $valch=false;
            }
          }
          if(empty($_POST['phone'])){
            $error.="<br>phone cammot be empty";
            $valch=false;
          }
          else{
            $phone=$_POST['phone'];//required max length 10
            if(validatePhone($phone)==false){
                $error.="<br>enter valid number";
                $valch=false;
              }
            }
      }

if($valch==true){
    if ($mode == "Add") {
    // Insert the data into the teacher table
    $query = "INSERT INTO teacher (tid, tname, taddress, email, phone, salary, cid, photo) 
            VALUES (NULL,'$tname', '$taddress', '$email', '$phone', '$salary', '$cid','$name')";
            
    } elseif ($mode == "Update") {
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
      // <?php echo $rootUrl.'
      // header("location: create.php?error=none");
      echo $mode ." successful";
    
      }
      else{

        echo "Error: sorry" . mysqli_error($conn);
      }
      }else{
        echo $error;
      }

    // Close the database connection
      mysqli_close($conn);
  }

?>