<?php
@include("db_connection.php");


$st_id = '';
$attempt = '';
$fname = '';
$lname = '';
$jat = '';
$main_jat = '';
$education = '';
$DOB = '';
$age = '';
$religion = '';
$faculty = '';
$p_address = '';
$p_ward = '';
$p_vdc_rm_mp = '';
$p_txt_vdc_rm_mp = '';
$t_address = '';
$t_ward = '';
$t_vdc_rm_mp = '';
$t_txt_vdc_rm_mp = '';
$contact_no = '';
$name='';

// $name = $_FILES["photo"]["name"];
// $tmp = $_FILES["photo"]["tmp_name"];
// $uploadStatus=move_uploaded_file($tmp, "../../uploadsS/".$name);
// if($uploadStatus){  
//   //echo $name;exit;
// }  

$father_name = '';
$f_occupation = '';
$f_contact_no = '';
$service_no = '';
$rank = '';
$mother_name = '';
$m_occupation = '';
$m_contact_no = '';
$guradian_name = '';
$relation = '';
$r_contact_no = '';


if (isset($_POST["st_id"])) {
    $tid = $_POST["st_id"];


    $sql = "SELECT * FROM student_reg WHERE st_id = '$st_id'";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if there are any rows returned
    if (mysqli_num_rows($result) > 0) {
        // Loop through each row and display the elements

        $row = mysqli_fetch_assoc($result);

        $attempt = $_POST['attempt'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $jat = $_POST['jat'];
        $main_jat = $_POST['main_jat'];
        $education = $_POST['education'];
        $DOB = $_POST['DOB'];
        $age = $_POST['age'];
        $religion = $_POST['religion'];
        $faculty = $_POST['faculty'];
        $p_address = $_POST['p_address'];
        $p_ward = $_POST['p_ward'];
        $p_vdc_rm_mp = $_POST['p_vdc_rm_mp'];
        $p_txt_vdc_rm_mp = $_POST['p_txt_vdc_rm_mp'];
        $t_address = $_POST['t_address'];
        $t_ward = $_POST['t_ward'];
        $t_vdc_rm_mp = $_POST['t_vdc_rm_mp'];
        $t_txt_vdc_rm_mp = $_POST['t_txt_vdc_rm_mp'];
        $contact_no = $_POST['contact_no'];

        $name = $_FILES["photo"]["name"];
        $tmp = $_FILES["photo"]["tmp_name"];
        $uploadStatus=move_uploaded_file($tmp, "../../uploadsS/".$name);
        if($uploadStatus){
          //echo $name;exit;
        }  

        $father_name = $_POST['father_name'];
        $f_occupation = $_POST['f_occupation'];
        $f_contact_no = $_POST['f_contact_no'];
        $service_no = $_POST['service_no'];
        $rank = $_POST['rank'];
        $mother_name = $_POST['mother_name'];
        $m_occupation = $_POST['m_occupation'];
        $m_contact_no = $_POST['m_contact_no'];
        $guradian_name = $_POST['guradian_name'];
        $relation = $_POST['relation'];
        $r_contact_no = $_POST['r_contact_no'];

    }

}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function updateLabels() {
            const selectedDate = new Date(document.getElementById("datePicker").value);
            const bsDate = convertToBS(selectedDate);
            const age = calculateAge(selectedDate);
            document.getElementById("bsdate").value = (bsDate);
            document.getElementById("ag").value = (age);
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

</head>

<body>
    <div class="master">
        <div class="top">
            <div class="top-left">
                <img src="../images/logo.png"><br><br>
                <p>Training Center,Dholahity,Lalitpur
                    Nepal.<br> ph: 01-5574095/9851046632
                </p>
            </div>
            <div class="top-right">
                <table border="1" style="border-collapse:collapse">
                    <tr>
                        <td width="30"></td>
                        <td align="center"> pan no:-602988144</td>
                        <td width="30"></td>
                    </tr>
                </table>
            </div>
        </div>
        <form method="post" action="user_db.php" enctype="multipart/form-data">
            <div class="middle">

                <div class="middle-left">
                    <h2>
                        <center>Application Form</center>
                    </h2>
                    <br>
                    <h3>
                        <center>Personal Detail</center>
                    </h3>


                    <!-- Reporting date
                    <label>Reporting date</label>
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
                    <input type="text" required name="fname" placeholder="Enter First name"value="<?php echo $fname; ?>" maxlength="30" /><br>
                    <br><input type="text" name="lname" required placeholder="Enter Last name" value="<?php echo $lname; ?>" maxlength="30" />
                    <br><br>
                    <!-- jat -->
                    <label>Jaat</label>
                    <input type="text" name="jat" placeholder="Enter your jaat" value="<?php echo $jat ?>" maxlength="30" />
                    <br> <br>
                    <!-- main jat -->
                    <label>Main Jaat</label>
                    <input type="text" name="main_jat" placeholder="Enter your main jaat" maxlength="30" value="<?php echo $main_jat; ?>"/>
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
                    <input type="date" id="datePicker" onchange="updateLabels()" placeholder="Pick your birth date"><br><br>

                    <label id="bsLabel">BS:</label>
                    <input type="text" name="DOB" id="bsdate" placeholder="Birthday in BS" value="<?php echo $DOB; ?>">
                    <!-- <span id="bsValue"></span> -->
                    <br><br>

                    <!-- age -->
                    <label id="ageLabel">Age:</label>
                    <!-- <span id="age" ></span><br><br> -->
                    <input type="text" name="age" id="ag" placeholder="Your age" value="<?php echo $age; ?>">
                    <br><br>
                    <!-- religion -->
                    <label>Religion</label>
                    <input type="text" name="religion" required maxlength="100" placeholder="Enter your religion" value="<?php echo $religion; ?>"/>
                    <br><br>
                    <!-- faculty -->
                    <label> Faculty</label>
                    <input type="text" name="faculty" required placeholder="Enter Faculty" maxlength="100" value="<?php echo $faculty; ?>"/>
                    <br><br>
                    <!--permanent address -->
                    <label>Permanent Address</label>
                    <input type="text" name="p_address" required placeholder="Enter Permanent District" maxlength="100" value="<?php echo $p_address; ?>"/>
                    <br><br>
                    <!--permanent ward -->
                    <label> Ward</label>
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
                    <input type="text" name="p_txt_vdc_rm_mp" required placeholder="Please  choose your address" maxlength="100" value="<?php echo $p_txt_vdc_rm_mp; ?>"/>
                    <br><br>
                    <!--temporary address -->
                    <label>Temporary Address</label>
                    <input type="text" name="t_address" placeholder="Enter Temporary District" maxlength="100" value="<?php echo $t_address; ?>"/>
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
                        <!-- <option value="V.D.C" <?php // echo ($t_vdc_rm_mp === "V.D.C") ? "selected" : ""; ?>>V.D.C</option>
                        <option value="R.M" <?php // echo ($t_vdc_rm_mp === "R.M") ? "selected" : ""; ?>>R.M</option>
                        <option value="M.P" <?php // echo ($t_vdc_rm_mp === "M.P") ? "selected" : ""; ?> >M.P</option> -->

                        <option value="V.D.C">V.D.C</option>
                        <option value="R.M">R.M</option>
                        <option value="M.P">M.P</option>
                    </select>
                    <input type="text" name="t_txt_vdc_rm_mp" placeholder="Please  choose your address" maxlength="100" value="<?php echo $t_txt_vdc_rm_mp; ?>"/>
                    <br><br>
                    <!-- contact number -->
                    <label>Contact no</label>
                    <input type="tel" id="phone" name="contact_no" placeholder="Enter your contact number" required value="<?php echo $contact_no; ?>">
                    <br><br>
                </div>




                <div class="middle-right">
                    <!-- Photo -->
                    <label>Upload photo</label>
                    <input type="file" class="photo" required name="photo">
                    <br><br>
                    <h3>
                        <center>Family and Guardian Details</center>
                    </h3>
                    <br><br>
                    <!-- father's name -->
                    <label>Father's Name</label>
                    <input type="text" name="father_name" required placeholder="Enter father name" maxlength="30" value="<?php echo $father_name; ?>"/>
                    <br><br>
                    <!-- father's occupation -->
                    <label> Occupation</label>
                    <input type="text" name="f_occupation" placeholder="Enter occupation" maxlength="30" value="<?php echo $f_occupation; ?>"/>
                    <br><br>
                    <!-- contact number -->
                    <label>Contact no</label>
                    <input type="tel" id="phone" name="f_contact_no" placeholder="Enter occupation" required value="<?php echo $f_contact_no; ?>">
                    <br><br>
                    <p> If father is /was in the British Army /GSPF/<br>Indian Army
                        /Nepal Government Officier/<br>Nepal Army or Nepal
                        Police then please given<br> his service details.</p>
                    <br><br>
                    <!-- service no. -->
                    <label>Service no</label>
                    <input type="number" name="service_no" placeholder="Enter service number" maxlength="10" value="<?php echo $service_no; ?>"/>
                    <br><br>
                    <!-- rank -->
                    <label>Rank</label>
                    <input type="number" name="rank" placeholder="Enter Rank" maxlength="10" value="<?php echo $rank; ?>"/>
                    <br><br>
                    <!-- Registration -->
                    <label>Regtistration</label>
                    <input type="number" name="regt" placeholder="Enter Regtistration" maxlength="10" value="<?php echo $regt; ?>"/>
                    <br><br>
                    <!-- mother's name -->
                    <label>Mother's Name</label>
                    <input type="text" name="mother_name" required placeholder="Full Mother name" maxlength="30" value="<?php echo $mother_name; ?>"/>
                    <br><br>
                    <!-- mother's occupation -->
                    <label> Occupation</label>
                    <input type="text" name="m_occupation" placeholder="Enter occupation" maxlength="30"value="<?php echo $m_occupation; ?>" />
                    <br><br>
                    <!-- contact number -->
                    <label>Contact no</label>
                    <input type="tel" id="phone" name="m_contact_no" placeholder="Enter contact number" required value="<?php echo $m_contact_no; ?>">
                    <br><br>
                    <!-- Guardian's detail -->
                    <label>Guradian's Name</label>
                    <input type="text" name="guradian_name" placeholder="Enter full name" maxlength="30" value="<?php echo $guradian_name; ?>"/>
                    <br><br>
                    <!-- Guardian relation -->
                    <label>Relation</label>
                    <input type="text" name="relation" placeholder="Enter relation" maxlength="30" value="<?php echo $relation; ?>"/>
                    <br><br>
                    <!-- Guardian contact -->
                    <label>Contact no</label>
                    <input type="number" name="r_contact_no" maxlength="10" placeholder="Enter contact number" value="<?php echo $r_contact_no; ?>"/>
                    <br><br>
                    <!-- button -->
                    <input type="submit" class="btn" value="Submit">
                    <input type="reset" class="btn" value="Reset">
                </div>

            </div>
            <div class="bottom">
            <P>
                <input type="checkbox" name ="aggre"> <b> I will accept all the rules and regulation of this institute and if do any
                mistakes or if I’m not able to follow the rules and regulation of this institute then I will accept any
                punishment from this AIM GURKHA.</b>
                <br>
                <b> नोट: भर्ना गर्दा बुझाएको भर्ना शुल्क कुनै कारण बस CANDIDATE बिभिद कारणले ट्रेनिंग न आएमा या ट्रेनिंग सेन्टर छोडेमा या बहिष्कार गरिएमा फेरी फिर्ता पाइने छैन,धन्यबाद |</b>
                </p>
            </div>
        </form>

    </div>

</body>

</html>


<?php 


$query = "UPDATE `student_reg` SET `attempt`='$attempt',`fname`='$fname',`lname`='$lname',`jat`='$jat',`main_jat`='$main_jat',`education`='$education',`DOB`='$DOB',`age`='$age',`religion`='$religion',`faculty`='$faculty',`p_address`='$p_address',`p_ward`='$p_ward',`p_vdc_rm_mp`='$p_vdc_rm_mp',`p_txt_vdc_rm_mp`='$p_txt_vdc_rm_mp',`t_address`='$t_address',`t_ward`='$t_ward',`t_vdc_rm_mp`='$t_vdc_rm_mp',`t_txt_vdc_rm_mp`='$t_txt_vdc_rm_mp',`contact_no`='$contact_no',`photo`='$name',`father_name`='$father_name',`f_occupation`='$f_occupation',`f_contact_no`='$f_contact_no',`service_no`='$service_no',`rank`='$rank',`mother_name`='$mother_name',`m_occupation`='$m_occupation',`m_contact_no`='$m_contact_no',`guradian_name`='$guradian_name',`relation`='$relation',`r_contact_no`='r_contact_no' WHERE st_id= '$st_id'";



if (mysqli_query($conn, $query)) {
    // 
    // header("location:user_reg.php?error=none");
   
    }
    else{
    echo "Error: " . mysqli_error($conn);
  }
  mysqli_close($conn);
//}
?>