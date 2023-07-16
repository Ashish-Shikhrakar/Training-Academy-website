<?php
    
if (isset($_POST["tid"])) {
    $tid  = $_POST["tid"];
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

    function delete_inventory($conn, $tid) {
        $sql = "DELETE FROM `teacher` WHERE `tid` = ?";
        $statement = mysqli_stmt_init($conn);
        
        if (!mysqli_stmt_prepare($statement, $sql)) {
            header("location: displaydata.php?error=statementfailed");
            exit();
        }
        
        mysqli_stmt_bind_param($statement, "i", $tid);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
        
        header("location: displaydata.php?error=none");
        
        exit();
    }
    delete_inventory($conn, $tid);
}

?>
