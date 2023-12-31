<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="style.css">
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
                <img src="logo.png"><br><br>
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


                    <!-- Reporting date -->
                    <label>Reporting date</label>
                    <input type="date" name="reporting_date">
                    <br><br>
                    <!-- attempt -->
                    <label>Attempt:</label>
                    <input type="radio" name="attempt" value="1st" />1st
                    <input type="radio" name="attempt" value="2nd" />2nd
                    <input type="radio" name="attempt" value="3rd" />3rd
                    <input type="radio" name="attempt" value="4th" />4th
                    <br><br>
                    <!-- name -->
                    <label>Name</label>
                    <input type="text" required name="Fname" placeholder="First name" maxlength="30" /><br>
                    <br><input type="text" name="Lname" required placeholder="Last name" maxlength="30" />
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
                        <option value="V.D.C">V.D.C<v /option>
                        <option value="R.M">R.M</option>
                        <option value="M.P">M.P</option>
                    </select>
                    <input type="text" name="t_txt_vdc_rm_mp"  placeholder="" maxlength="100" />
                    <br><br>
                    <!-- contact number -->
                    <label>Contact no</label>
                    <input type="tel" id="phone" name="phone" required >
                    <br><br>
                </div>




                <div class="middle-right">
                    <!-- Photo -->
                    <label>Upload photo</label>
                    <input type="file" class="pphoto" required name="pp">
                    <br><br>
                    <h3>
                        <center>Family and Guardian Details</center>
                    </h3>
                    <br><br>
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
                    <input type="text" name="m_occupation" placeholder="" maxlength="30" />
                    <br><br>
                    <!-- contact number -->
                    <label>Contact no</label>
                    <input type="tel" id="phone" name="m_contact_no" required>
                    <br><br>
                    <!-- Guardian's detail -->
                    <label>Guradian's Name</label>
                    <input type="text" name="guradian_name" required placeholder="Full name" maxlength="30" />
                    <br><br>
                    <!-- Guardian relation -->
                    <label>Relation</label>
                    <input type="text" name="Relation" required maxlength="30" />
                    <br><br>
                    <!-- Guardian contact -->
                    <label>Contact no</label>
                    <input type="number" name="r_contact_no" required maxlength="10" />
                    <br><br>
                    <!-- button -->
                    <input type="submit" class="btn" value="Submit">
                    <input type="reset" class="btn" value="Reset">
                </div>

            </div>
            <div class="bottom">
            <P>

                <input type="checkbox" name ="aggre">  I will accept all the rules and regulation of this institute and if do any
                mistakes or if I’m not able to follow the rules and regulation of this institute then I will accept any
                punishment from this AIM GURKHA.
            </P>
        </div>
        </form>
       
    </div>

</body>

</html>