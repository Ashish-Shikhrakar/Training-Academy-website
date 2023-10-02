<?php
include($_SERVER['DOCUMENT_ROOT'] . '/ARMY-WEBSITE-PROJECT/dashboard/common/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/ARMY-WEBSITE-PROJECT/dashboard/common/sidebar.php') ?>

<link rel="stylesheet" href="../css/carda.css">

<section id="interface">
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/ARMY-WEBSITE-PROJECT/dashboard/common/top-menu.php') ?>
    
	<div class="studata">
        
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="container">
				<h2 style="text-align:center">Students Information</h2>

                <!-- <a class="btn btn-primary" href="user_reg.php" role="button" style="float:left;">Add Student</a> -->


				<!-- <a class="btn btn-primary" href="../dashboard.php" role="button">Back</a> -->

				<!-- <a class="btn btn-primary" href="../dashboard.php" role="button">Back</a>
				<a class="btn btn-primary" href="course.php" role="button">Add Course</a> -->

				<table class="table table-border">

                <thead>
						<tr>
							<th>ID</th>
							<th>First Name</th>
							<th>Last Name</th>
                            <th>DOB</th>
                            <th>Contact</th>
							<th>Father Name</th>
							<th>Photo</th>
                            <th>Action</th>
						</tr>
					</thead>

                    <?php
					$conn = mysqli_connect("localhost", "root", "");
					$db = mysqli_select_db($conn, 'army_project');
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}

					$sql = "SELECT * FROM student_reg";
					// Execute the query
					$result = mysqli_query($conn, $sql);

					// Check if there are any rows returned
					if (mysqli_num_rows($result) > 0) {
						// Loop through each row and display the elements
						while ($row = mysqli_fetch_assoc($result)) {
                            $fileName = $row['photo'];
                            echo "<tr>";
							echo "<td>" . $row['st_id'] . "</td>";
							echo "<td>" . $row['fname'] . "</td>";
							echo "<td>" . $row['lname'] . "</td>";
							echo "<td>" . $row['DOB'] . "</td>";
                            echo "<td>" . $row['contact_no'] . "</td>";
                            echo "<td>" . $row['father_name'] . "</td>";
							// echo "<td>" . $row['photo'] . "</td>";
                            if ($row["photo"]) {
								echo '<td><img width="100px" src="../../uploadsS/' . $fileName . '"alt="Image"></td>';
							}

							


							echo "<td>";
                            
                            // echo ' <a  href="user_reg.php"> <button class="btn btn-primary"  onclick="tougleShowMore()">Print</button> </a>';
                            // echo '&nbsp;';
							// <!-- <a class="btn btn-primary" href="">hello</a> -->

							echo '<input type="button" class="btn btn-primary" onclick="printThis(' . $row["st_id"] . ')" value="View More">';
							// echo '<a class="btn btn-primary" href="edit.php" role="button">View More</a>';

							echo '&nbsp;';


							echo '<input type="button" class="btn btn-primary" onclick="editThis(' . $row["st_id"] . ')" value="Edit">';
							echo '&nbsp;';
							// echo '<button  onclcik="deleteThis(' . $row["tid"] . ')">Delete</button>';
							echo '<input class="btn btn-danger" type="button" onclick="deleteThis(' . $row["st_id"] . ')" value="Delete">';

							echo '</td>';
							echo '</tr>';

                        }

                    }

                    ?>
				</table>
			</div>
		</form>
		</div>
</section>


<script>

function printThis(st_id) {
            var form = document.createElement("form");
            form.method = "POST";
            form.action = "print.php";

            var input = document.createElement("input");
            input.type = "hidden";
            input.name = "st_id";
            input.value = st_id;

            form.appendChild(input);

            document.body.appendChild(form);
            form.submit();
        }

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







