<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Insert Course</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-80">
                <div class="card">
                    <div class="card-header">
                        <h2>Insert Course Information</h2>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Subject Name</label><br>
                                <input type="text" name="cname" class="form-control" required placeholder="Enter subject name">
                            </div>
                            <div class="form-group">
                                <label>Teacher Name</label>
                                <input type="text" name="c_t_name" class="form-control"
                                    placeholder="Enter teacher's name">
                            </div>
                    
                            <div class="form-group">
                                <label for="">coure id</label>
                                <input type="text" name="cid" class="form-control" required placeholder="Enter teacher course id">
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" name="save" value="Insert" class="btn btn-primary">Add new</button>
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

$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, 'army_project');


if (isset($_POST['save'])) {
    $cname = $_POST['cname'];
    $c_t_name = $_POST['c_t_name'];
    $cid = $_POST['cid'];


    $stmt = $conn->prepare("INSERT INTO course (cname,c_t_name,cid) VALUES (?,?,?)");
    $stmt->bind_param("sss", $cname, $c_t_name, $cid);
    // Execute query
    if (! $stmt->execute()) {
        echo "Error inserting data: " . $stmt->error;
    } 
    else {
       
        echo "Data inserted successfully.";
    }
    // Close the database connection
    $stmt->close();
    $conn->close();
}

?>