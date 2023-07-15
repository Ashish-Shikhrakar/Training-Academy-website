<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student feedback</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script>
		function editThis(u_id) {
			var form = document.createElement("form");
			form.method = "POST";
			form.action = "contact_form.php";

			var input = document.createElement("input");
			input.type = "hidden";
			input.name = "u_id";
			input.value = u_id;

			form.appendChild(input);

			document.body.appendChild(form);
			form.submit();
		}

		function deleteThis(u_id) {
			var form = document.createElement("form");
			form.method = "POST";
			form.action = "delete.php";

			var input = document.createElement("input");
			input.type = "hidden";
			input.name = "u_id";
			input.value = u_id;

			form.appendChild(input);

			document.body.appendChild(form);
			form.submit();
		}
	</script>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
		<div class="container my-5">
			<h2 style=" text-transform: uppercase; letter-spacing:.1em;
    line-height: normal; 
    font-size: 2rem; 
    color:#000;
    text-align:center;
    margin-left:  10px; ">Student feedback</h2>
            <table border="1" cellpadding="7px" cellspacing="7px" style=" border-collapse: collapse" ;>
				<thead>
					<tr>
						<th>ID</th>
						<th>Student Name</th>
						<th>Student Email</th>
						<th>Student Phone</th>
						<th>Message</th>
                        <th>Action</th>
					</tr>
				</thead>
                <?php
				$conn = mysqli_connect("localhost", "root", "");
				$db = mysqli_select_db($conn, 'army_project');
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}

				$sql = "SELECT * FROM user_feedback";
				// Execute the query
				$result = mysqli_query($conn, $sql);

				// Check if there are any rows returned
				if (mysqli_num_rows($result) > 0) {
					// Loop through each row and display the elements
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>" . $row['u_id'] . "</td>";
						echo "<td>" . $row['u_name'] . "</td>";
						echo "<td>" . $row['u_email'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
						echo "<td>" . $row['u_message'] . "</td>";


						echo "<td>";
						// <!-- <a class="btn btn-primary" href="">hello</a> -->
						// echo '<input type="button" class="btn btn-primary" onclick="editThis('.$row["u_id"].')" value="Edit">';
						// echo '&nbsp;';
						// echo '<button  onclcik="deleteThis(' . $row["tid"] . ')">Delete</button>';
						echo '<input class="btn btn-danger" type="button" onclick="deleteThis('.$row["u_id"].')" value="Delete">';

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