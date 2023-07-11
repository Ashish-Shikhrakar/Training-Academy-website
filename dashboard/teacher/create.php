<?php

@include ("db_connection.php");
?>
<!-- <?php
  // $tid = '';
  // $tname = '';
  // $taddress = '';
  // $email = '';
  // $phone = '';
  // $salary = '';
  // $cid = '';
  // $photo = '';
  
  
  // sql SELECT * FROM `teacher` WHERE $id = "valueID"

  // $sql = "SELECT * from teacher where tid = $tid";
  // $result = $conn->query($sql);
  // $row = $result->fetch_assoc();


   
  // $tname = $row["tname"];
?> -->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

  <title>Insert Teacher Data</title>
</head>

<body>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-80">
        <div class="card">
          <div class="card-header">
            <h2>Insert teacher data</h2>
          </div>
          <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">

              <div class="form-group">
                <label>name</label><br>
                <input type="text" name="tname" class="form-control" placeholder="Enter teacher's full name">
              </div>
              <div class="form-group">
                <label>address</label>
                <input type="text" name="taddress" class="form-control" placeholder="Enter teacher's address">
              </div>
              <div class="form-group">
                <label for="">email</label>
                <input type="text" name="email" class="form-control" placeholder="Enterteacher's eamil" >
              </div>
              <div class="form-group">
                <label for="">phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Enter teacher's phone" >
              </div>
              <div class="form-group">
                <label for="">salary</label>
                <input type="bignit" name="salary" class="form-control" placeholder="Enter teacher's salary" >
              </div>
              <div class="form-group">
                <label for="">coure id</label>
                <input type="text" name="cid" class="form-control" placeholder="Enter teacher course id">
              </div>
              <div class="form-group">
                <label for="">photo</label>
                <input type="file" name="photo" class="form-control">
              </div>
              <div class="form-group">
                <input type="hidden" name="mode" value="<?php $mode ?>">
                <button type="submit" name="save" class="btn btn-primary">save</button>
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

$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,'army_project');


if (isset($_POST['save'])) {
  $tname = $_POST['tname'];
  $address = $_POST['taddress'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $salary = $_POST['salary'];
  $cid = $_POST['cid'];
  // $file = $_FILES['photo']['tmp_name'];

  //  $file = addslashes(file_get_contents($_FILES["image"]["temp_name"]));
  // $file = isset($_FILES['photo']) ? $_FILES['photo'] : null;

 
   $name = $_FILES["photo"]["name"];
  $tmp = $_FILES["photo"]["tmp_name"];
  // print_R($_FILES);exit;

  $uploadStatus=move_uploaded_file($tmp, "../../uploads/".$name);
  if($uploadStatus){
    //echo $name;exit;
  }  
  // print_r($_FILES);
  // Validate and process the data

  // Insert the data into the teacher table
  $query = "INSERT INTO teacher (tid, tname, taddress, email, phone, salary, cid, photo) 
            VALUES (NULL,'$tname', '$address', '$email', '$phone', '$salary', '$cid','$name')";
  // echo $query;
  // exit;
  if (mysqli_query($conn, $query)) {
    // echo "Data inserted successfully.";
  } else {
    echo "Error: " . mysqli_error($conn);
  }

  // Close the database connection
  mysqli_close($conn);
}

?>



