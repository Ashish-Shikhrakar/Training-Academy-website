<?php
$conn = new mysqli("localhost", "root", "", "army_project");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $cr_id = '';
    $cname = '';
    $c_t_name = '';
    $cid = '';

 if (isset($_POST["cr_id"])) {
    $cr_id = $_POST["cr_id"];

    
    $sql = "SELECT * FROM `course` WHERE cr_id = '$cr_id'";

    $result = mysqli_query($conn, $sql);

    // Check if there are any rows returned
    if (mysqli_num_rows($result) > 0) {
        // Loop through each row and display the elements

        $row = mysqli_fetch_assoc($result);

        $cname = $row['cname'];
        $c_t_name = $row['c_t_name'];
        $cid = $row['cid'];
        $cr_id = '';
        $cr_id = $_POST['cr_id'];
    
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

    <title>Edit Course</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-80">
                <div class="card">
                    <div class="card-header">
                        <h2>Update Course Information</h2>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                        <a class="btn btn-primary" href="../course/coursedata.php" role="button">Back</a>

                        <input type="hidden" name="cr_id" value="<?php echo $cr_id; ?>">

                            <div class="form-group">
                                <label>Subject Name</label><br>
                                <input type="text" name="cname" class="form-control" value="<?php echo $cname; ?>" required placeholder="Enter subject name">
                            </div>
                            <div class="form-group">
                                <label>Teacher Name</label>
                                <input type="text" name="c_t_name" value="<?php echo $c_t_name; ?>" class="form-control"placeholder="Enter teacher's name">
                            </div>
                    
                            <div class="form-group">
                                <label for="">coure id</label>
                                <input type="text" name="cid" value="<?php echo $cid; ?>" class="form-control" required placeholder="Enter teacher course id">
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" name="submit" value="Submit" class="btn btn-primary">Update</button>
                            <!-- <button type="submit" name="save" class="btn btn-primary"> Insert</button> -->
                            <button type="reset" name="reset" class="btn btn-primary">clear</button>
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


if (isset($_POST["submit"])) {
//     $cname = $_POST['cname'];
//     $c_t_name = $_POST['c_t_name'];
//     $cid = $_POST['cid'];
//     $cr_id = '';
//     $cr_id = $_POST['cr_id'];


// //    $query = "UPDATE course SET cname = '$cname', c_t_name = '$c_t_name', cid = '$cid' WHERE cr_id =' $cr_id'";
   

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

      function isAlphaNumeric($string) {
        if(!preg_match('/^[a-zA-Z0-9]+$/', $string)){
        return false;
        }
    
        else{
                return true;
        }
        
        }

      
        if(empty($_POST['cname'])){
          $error.=" Course name cannot be empty";
          $valch=false;
        }
        else{
          $cname=test_input($_POST['cname']);
          if(test_name($cname)==false){
            $error.="<br>Enter valid course name";
            $valch=false;
          }
        }

        if(empty($_POST['c_t_name'])){
            $error.="Name cannot be empty";
            $valch=false;
          }
          else{
            $c_t_name=test_input($_POST['c_t_name']);
            if(test_name($c_t_name)==false){
              $error.="<br>Enter valid Teacher name";
              $valch=false;
            }
          }
          if(empty($_POST['cid'])){
            $error.="Course code cannot be empty";
            $valch=false;
          }
          else{
            $cid=test_input($_POST['cid']);
            if(isAlphaNumeric($cid)==false){
              $error.="<br>Enter valid course code";
              $valch=false;
            }
          }


    

    if($valch==true){
    $query = "UPDATE `course` SET `cname`='$cname', `c_t_name`='$c_t_name', `cid`='$cid' WHERE cr_id = '$cr_id'";

    // Execute query
    if (mysqli_query($conn, $query)) {
        echo "Data updated successfully.";
         // header('Location: course.php?error=none');
    
        }
        mysqli_close($conn);
    }
    else{
            echo "<div class='alert alert-danger'>".$error."</div>";

    }       
}

?>