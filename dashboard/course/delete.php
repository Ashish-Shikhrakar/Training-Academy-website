<?php
    
if (isset($_POST["cr_id"])) {
    $cr_id  = $_POST["cr_id"];
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'army_project';

    // Create a new connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    function delete_inventory($conn, $cr_id) {
        $sql = "DELETE FROM `course` WHERE `cr_id` = ?";
        $statement = mysqli_stmt_init($conn);
        
        if (!mysqli_stmt_prepare($statement, $sql)) {
            header("location: coursedata.php?error=statementfailed");
            exit();
        }
        
        mysqli_stmt_bind_param($statement, "i", $cr_id);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
        
        header("location:coursedata.php?error=none");
        exit();
    }
    delete_inventory($conn, $cr_id);
}

?>
