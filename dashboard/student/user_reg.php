



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
                <img src="photo/logo.png"><br><br>
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
        <form method="post" action="dashboard/student/user_db.php" enctype="multipart/form-data" id="myForm">
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
                        <option value="V.D.C">V.D.C<v /option>
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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script type="text/javascript">

    $('document').ready(function(){
        $('#myForm').on('submit',function(e){
            e.preventDefault(); //prevent default form submition
            var FormData = $('#myForm').serialize();

        $.ajax({

            type : 'post',
            url : 'user_db.php',
            data : FormData,
            dataTYpe : 'json',
            encode : true,
            beforeSend : function(){

                $('#mybtn').html('<span class="glyphicon glyphicon-repeat fast-right-spinner"></span> Sending');
            },
            success : function(response){

                response = JSON.parse(response);

                if(response== "ok"){

                    $('sendmessage').html('Your message has been sent successfully.');
                }else{

                    $('errormessage').html(response);
                }

            }

        });

        });


    });


</script>

<!-- </body> -->

<!-- </html> -->





