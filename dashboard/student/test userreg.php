<?php
@include ('db_connection.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data

    $attempt = $_POST['attempt'];
    $fname = $_POST['Fname'];
    $lname = $_POST['Lname'];
    $jat = $_POST['jat'];
    $main_jat = $_POST['main_jat'];
    $education = $_POST['education'];
    $DOB = $_POST['DOB'];
    // $age = $_POST['age'];
    
    // $spanValue = $_POST['spanValue'];
    $religion = $_POST['religion'];
    $faculty = $_POST['faculty'];
    $p_address = $_POST['p_address'];
    $p_ward = $_POST['p_ward'];
    $p_vdc_rm_mp = $_POST['p_vdc_rm_mp'];
    $p_vdc_rm_mp_text = '';
    $p_rm_mp_text = '';
    $t_address = $_POST['t_address'];
    $t_ward = $_POST['t_ward'];
    $t_vdc_rm_mp = $_POST['t_vdc_rm_mp'];
    $t_vdc_rm_mp_text = '';
    $t_rm_mp_text = '';
    $contact_no = $_POST['phone'];

    // // Process VDC/RM/MP selection for permanent address
    // if ($p_vdc_rm_mp === 'V.D.C') {
    //     $p_vdc_rm_mp_text = $_POST['p_txt_vdc_rm_mp'];
    // } elseif ($p_vdc_rm_mp === 'R.M') {
    //     $p_rm_mp_text = $_POST['p_txt_vdc_rm_mp'];
    // }
    // // Process VDC/RM/MP selection for temporary address
    // if ($t_vdc_rm_mp === 'V.D.C') {
    //     $t_vdc_rm_mp_text = $_POST['t_txt_vdc_rm_mp'];
    // } elseif ($t_vdc_rm_mp === 'R.M') {
    //     $t_rm_mp_text = $_POST['t_txt_vdc_rm_mp'];
    // }
    $photo = $_FILES['pp']['name'];
    $father_name = $_POST['father_name'];
    $f_occupation = $_POST['f_occupation'];
    $f_contact_no = $_POST['f_contact_no'];
    $service_no = $_POST['service_no'];
    $rank = $_POST['rank'];
    $mother_name = $_POST['mother_name'];
    $m_occupation = $_POST['m_occupation'];
    $m_contact_no = $_POST['m_contact_no'];
    $guradian_name = $_POST['guradian_name'];
    $relation = $_POST['Relation'];
    $r_contact_no = $_POST['r_contact_no'];
    $aggre = isset($_POST['aggre']) ? 1 : 0;

    // Prepare and bind the form data to insert into the database
    $stmt = $conn->prepare("INSERT INTO student_reg (attempt, fname, lname, jat, main_jat, education, DOB, age, religion, faculty, p_address, p_ward, p_vdc_rm_mp, p_txt_vdc_rm_mp, p_rm_mp_text, t_address, t_ward, t_vdc_rm_mp, t_txt_vdc_rm_mp, contact_no, photo, father_name, f_occupation, f_contact_no, service_no, rank, mother_name, m_occupation, m_contact_no, guradian_name, relation, r_contact_no, aggre) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssssssisssisssisssissssisiiiiii", $attempt, $fname, $lname, $jat, $main_jat, $education, $DOB, $age, $religion, $faculty, $p_address, $p_ward, $p_vdc_rm_mp, $p_rm_mp_txt, $t_address, $t_ward, $t_txt_vdc_rm_mp, $t_vdc_rm_mp, $contact_no, $photo, $father_name, $f_occupation, $f_contact_no, $service_no, $rank, $mother_name, $m_occupation, $m_contact_no, $guradian_name, $relation, $r_contact_no, $aggre);

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "Data inserted successfully.";
    } else {
        echo "Error inserting data: " . $stmt->error;
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}
?>
