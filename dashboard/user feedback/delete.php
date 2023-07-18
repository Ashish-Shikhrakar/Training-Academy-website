<?php
    
if (isset($_POST["u_id"])) {
    $u_id  = $_POST["u_id"];
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

    function delete_inventory($conn, $u_id) {
        $sql = "DELETE FROM `user_feedback` WHERE `u_id` = ?";
        $statement = mysqli_stmt_init($conn);
        
        if (!mysqli_stmt_prepare($statement, $sql)) {
            header("location: userfeedback.php?error=statementfailed");
            exit();
        }
        
        mysqli_stmt_bind_param($statement, "i", $u_id);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
        
        header("location: userfeedback.php?error=none");
        exit();
    }
    delete_inventory($conn, $u_id);
}

?>
