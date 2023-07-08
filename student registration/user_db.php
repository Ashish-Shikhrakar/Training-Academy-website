<?php

@include 'db_connection.php';

// Prepare and bind the INSERT statement
$stmt = $conn->prepare("INSERT INTO user_reg (a_id, Fname, Lname, jat, main_jat, education, date_of_birth_bs, date_of_birth_ad, age, religion, faculty, p_address, p_ward, p_VDC, p_RM, NP, trmp_address, t_ward, t_VDC, t_RM, t_NP, a_contact_no, father_name, occupation, f_contact_no, service_no, rank, regt, mother_name, guradian_name, relation, r_contact_no, reporting_date, photo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

if (!$stmt) {
    die("Error: " . $conn->error);
}

// Bind the form inputs to the prepared statement parameters
$stmt->bind_param("issssssiisssisssssiissisissisii", $a_id, $Fname, $Lname, $jat, $main_jat, $education, $date_of_birth_bs, $date_of_birth_ad, $age, $religion, $faculty, $p_address, $p_ward, $p_VDC, $p_RM, $NP, $trmp_address, $t_ward, $t_VDC, $t_RM, $t_NP, $a_contact_no, $father_name, $occupation, $f_contact_no, $service_no, $rank, $regt, $mother_name, $guradian_name, $relation, $r_contact_no, $photo);

// Retrieve the form data and assign them to variables
$a_id = $_POST['a_id'];
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$jat = $_POST['jat'];
$main_jat = $_POST['main_jat'];
$education = $_POST['education'];
$date_of_birth_bs = $_POST['date_of_birth_bs'];
$date_of_birth_ad = $_POST['date_of_birth_ad'];
$age = $_POST['age'];
$religion = $_POST['religion'];
$faculty = $_POST['faculty'];
$p_address = $_POST['p_address'];
$p_ward = $_POST['p_ward'];
$p_VDC = $_POST['p_VDC'];
$p_RM = $_POST['p_RM'];
$NP = $_POST['NP'];
$trmp_address = $_POST['trmp_address'];
$t_ward = $_POST['t_ward'];
$t_VDC = $_POST['t_VDC'];
$t_RM = $_POST['t_RM'];
$t_NP = $_POST['t_NP'];
$a_contact_no = $_POST['a_contact_no'];
$father_name = $_POST['father_name'];
$occupation = $_POST['occupation'];
$f_contact_no = $_POST['f_contact_no'];
$service_no = $_POST['service_no'];
$rank = $_POST['rank'];
$regt = $_POST['regt'];
$mother_name = $_POST['mother_name'];
$guradian_name = $_POST['guradian_name'];
$relation = $_POST['relation'];
$r_contact_no = $_POST['r_contact_no'];

$photo = $_POST['photo'];

// Execute the INSERT statement
if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>