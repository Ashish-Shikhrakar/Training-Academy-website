<?php
    
if (isset($_POST["st_id"])) {
    $st_id  = $_POST["st_id"];
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

    function delete_inventory($conn, $st_id) {
        $sql = "DELETE FROM `student_reg` WHERE `st_id` = ?";
        $statement = mysqli_stmt_init($conn);
        
        if (!mysqli_stmt_prepare($statement, $sql)) {
            header("location: test.php?error=statementfailed");
            exit();
        }
        
        mysqli_stmt_bind_param($statement, "i", $st_id);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
        
        header("location: test.php?error=none");
        exit();
    }
    delete_inventory($conn, $st_id);
}

?>
