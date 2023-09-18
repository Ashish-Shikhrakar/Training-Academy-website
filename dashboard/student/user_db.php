



<?php
include ('db_connection.php');
// Database configuration
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

// Set the charset to UTF-8
$conn->set_charset("utf8");


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



$error="";
$attempt=$fname=$lname=$jat=$main_jat=$education=$DOB=$age=$religion=$faculty=$p_address=$p_vdc_rm_mp=$p_txt_vdc_rm_mp=$t_address=$t_vdc_rm_mp=$p_vdc_rm_mp=$t_txt_vdc_rm_mp=$father_name=$f_occupation=$mother_name=$m_occupation=$guradian_name=$relation="";
$aggre = false;
$valch=true;

if(isset($_POST['aggre'])){
$aggre=$_POST['aggre'];
}
if($aggre){
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    // print_r($_POST);
    //validation
    //validation for attempt
    if(empty($_POST['attempt'])){
        $error.="<br>select attempt";
        $valch=false;
    }
    else{
        $attempt =test_input( $_POST['attempt']);//required
    }

    //validation for first name
    if(empty($_POST['fname'])){
        $error.="<br>first name required";
        $valch=false;
    }
    else{
        $fname =test_input($_POST['fname']);//required
        if(test_name($fname)==false){
            $error.="<br> enter valid name";
            $valch=false;
        }
    }

    //validation for last name
    if(empty($_POST['lname'])){
        $error.="<br>last name required";
        $valch=false;
    }
    else{
        $lname =test_input($_POST['lname']);//required
        if(test_name($lname)==false){
            $error.="<br> enter valid name";
            $valch=false;
        }        
    }

    //validation for jat
    if(empty($_POST['jat'])){
        $error.="<br>jat required";
        $valch=false;
    }
    else{
        $jat =test_input($_POST['jat']);//required
        if(test_name($jat)==false){
            $error.="<br> enter valid jat";
            $valch=false;
        }
    }

    //validation for main jat
    if(empty($_POST['main_jat'])){
        $error.="<br>main jat required";
        $valch=false;
    }
    else{
        $main_jat = test_input($_POST['main_jat']);//required
        if(test_name($main_jat)==false){
            $error.="<br> enter valid main jat";
            $valch=false;
        }
    }

    //validation for education
    if(empty($_POST['education'])){
        $error.="<br>eduation required";
        $valch=false;
    }
    else{
        $education = test_input($_POST['education']);//required
    }


    $DOB = $_POST['DOB'];//required
    // console.log($DOB)
    $age = $_POST['age'];//required must be less than 21
    
    // $spanValue = $_POST['spanValue'];

    //validation for religion
    if(empty($_POST['religion'])){
        $error.="<br>religion required";
        $valch=false;
    }
    else{
        $religion = $_POST['religion'];//required
        if(test_name($religion)==false){
            $error.="<br> enter valid religin";
            $valch=false;
        }
    }

    //validation for faculty
    if(empty($_POST['faculty'])){
        $error.="<br>faculty required";
        $valch=false;
    }
    else{
        $faculty = test_input($_POST['faculty']);//required
        if(test_name($faculty)==false){
            $error.="<br> enter valid faculty";
            $valch=false;
        }
    }

    //validation for permanent address
    if(empty($_POST['p_address'])){
        $error.="<br>permanent address required";
        $valch=false;
    }
    else{
        $p_address = test_input($_POST['p_address']);//required
        if(test_name($p_address)==false){
            $error.="<br> enter valid district";
            $valch=false;
        }
    }

    //validation for for ward
    $p_ward = $_POST['p_ward'];//required

    //validation for vdc/rm/mp
    if(empty($_POST['p_vdc_rm_mp'])){
        $error.="<br>permanent p_vdc_rm_mp required";
        $valch=false;
    }
    else{
        $p_vdc_rm_mp = test_input($_POST['p_vdc_rm_mp']);//required
    }

    //validation for vdc/rm/mp
    if(empty($_POST['p_txt_vdc_rm_mp'])){
        $error.="<br>permanent text p_vdc_rm_mp required";
        $valch=false;
    }
    else{
        $p_txt_vdc_rm_mp =test_input($_POST['p_txt_vdc_rm_mp']);//required
        if(test_name($p_txt_vdc_rm_mp)==false){
            $error.="<br> enter valid address";
            $valch=false;
        }
    }


    //$p_rm_mp_text = '';

    //validation for temporary address
    if(empty($_POST['t_address'])){
        $error.="<br>temporary address required";
        $valch=false;
    }
    else{
        $t_address = test_input($_POST['t_address']);//not necessary
        if(test_name($t_address)==false){
            $error.="<br> enter valid addres";
            $valch=false;
        }
    }


    $p_ward = $_POST['p_ward'];//required

    //validation for 
    if(empty($_POST['t_vdc_rm_mp'])){
        $error.="<br>temporary p_vdc_rm_mp required";
        $valch=false;
    }
    else{
        $t_vdc_rm_mp = test_input($_POST['t_vdc_rm_mp']);//not necessary
    }

    //validation for vdc/rm/mp
    if(empty($_POST['t_txt_vdc_rm_mp'])){
        $error.="<br>temporary text p_vdc_rm_mp required";
        $valch=false;
    }
    else{
        $t_txt_vdc_rm_mp = test_input($_POST['t_txt_vdc_rm_mp']);//not necessary
        if(test_name($t_txt_vdc_rm_mp)==false){
            $error.="<br> enter valid address";
            $valch=false;
        }
    }


    $t_ward = $_POST['t_ward'];//not necessary
    //$t_rm_mp_text = '';

    //validation for contact number
    if(empty($_POST['contact_no'])){
        $error.="<br>contact required";
        $valch=false;
    }
    else{
        $contact_no=$_POST['contact_no'];//required max length 10
        if(validatePhone($contact_no)==false){
            $error.="<br> enter valid number";
            $valch=false;
        }
    }


    // // Process VDC/RM/MP selection for permanent address
    // if ($p_vdc_rm_mp === 'V.D.C') {
    //     $p_vdc_rm_mp_text = $_POST['p_txt_vdc_rm_mp'];
    // } elseif ($p_vdc_rm_mp === 'R.M') {
    //     $p_rm_mp_text = $_POST['p_txt_vdc_rm_mp'];
    // }
    // // Process VDC/RM/MP selection for temporary address
    // // Process VDC/RM/MP selection for temporary address
    // if ($t_vdc_rm_mp === 'V.D.C') {
    //     $t_vdc_rm_mp_text = $_POST['t_txt_vdc_rm_mp'];
    // } elseif ($t_vdc_rm_mp === 'R.M') {
    //     $t_rm_mp_text = $_POST['t_txt_vdc_rm_mp'];
    // }
    // $photo = $_FILES['pp']['name'];

    $name = $_FILES["photo"]["name"];
    $tmp = $_FILES["photo"]["tmp_name"];
    // print_R($_FILES);exit;
    
    //photo validation
    if (! file_exists($_FILES["photo"]["tmp_name"])) {
        $error.="<br> please input photo";
        $valch=false;
    }
    else{
    $fileinfo = @getimagesize($_FILES["photo"]["tmp_name"]);
    $width = $fileinfo[0];
    $height = $fileinfo[1];
    // print_r($fileinfo);

    $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg"
    );
     // Get image file extension
    $file_extension = pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION);
    // Validate file input to check if is with valid extension
    if (! in_array($file_extension, $allowed_image_extension)) {
       $error.="<br> Upload valiid images. Only PNG and JPEG are allowed.";
       $valch=false;
    }    // Validate image file size
    else if (($_FILES["photo"]["size"] > 2000000)) {
        $error.="<br>Image size exceeds 2MB";
        $valch=false;
    }    // Validate image file dimension
    // else if ($width > "300" || $height > "200") {
    //     $error.="<br>Image dimension should be within 300X200";
    //     $valch=false;
    // }

    }
    $uploadStatus=move_uploaded_file($tmp, "../../uploadsS/".$name);
    if($uploadStatus){
      
      //echo $name;exit;
    }  

    //validation for father name
    if(empty($_POST['father_name'])){
        $error.="<br>father name required";
        $valch=false;
    }
    else{
        $father_name = test_input($_POST['father_name']);//required
        if(test_name($father_name)==false){
            $error.="<br> enter valid name";
            $valch=false;
        }
    }


    if(empty($_POST['f_occupation'])){
        $error.="<br>father occupation required";
        $valch=false;
    }
    else{
        $f_occupation = test_input($_POST['f_occupation']);//required
        if(test_name($f_occupation)==false){
            $error.="<br> enter valid name";
            $valch=false;
        }
    }


    if(empty($_POST['f_contact_no'])){
        $error.="<br>father contact required";
        $valch=false;
    }
    else{
        $f_contact_no = $_POST['f_contact_no'];//required
        if(validatePhone($f_contact_no)==false){
            $error.="<br> enter valid number";
            $valch=false;
        }
    }


    $service_no = $_POST['service_no'];//not necessary
    $rank = test_input($_POST['rank']);//not necessary


    if(empty($_POST['mother_name'])){
        $error.="<br>mother name required";
        $valch=false;
    }
    else{
        $mother_name = test_input($_POST['mother_name']);//required
        if(test_name($mother_name)==false){
            $error.="<br> enter valid name";
            $valch=false;
        }
    }


    if(empty($_POST['m_occupation'])){
        $error.="<br>mother occupation required";
        $valch=false;
    }
    else{
        $m_occupation = test_input($_POST['m_occupation']);//required   
        if(test_name($m_occupation)==false){
            $error.="<br> enter valid occupation";
            $valch=false;
        }
    }


    if(empty($_POST['m_contact_no'])){
        $error.="<br>mother contact required";
        $valch=false;
    }
    else{
        $m_contact_no = $_POST['m_contact_no'];//required
        if(validatePhone($m_contact_no)==false){
            $error.="<br> enter valid number";
            $valch=false;
        }
    }


    if(empty($_POST['guradian_name'])){
        $error.="<br>gurdian name required";
        $valch=false;
    }
    else{
        $guradian_name = test_input($_POST['guradian_name']);//not necessary
        if(test_name($guradian_name)==false){
            $error.="<br> enter valid name";
            $valch=false;
        }
    }


    if(empty($_POST['relation'])){
        $error.="<br>gurdian relation  required";
        $valch=false;
    }
    else{
        $relation = test_input($_POST['relation']);//not necessary
        if(test_name($relation)==false){
            $error.="<br> enter valid relation";
            $valch=false;
        }
    }


    if(empty($_POST['r_contact_no'])){
        $error.="<br>gurdian contact  required";
        $valch=false;
    }
    else{
        $r_contact_no = $_POST['r_contact_no'];//not necessary
        if(validatePhone($r_contact_no)==false){
            $error.="<br> enter valid number";
            $valch=false;
        }
    }
  
    echo $error;

    // $aggre = isset($_POST['aggre']) ? 1 : 0;
    // Prepare and bind the form data to insert into the database

    if($valch==true){

    $stmt = $conn->prepare("INSERT INTO student_reg (attempt, fname, lname, jat, main_jat, education, DOB, age,religion, faculty, p_address,p_ward, p_vdc_rm_mp, p_txt_vdc_rm_mp,t_address, t_ward, t_vdc_rm_mp, t_txt_vdc_rm_mp, contact_no,photo,father_name, f_occupation, f_contact_no, service_no, rank, mother_name, m_occupation, m_contact_no, guradian_name, relation, r_contact_no) 
     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssssssisssisssississsiiississi", $attempt, $fname, $lname, $jat, $main_jat, $education, $DOB,$age, $religion, $faculty, $p_address,$p_ward, $p_vdc_rm_mp, $p_txt_vdc_rm_mp,$t_address,$t_ward, $t_vdc_rm_mp, $t_txt_vdc_rm_mp,$contact_no, $name, $father_name, $f_occupation, $f_contact_no, $service_no, $rank, $mother_name, $m_occupation,$m_contact_no, $guradian_name, $relation, $r_contact_no);
        //ssssssiisssisssisssssiiiississi//Change blind parameter.
        // Execute the prepared statement
    
        if ($stmt->execute()) {
            $message = "ok";
            

        } else {
            $message = "could not send/ insert";
           
        }
        echo json_encode($message);

        $stmt->close();
        $conn->close();
    }   
    // Close the statement and database connection
    
    }
}
else{
    echo "Please verified the terms and condition ! THANK YOU !!!";
}






?>

