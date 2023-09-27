<?php 

        include($_SERVER['DOCUMENT_ROOT'].'/ARMY-WEBSITE-PROJECT/dashboard/common/header.php');
        include($_SERVER['DOCUMENT_ROOT'].'/ARMY-WEBSITE-PROJECT/dashboard/common/sidebar.php')
?>

    <link rel="stylesheet" href="../css/carda.css">
   
    <script>
        function tougleShowMore(){
            alert("Working");
            // alert(card_id);
            // static let isCardVisible = false;
            // let show = document.getElementById(card_id);
            // if (isCardVisible) {
            //     show.style.display.none;
            //     isCardVisible = false;
            // } else {
            //     show.style.display.block;
            //     isCardVisible = true;
            // }
        }
    </script>

<section id ="interface" >
<?php  
   include($_SERVER['DOCUMENT_ROOT'].'/ARMY-WEBSITE-PROJECT/dashboard/common/top-menu.php')
?>
	
    <div class="studentdata">

    <form action="" method="POST" enctype="multipart/form-data">
		<div class="container">
			<h2 style="text-align:center">Student Information</h2>

			<a class="btn btn-primary" href="user_reg.php" role="button">Add Student</a> 
             <!-- <a class="btn btn-primary" href="../dashboard.php" role="button">Back</a> -->
		
                <div class="card-all table table-border">
				
                    <?php
				
				        $sql = "SELECT * FROM student_reg";

                        // Execute the query
                        $result = mysqli_query($conn, $sql);

                        // Check if there are any rows returned
                        if (mysqli_num_rows($result) > 0) {

                            // Loop through each row and display the elements
                                while ($row = mysqli_fetch_assoc($result)) {
                                $card_id = "card_".$row['st_id'];

                                $fileName=$row['photo'];
                                echo "<div class='card1'>";
                                
                                echo "<label>ID: </label>";
                                echo "<span>" . $row['st_id'] . "</span><br>";

                                echo "<label>Attempt: </label>";
                                echo "<span>" . $row['attempt'] . "</span><br>";

                                echo "<label>First Name: </label>";
                                echo "<span>" . $row['fname'] . "</span><br>";

                                echo "<label>Last Name: </label>";
                                echo "<span>" . $row['lname'] . "</span><br>";



                                echo "<div id='$card_id'>";




                                echo "<label>Jaat: </label>";
                                echo "<span>" . $row['jat'] . "</span><br>";

                                echo "<label>Main Jaat: </label>";
                                echo "<span>" . $row['main_jat'] . "</span><br>";

                                echo "<label>Education: </label>";
                                echo "<span>" . $row['education'] . "</span><br>";

                                echo "<label>DOB: </label>";
                                echo "<span>" . $row['DOB'] . "</span><br>";

                                echo "<label>Age: </label>";
                                echo "<span>" . $row['age'] . "</span><br>";

                                echo "<label>Religion: </label>";
                                echo "<span>" . $row['religion'] . "</span><br>";

                                echo "<label>Faculty: </label>";
                                echo "<span>" . $row['faculty'] . "</span><br>";

                                echo "<label>P-Address: </label>";
                                echo "<span>" . $row['p_address'] . "</span><br>";

                                echo "<label>Ward: </label>";
                                echo "<span>" . $row['p_ward'] . "</span><br>";

                                echo "<label>VDC/RM/MP: </label>";
                                echo "<span>" . $row['p_vdc_rm_mp'] . "</span><br>";

                                echo "<label>V.D.C /R.M /M.P: </label>";
                                echo "<span>" . $row['p_txt_vdc_rm_mp'] . "</span><br>";

                                echo "<label>T-Address: </label>";
                                echo "<span>" . $row['t_address'] . "</span><br>";

                                echo "<label>Ward: </label>";
                                echo "<span>" . $row['t_ward'] . "</span><br>";

                                echo "<label>VDC/RM/MP: </label>";
                                echo "<span>" . $row['t_vdc_rm_mp'] . "</span><br>";

                                echo "<label>V.D.C /R.M /M.P: </label>";
                                echo "<span>" . $row['t_txt_vdc_rm_mp'] . "</span><br>";

                                echo "<label>Contact No.: </label>";
                                echo "<span>" . $row['contact_no'] . "</span><br>";

                                echo "<label>Photo: </label>";
                                if ($row["photo"]) {
                                    echo '<span><img width="100px" src="../../uploadsS/'.$fileName. '"alt="Image"></span><br>';
                                }

                                echo "<label>Father Name: </label>";
                                echo "<span>" . $row['father_name'] . "</span><br>";

                                echo "<label>Occupation: </label>";
                                echo "<span>" . $row['f_occupation'] . "</span><br>";

                                echo "<label>Contact No.: </label>";
                                echo "<span>" . $row['f_contact_no'] . "</span><br>";

                                echo "<label>Service No.: </label>";
                                echo "<span>" . $row['service_no'] . "</span><br>";

                                echo "<label>Rank: </label>";
                                echo "<span>" . $row['rank'] . "</span><br>";

                                // echo "<!-- <label>Registration: </label> -->";
                                // echo "<span>" . $row['regt'] . "</span><br>";

                                echo "<label>Mother Name: </label>";
                                echo "<span>" . $row['mother_name'] . "</span><br>";

                                echo "<label>Occupation: </label>";
                                echo "<span>" . $row['m_occupation'] . "</span><br>";

                                echo "<label>Contact No.: </label>";
                                echo "<span>" . $row['m_contact_no'] . "</span><br>";

                                echo "<label> Guardian's Name: </label>";
                                echo "<span>" . $row['guradian_name'] . "</span><br>";

                                echo "<label>Relation: </label>";
                                echo "<span>" . $row['relation'] . "</span><br>";

                                echo "<label>Contact No.: </label>";
                                echo "<span>" . $row['r_contact_no'] . "</span><br>";

                                echo "</div>"; // card_count

                                
                                echo "<label>Action: </label>";

                                echo "<span>";
                                
                                // <!-- <a class="btn btn-primary" href="">hello</a> -->
                                // echo '<button class="btn btn-primary" onclick="tougleShowMore()">Show more</button>';
                                echo '<input type="button" class="btn btn-primary" onclick="editThis('.$row["st_id"].')" value="Edit">';
                                echo '&nbsp';
                                // echo '<button  onclcik="deleteThis(' . $row["st_id"] . ')">Delete</button>';
                                echo '<input class="btn btn-danger" type="button" onclick="deleteThis('.$row["st_id"].')" value="Delete">';

                                echo '</span>';
                            echo '</div>';

					}
				    } else {
					echo "No elements found in the table.";
                    }

                    ?>
                    
            </div>

</form>
</div>
            
</section>

 

<script>

        function editThis(st_id) {
            var form = document.createElement("form");
            form.method = "POST";
            form.action = "edit.php";

            var input = document.createElement("input");
            input.type = "hidden";
            input.name = "st_id";
            input.value = st_id;

            form.appendChild(input);

            document.body.appendChild(form);
            form.submit();
        }

        function deleteThis(st_id) {
            var form = document.createElement("form");
            form.method = "POST";
            form.action = "delete.php";

            var input = document.createElement("input");
            input.type = "hidden";
            input.name = "st_id";
            input.value = st_id;

            form.appendChild(input);

            document.body.appendChild(form);
            form.submit();
        }
    </script>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"







