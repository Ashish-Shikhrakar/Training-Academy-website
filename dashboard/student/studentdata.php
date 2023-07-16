<?php   

@include("db_connection.php");
?>



<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
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
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
		<div class="container my-9">
			<h2 style="text-align:center">Student Information</h2>

			<a class="btn btn-primary" href="user_reg.php" role="button">Add Student</a>  <a class="btn btn-primary" href="../dashboard.php" role="button">Back</a>
			<!-- <table border="1" cellpadding="7px" cellspacing="7px" style=" border-collapse: collapse" ;> -->
                <table class="table table-border">
				<thead>
					<tr>
						<th>ID</th>
                        <th>Attempt</th>
						<th>First Name</th>
                        <th>Last Name</th>
                        <th>Jaat</th>
                        <th>Main Jaat</th>
                        <th>Education</th>
                        <th>Date of birth</th>
                        <th>Age</th>
                        <th>Religion</th>
                        <th>Faculty</th>
						<th>Perm Address</th>
                        <th>Ward</th>
                        <th>VDC/RM/MP</th>
                        <th>V.D.C /R.M /M.P</th>
                        <th>Temp Address</th>
                        <th>Ward</th>
                        <th>VDC/RM/MP</th>
                        <th>V.D.C /R.M /M.P</th>
                        <th>Contact No.</th>
                        <th>Photo</th>
                        <th>Father Name</th>
                        <th>Occupation</th>
                        <th>Contact No.</th>
                        <th>Service No.</th>
                        <th>Rank</th>
                        <!-- <th>Registration</th> -->
                        <th>Mother Name</th>
                        <th>Occupation</th>
                        <th>Contact No.</th>
						<th>Guardian's Name</th>
						<th>Relation</th>
						<th>Contact No.</th>
                        <th>Action</th>
					</tr>
			</thead>
                <?php
				// $conn = mysqli_connect("localhost", "root", "");
				// $db = mysqli_select_db($conn, 'army_project');

				// $query = "SELECT * FROM student_reg";
				// $query_run = mysqli_query($conn,$query);
				// while ($row = mysqli_fetch_array($query_run)) {
				// Check if the connection was successful
				// if (!$conn) {
				// 	die("Connection failed: " . mysqli_connect_error());
				// }


				$sql = "SELECT * FROM student_reg";

				// Execute the query
				$result = mysqli_query($conn, $sql);

				// Check if there are any rows returned
				if (mysqli_num_rows($result) > 0) {
					// Loop through each row and display the elements
					while ($row = mysqli_fetch_assoc($result)) {
                        $fileName=$row['photo'];
                        echo "<tr>";
						echo "<td>" . $row['st_id'] . "</td>";
						echo "<td>" . $row['attempt'] . "</td>";
						echo "<td>" . $row['fname'] . "</td>";
						echo "<td>" . $row['lname'] . "</td>";
						echo "<td>" . $row['jat'] . "</td>";
						echo "<td>" . $row['main_jat'] . "</td>";
						echo "<td>" . $row['education'] . "</td>";
                        echo "<td>" . $row['DOB'] . "</td>";
                        echo "<td>" . $row['age'] . "</td>";
                        echo "<td>" . $row['religion'] . "</td>";
                        echo "<td>" . $row['faculty'] . "</td>";
                        echo "<td>" . $row['p_address'] . "</td>";
                        echo "<td>" . $row['p_ward'] . "</td>";
                        echo "<td>" . $row['p_vdc_rm_mp'] . "</td>";
                        echo "<td>" . $row['p_txt_vdc_rm_mp'] . "</td>";
                        echo "<td>" . $row['t_address'] . "</td>";
                        echo "<td>" . $row['t_ward'] . "</td>";
                        echo "<td>" . $row['t_vdc_rm_mp'] . "</td>";
                        echo "<td>" . $row['t_txt_vdc_rm_mp'] . "</td>";
                        echo "<td>" . $row['contact_no'] . "</td>";
                        if ($row["photo"]) {
							echo '<td><img width="100px" src="../../uploadsS/'.$fileName. '"alt="Image"></td>';
						}
                        echo "<td>" . $row['father_name'] . "</td>";
                        echo "<td>" . $row['f_occupation'] . "</td>";
                        echo "<td>" . $row['f_contact_no'] . "</td>";
                        echo "<td>" . $row['service_no'] . "</td>";
                        echo "<td>" . $row['rank'] . "</td>";
                        // echo "<td>" . $row['regt'] . "</td>";
                        echo "<td>" . $row['mother_name'] . "</td>";
                        echo "<td>" . $row['m_occupation'] . "</td>";
                        echo "<td>" . $row['m_contact_no'] . "</td>";
                        echo "<td>" . $row['guradian_name'] . "</td>";
                        echo "<td>" . $row['relation'] . "</td>";
                        echo "<td>" . $row['r_contact_no'] . "</td>";

                        
						
                        echo "<td>";
						// <!-- <a class="btn btn-primary" href="">hello</a> -->
						echo '<input type="button" class="btn btn-primary" onclick="editThis('.$row["st_id"].')" value="Edit">';
						echo '&nbsp';
						// echo '<button  onclcik="deleteThis(' . $row["st_id"] . ')">Delete</button>';
						echo '<input class="btn btn-danger" type="button" onclick="deleteThis('.$row["st_id"].')" value="Delete">';

						echo '</td>';
						echo '</tr>';

					}
				} else {
					echo "No elements found in the table.";
                }

?>

 










<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>






