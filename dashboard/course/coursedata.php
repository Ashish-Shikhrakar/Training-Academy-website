<?php
include($_SERVER['DOCUMENT_ROOT'] . '/ARMY-WEBSITE-PROJECT/dashboard/common/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/ARMY-WEBSITE-PROJECT/dashboard/common/sidebar.php') ?>


<section id="interface">
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/ARMY-WEBSITE-PROJECT/dashboard/common/top-menu.php') ?>
	<div class="couserstyle">
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="container">
				<h2 style="text-align:center">Course Information</h2>

				<a href="course.php" role="button"><input type="button" class="btn btn-primary" href="course.php"
						value="Add New" role="button"></a>
				<!-- <a class="btn btn-primary" href="../dashboard.php" role="button">Back</a> -->


				<!-- <a class="btn btn-primary" href="course.php" role="button">Add Course</a> -->
				<table class="table table-border">
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
							echo '<input type="button" class="btn btn-primary" onclick="editThis(' . $row["cr_id"] . ')" value="Edit">';
							echo '&nbsp;';
							// echo '<button  onclcik="deleteThis(' . $row["tid"] . ')">Delete</button>';
							echo '<input class="btn btn-danger" type="button" onclick="deleteThis(' . $row["cr_id"] . ')" value="Delete">';

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

// eidt operation 

	function editThis(cr_id) {
		var form = document.createElement("form");
		form.method = "POST";
		form.action = "edit.php";

		var input = document.createElement("input");
		input.type = "hidden";
		input.name = "cr_id";
		input.value = cr_id;

		form.appendChild(input);

		document.body.appendChild(form);
		form.submit();
	}


	// delete operation 


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