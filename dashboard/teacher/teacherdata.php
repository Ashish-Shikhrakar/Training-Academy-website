<?php

include($_SERVER['DOCUMENT_ROOT'] . '/ARMY-WEBSITE-PROJECT/dashboard/common/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/ARMY-WEBSITE-PROJECT/dashboard/common/sidebar.php') ?>


<section id="interface">
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/ARMY-WEBSITE-PROJECT/dashboard/common/top-menu.php') ?>

	<div class="teacherdata">
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="container">
				<h2 style="text-align:center;">Teacher information</h2>
				<a class="btn btn-primary" href="create.php" role="button">Add Teacher</a>
				<!-- <a class="btn btn-primary" href="../dashboard.php" role="button">Back</a> -->
				<table class="table table-border">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Address</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Salary</th>
							<th>CID</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<?php
					$conn = mysqli_connect("localhost", "root", "");
					$db = mysqli_select_db($conn, 'army_project');

					// $query = "SELECT * FROM teacher ";
					// $query_run = mysqli_query($conn,$query);
					// while ($row = mysqli_fetch_array($query_run)) {
					// Check if the connection was successful
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}


					$sql = "SELECT * FROM teacher";

					// Execute the query
					$result = mysqli_query($conn, $sql);

					// Check if there are any rows returned
					if (mysqli_num_rows($result) > 0) {
						// Loop through each row and display the elements
						while ($row = mysqli_fetch_assoc($result)) {
							$fileName = $row['photo'];
							//echo $fileName;
							echo "<tr>";
							echo "<td>" . $row['tid'] . "</td>";
							echo "<td>" . $row['tname'] . "</td>";
							echo "<td>" . $row['taddress'] . "</td>";
							echo "<td>" . $row['email'] . "</td>";
							echo "<td>" . $row['phone'] . "</td>";
							echo "<td>" . $row['salary'] . "</td>";
							echo "<td>" . $row['cid'] . "</td>";


							if ($row["photo"]) {
								echo '<td><img width="100px" src="../../uploadsT/' . $fileName . '"alt="Image"></td>';
							}



							// echo '<td><img width="100px" src="data:image/jpeg;base64,' . base64_encode($row["photo"]) . '" alt="Image"></td>';
							// 	echo '<td><img width="100px" src="../../uploads/'.$fileName. '" alt="Image"></td>';
							// echo '<td><img width="100px" src="data:image/jpeg;base64,'.base64_encode($row["photo"]).'" alt="Image"><br></td>';
					

							// <td> '<img src="../images/" <?php echo $row['photo'];"   style="width:100px; height:100px; alt="image"></td>
					

							echo "<td>";
							// <!-- <a class="btn btn-primary" href="">hello</a> -->
							echo '<input type="button" class="btn btn-primary" onclick="editThis(' . $row["tid"] . ')" value="Edit">';
							echo '&nbsp;';
							// echo '<button  onclcik="deleteThis(' . $row["tid"] . ')">Delete</button>';
							echo '<input class="btn btn-danger" type="button" onclick="deleteThis(' . $row["tid"] . ')" value="Delete">';

							echo '</td>';
							echo '</tr>';

						}
					} else {
						echo "No elements found in the table.";
					}


					?>
				</table>
			</div>
		</form>
	</div>
</section>

<script>
	function editThis(tid) {
		var form = document.createElement("form");
		form.method = "POST";
		form.action = "create.php";

		var input = document.createElement("input");
		input.type = "hidden";
		input.name = "tid";
		input.value = tid;

		form.appendChild(input);

		document.body.appendChild(form);
		form.submit();
	}

	function deleteThis(tid) {
		var form = document.createElement("form");
		form.method = "POST";
		form.action = "delete.php";

		var input = document.createElement("input");
		input.type = "hidden";
		input.name = "tid";
		input.value = tid;

		form.appendChild(input);

		document.body.appendChild(form);
		form.submit();
	}
</script>