<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
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
    
</head>

<body>
    
    <div class="master">
        <div class="top">
            <div class="top-left">
                <img src="../images/logo.png"><br>
                <p><b>Training Center,Dholahity,Lalitpur
                <br> <i class="fa fa-phone"></i>
                 01-5574095/+977-9851046632</b>
                </p>
            </div>
            <div class="top-right">
                <table border="1" style="border-collapse:collapse">
                    <tr>
                        <td width="30"></td>
                        <td align="center"><b>pan no:-602988144<b></td>
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
                    <label>First Name</label>
                    <input type="text"  name="fname" required placeholder="First name" maxlength="30" /><br><br>
                    <label>Last Name</label>
                    <input type="text"  name="lname" required placeholder="Last name" maxlength="30" /><br><br>
                    <!-- jat -->
                    <label>Jaat</label>
                    <input type="text" name="jat" required placeholder="" maxlength="30" />
                    <br> <br>
                    <!-- main jat -->
                    <label>Main Jaat</label>
                    <input type="text" name="main_jat" required placeholder="" maxlength="30" />
                    <br><br>
                    <!-- education -->
                    <label>Education</label>
                    <select name="education" id="edu">
                        <option value="see">SEE</option>
                        <option value="10 +2">10 +2</option>
                        <option value="Bachelor">Bachelor</option>
                    </select>
                    <br><br>
                    <!-- date of birth -->
                    <label for="datePicker">Date of Birth:</label>
                   <input type="date" id="datePicker" name="DOB" onchange="updateLabels()"><br><br>

                    <label id="bsLabel">BS:</label>
                    <input type="text" name="bsdt" id="bsdate">
                    <!-- <span id="bsValue"></span> -->
                    <br><br>
                    
                    <!-- age -->
                    <label id="ageLabel">Age:</label>
                   <!-- <span id="age" ></span><br><br> -->
                   <input type="text" name="age" id="ag">
                    <br><br>
                    <!-- religion -->
                    <label>religion</label>
                    <input type="text" required name="religion"  maxlength="100" />
                    <br><br>
                    <!-- faculty -->
                    <label> faculty</label>
                    <input type="text" name="faculty" required  placeholder="District" maxlength="100" />
                    <br><br>
                    <!--permanent address -->
                    <label>Permanent Address</label>
                    <input type="text" name="p_address" required  placeholder="District" maxlength="100" />
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
                    <input type="text" name="p_txt_vdc_rm_mp" required placeholder="" maxlength="100" />
                    <br><br>
                    <!--temporary address -->
                    <label>Temporary Address</label>
                    <input type="text" name="t_address" required placeholder="District" maxlength="100" />
                    <br><br>
                    <!--temporary ward -->
                    <label> Ward</label>
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
                    <input type="text" name="t_txt_vdc_rm_mp" required placeholder="" maxlength="100" />
                    <br><br>
                    <!-- contact number -->
                    <label>Contact no</label>
                    <input type="tel" required id="phone" name="contact_no"  >
                    <br><br>
                </div>




                <div class="middle-right">
                    <!-- Photo -->
                    <p>Upload photo</p>
                    <input type="file" class="pphoto"  name="photo">
                    <br><br>
                    <h3>
                        <center>Family and Guardian Details</center>
                    </h3>
                    <br><br>
                    <!-- father's name -->
                    <label>Father's Name</label>
                    <input type="text" name="father_name" required  placeholder="Enter name" maxlength="30" />
                    <br><br>
                    <!-- father's occupation -->
                    <label> Occupation</label>
                    <input type="text" name="f_occupation" required placeholder="" maxlength="30" />
                    <br><br>
                    <!-- contact number -->
                    <label>Contact no</label>
                    <input type="tel" id="phone" required name="f_contact_no"  >
                    <br><br>
                    <p> If father is /was in the British Army /GSPF/<br>Indian Army
                        /Nepal Government Officier/<br>Nepal Army or Nepal
                        Police then please given<br> his service details.</p>
                    <br><br>
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
                    <!-- mother's name -->
                    <label>Mother's Name</label>
                    <input type="text" name="mother_name" required placeholder="Full name" maxlength="30" />
                    <br><br>
                    <!-- mother's occupation -->
                    <label> Occupation</label>
                    <input type="text" name="m_occupation" required placeholder="" maxlength="30" />
                    <br><br>
                    <!-- contact number -->
                    <label>Contact no</label>
                    <input type="tel" id="phone" required name="m_contact_no" >
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
                    <input type="tel" name="r_contact_no"  maxlength="10" />
                    <br><br><br>
                    <!-- button -->
                    <input type="submit" class="btn" value="Submit" style="height:45px">
                    <input type="reset" class="btn" value="Reset" style="height:45px">
                </div>

            </div>
            <div class="bottom">
            <P>

               <label for="check"><input type="checkbox" id="check" name ="aggre"> </label> <b> I will accept all the rules and regulation of this institute and if do any
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
