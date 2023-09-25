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
        "PNG",
        "JPG",
        "jpg",
        "JPEG",
        "jpeg"
    );
     // Get image file extension
    $file_extension = pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION);
    // Validate file input to check if is with valid extension
    if (! in_array($file_extension, $allowed_image_extension)) {
       $error.="<br> Upload valiid images. Only PNG and JPEG are allowed.";
       $valch=false;
    }    // Validate image file size
    else if (($_FILES["photo"]["size"] > 5000000)) {
        $error.="<br>Image size exceeds 5MB";
        $valch=false;
    }    // Validate image file dimension
    // else if ($width > "300" || $height > "200") {
    //     $error.="<br>Image dimension should be within 300X200";
    //     $valch=false;
    // }

    }
    
    $destination=$_SERVER["DOCUMENT_ROOT"]."/army-website-project/uploadsS/".$name ;
    $uploadStatus=move_uploaded_file($tmp,$destination);

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
            // header("location: ../../index.php");
            

        } else {
            $message = "could not send/ insert";
            // header("location: ../../index.php");
           
        }
        
        print json_encode($message);

        $stmt->close();
        $conn->close();
    }
    
    else{
        echo $error;
    }
    
    }
}
else{
   echo"Please verified the terms and condition ! THANK YOU !!!";
}


?>







<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- <link rel="stylesheet" href="dashboard/student/style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        function updateLabels() {
            const selectedDate = new Date(document.getElementById("datePicker").value);
            const bsDate = convertToBS(selectedDate);
            const age = calculateAge(selectedDate);
            document.getElementById("bsdate").value = (bsDate);
            document.getElementById("ag").value=(age);
            console.log(selectedDate);
        }

        function convertToBS(date) {
            const bsYear = date.getFullYear() + 57;
            const bsMonth = (date.getMonth() + 3) % 12 || 12;
            const bsDay = (date.getDate() + 2) % 30 || 30;
            return `${bsYear}-${bsMonth}-${bsDay}`;
        }

        function calculateAge(selectedDate) {
            const currentDate = new Date();
            let age = currentDate.getFullYear() - selectedDate.getFullYear();
            console.log(age)

            const currentMonth = currentDate.getMonth();
            const selectedMonth = selectedDate.getMonth();

            const currentDay = currentDate.getDate();
            const selectedDay = selectedDate.getDate();

            if (currentMonth < selectedMonth || (currentMonth === selectedMonth && currentDay < selectedDay)) {
                age--;
            }

            return Math.max(age, 0);
        }
    </script>
    <style>
        .form-button{
            width: 80px;
            margin-top: 50px;
            padding: 10px 0;
            background: #A7A44E;
            color: #fff;
            border: 0;
            outline: none;
            font-size: 14px;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 0 5px 5px rgba(0, 0, 0,0.2);
        }
        .opt-box{
            border: 2px dashed;
            margin: 5px auto 5px auto;
            padding: 5px;
            padding-left: 10px;
        }
    </style>
<!-- </head> -->

<!-- <body> -->
    <div class="master">
        <div class="top">
            <div class="top-left">
                <img src="./photo/logo.png"><br><br>
            </div>
            <div>
            <div style="float:left;">
            <p><b><i class="fa-solid fa-location-dot"></i> Training Center,Dholahity,Lalitpur,
                    Nepal.<br> <i class="fa fa-phone"></i> Phone: 01-5574095/9851046632
                </p>
            </div>
            <div class="top-right" style="float:right;">
                <table border="1" style="border-collapse:collapse">
                    <tr>
                        <td width="30"></td>
                        <td align="center" style="padding:5px"><b> pan no:-602988144</td>
                        <td width="30"></td>
                    </tr>
                </table>
            </div>
            </div>
            
        </div>
        <!-- method="post" action="dashboard/student/user_db.php" -->

        <form method="post"  id="myForm" enctype="multipart/form-data">
            <div class="middle">
                <div class="middle-left" style="clear:both;">
                    <h2 class="servicetitle">
                        <center>Application Form</center>
                    </h2>
                    <br>
                
                    <div style="float:left;border-right: 2px solid; padding-right: 100px;">
                    <h3>
                        Personal Details
                    </h3>
                    <br>
                    <!-- Reporting date -->
                    <!-- <label>Reporting date</label>
                    <input type="date" name="reporting_date">
                    <br><br> -->
                    <!-- attempt -->
                    
                    <label>Attempt:</label>
                    <input type="radio" name="attempt" value="1st" />1st
                    <input type="radio" name="attempt" value="2nd" />2nd
                    <input type="radio" name="attempt" value="3rd" />3rd
                    <input type="radio" name="attempt" value="4th" />4th
                    <br><br>
                    <!-- name -->
                    <label>Name</label>
                    <input type="text" required name="fname" placeholder="First name" maxlength="30" style="width: 150px;" />
                    <input type="text" name="lname" required placeholder="Last name" maxlength="30" style="width: 150px;"/>
                    <br><br>
                    <!-- jat -->
                    <label>Jaat</label>
                    <input type="text" name="jat" placeholder="" maxlength="30" />
                    <br> <br>
                    <!-- main jat -->
                    <label>Main Jaat</label>
                    <input type="text" name="main_jat" placeholder="" maxlength="30" />
                    <br><br>
                    <!-- education -->
                    <label>Educatiion</label>
                    <select name="education" id="edu">
                        <option value="see">SEE</option>
                        <option value="10 +2">10 +2</option>
                        <option value="Bachelor">Bachelor</option>
                    </select>
                    <br><br>
                    <!-- date of birth -->
                    <label for="datePicker">Date of Birth:</label>
                   <input type="date" id="datePicker"  onchange="updateLabels()"><br><br>

                    <label id="bsLabel">BS:</label>
                    <input type="text" name="DOB" id="bsdate">
                    <!-- <span id="bsValue"></span> -->
                    <br><br>
                    
                    <!-- age -->
                    <label id="ageLabel">Age:</label>
                   <!-- <span id="age" ></span><br><br> -->
                   <input type="text" name="age" id="ag">
                    <br><br>
                    <!-- religion -->
                    <label>religion</label>
                    <input type="text" name="religion" required maxlength="100" />
                    <br><br>
                    <!-- faculty -->
                    <label> faculty</label>
                    <input type="text" name="faculty" required placeholder="District" maxlength="100" />
                    <br><br>
                    <!--permanent address -->
                    <label>Permanent Address</label>
                    <input type="text" name="p_address" required placeholder="District" maxlength="100" />
                    <br><br>
                    <!--permanent ward -->
                    <label> ward</label>
                    <select name="p_ward" id="ward">
                        <option value="null"></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                    </select>
                    <br><br>
                    <!--permanent VDC/RM/MP -->
                    <select name="p_vdc_rm_mp">
                        <option value="V.D.C">V.D.C</option>
                        <option value="R.M">R.M</option>
                        <option value="M.P">M.P</option>
                    </select>
                    <input type="text" name="p_txt_vdc_rm_mp" required placeholder="" maxlength="100" />
                    <br><br>
                    <!--temporary address -->
                    <label>Temporary Address</label>
                    <input type="text" name="t_address" placeholder="District" maxlength="100" />
                    <br><br>
                    <!--temporary ward -->
                    <label> ward</label>
                    <select name="t_ward" id="ward">
                        <option value="null"></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                    </select>
                    <br><br>
                    <!--temporary VDC/RM/MP -->
                    <select name="t_vdc_rm_mp">
                        <option value="V.D.C">V.D.C</option>
                        <option value="R.M">R.M</option>
                        <option value="M.P">M.P</option>
                    </select>
                    <input type="text" name="t_txt_vdc_rm_mp"  placeholder="" maxlength="100" />
                    <br><br>
                    <!-- contact number -->
                    <label>Contact no</label>
                    <input type="tel" id="phone" name="contact_no" required >
                    <br><br>
                    <!-- Photo -->
                    <label>Upload photo</label>
                    <input type="file" class="photo" required name="photo">
                    </div>
                 </div>

                    
                    

                <div class="middle-right" style="float:right;">
                    <h3>
                        Family and Guardian Details
                    </h3>
                    <br>
                    <!-- father's name -->
                    <label>Father's Name</label>
                    <input type="text" name="father_name" required placeholder="Enter name" maxlength="30" />
                    <br><br>
                    <!-- father's occupation -->
                    <label> Occupation</label>
                    <input type="text" name="f_occupation" placeholder="" maxlength="30" />
                    <br><br>
                    <!-- contact number -->
                    <label>Contact no</label>
                    <input type="tel" id="phone" name="f_contact_no"  required>
                    <br><br>
                    <div class="opt-box">
                    <p style="font-weight:600">If father is /was in the British Army /GSPF/<br>Indian Army
                        /Nepal Government Officier/<br>Nepal Army or Nepal
                        Police then please given<br> his service details.</p>
                    <br>
                    <!-- service no. -->
                    <label>Service no</label>
                    <input type="number" name="service_no" maxlength="10" />
                    <br><br>
                    <!-- rank -->
                    <label>Rank</label>
                    <input type="number" name="rank" maxlength="10" />
                    <br><br>
                    <!-- Registration -->
                    <label>Regt</label>
                    <input type="number" name="regt" maxlength="10" />
                    <br><br>
                    </div>
                    <br>
                    <!-- mother's name -->
                    <label>Mother's Name</label>
                    <input type="text" name="mother_name" required placeholder="Full name" maxlength="30" />
                    <br><br>
                    <!-- mother's occupation -->
                    <label> Occupation</label>
                    <input type="text" name="m_occupation" placeholder="" maxlength="30" />
                    <br><br>
                    <!-- contact number -->
                    <label>Contact no</label>
                    <input type="tel" id="phone" name="m_contact_no" required>
                    <br><br>
                    <!-- Guardian's detail -->
                    <label>Guradian's Name</label>
                    <input type="text" name="guradian_name"  placeholder="Full name" maxlength="30" />
                    <br><br>
                    <!-- Guardian relation -->
                    <label>Relation</label>
                    <input type="text" name="relation"  maxlength="30" />
                    <br><br>
                    <!-- Guardian contact -->
                    <label>Contact no</label>
                    <input type="number" name="r_contact_no"  maxlength="10" />
                    <br><br>
                    <!-- button -->
                    <input type="submit" class="form-button" value="Submit" name="submit" id="mybtn">
                    <input type="reset" class="form-button" value="Reset">
                </div>

            </div>
            <div class="bottom" style="clear:both;">
            <br><br>
            <P>
                <input type="checkbox" name ="aggre"><b>I will accept all the rules and regulation of this institute and if do any
                mistakes or if I’m not able to follow the rules and regulation of this institute then I will accept any
                punishment from this AIM GURKHA.
                <br>नोट: भर्ना गर्दा बुझाएको भर्ना शुल्क कुनै कारण बस CANDIDATE बिभिद कारणले ट्रेनिंग न आएमा या ट्रेनिंग सेन्टर छोडेमा या बहिष्कार गरिएमा फेरी फिर्ता पाइने छैन,धन्यबाद |</b>
            </P>
            </div>
        </form>
       
    </div>


    


    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript">

    $('document').ready(function(){
        $('#myForm').on('submit',function(e){
            e.preventDefault(); //prevent default form submition
            var FormData = $('#myForm').serialize();

        $.ajax({

            type : 'post',
            url : 'dashboard/student/user_db.php',
            data : FormData,
            dataType : 'json',
            encode : true,
            // beforeSend : function(){

            //     $('#mybtn').html('<span class="glyphicon glyphicon-repeat fast-right-spinner"></span> Sending');
            // },
            success : function(response){

                var data = JSON.parse(response);

                if(data== "ok"){
                                    alert ("insert");
                    // $('sendmessage').html('Your message has been sent successfully.');
                }else{
                    alert ("error");

                    // $('errormessage').html(data);
                }

            }

           
        });
      return false;

        });


    });


</script> -->

<!-- </body> -->

<!-- </html> -->

