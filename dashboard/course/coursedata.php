<html>
<head>
<title>Course data</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<script>
		function editThis(cr_id) {
			var form = document.createElement("form");
			form.method = "POST";
			form.action = "course.php";

			var input = document.createElement("input");
			input.type = "hidden";
			input.name = "cr_id";
			input.value = cr_id;

			form.appendChild(input);

			document.body.appendChild(form);
			form.submit();
		}

		function deleteThis(cr_id) {
			var form = document.createElement("form");
			form.method = "POST";
			form.action = "delete.php";

			var input = document.createElement("input");
			input.type = "hidden";
			input.name = "cr_id";
			input.value = cr_id;

			form.appendChild(input);

			document.body.appendChild(form);
			form.submit();
		}
	</script>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="container my-5">
			<h2 style="">Course information</h2>

			<a  href="course.php" role="button"><input type="button" class="btn btn-primary" href="course.php" value="Add New" role="button"></a>
			<a class="btn btn-primary" href="../dashboard.php" role="button">Back</a>
			
			
			<!-- <a class="btn btn-primary" href="course.php" role="button">Add Course</a> -->
			<table border="1" cellpadding="7px" cellspacing="7px" style=" border-collapse: collapse" ;>
				<thead>
					<tr>
						<th>ID</th>
						<th>Course Name</th>
						<th>Teacher name</th>
						<th>Course ID</th>
						<th>Action</th>
					</tr>
				</thead>
				<?php
				$conn = mysqli_connect("localhost", "root", "");
				$db = mysqli_select_db($conn, 'army_project');
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}

				$sql = "SELECT * FROM course";
				// Execute the query
				$result = mysqli_query($conn, $sql);

				// Check if there are any rows returned
				if (mysqli_num_rows($result) > 0) {
					// Loop through each row and display the elements
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>" . $row['cr_id'] . "</td>";
						echo "<td>" . $row['cname'] . "</td>";
						echo "<td>" . $row['c_t_name'] . "</td>";
						echo "<td>" . $row['cid'] . "</td>";


						echo "<td>";
						// <!-- <a class="btn btn-primary" href="">hello</a> -->
						echo '<input type="button" class="btn btn-primary" onclick="editThis('.$row["cr_id"].')" value="Edit">';
						echo '&nbsp;';
						// echo '<button  onclcik="deleteThis(' . $row["tid"] . ')">Delete</button>';
						echo '<input class="btn btn-danger" type="button" onclick="deleteThis('.$row["cr_id"].')" value="Delete">';

						echo '</td>';
						echo '</tr>';

					}
				}
				?>
			</table>
		</div>
	</form>
</body>
</html>