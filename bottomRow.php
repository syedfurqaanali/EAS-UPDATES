<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>bottomRow</title>
</head>
<body>
	<table border="5px">
		<tr>
			<th>Subject</th>
			<th>Upload Date</th>
			<th>Expiry Date</th>
			<th>Assignment File</th>
		</tr>
		<tr>
			<td>Algorithm Design</td>
			<td>12/05/22</td>
			<td>18/05/22</td>
		</tr>

		<?php
			$conn = mysqli_connect("localhost", "root"," ", "assignmentUpload" );
			if($conn-> connect_error){
				die("connection failed:". $conn-> connect_error);

			}
			$sql = "SELECT subject, uploadDate, expiryDate, from assignmentTable";
			$result = $conn-> query(sql);
			if ($result-> num_rows . 0) {
				while ($row = $result-> fetch_assoc()) {
					echo "<tr><td>". $row["subject"]. "</td><td>". $row["uploadDate"] . "</td><td>".$row["expiryDate"] .",/td></tr>";
					
				}
				echo "</table>";
			}
			else{
				echo "0 result";
			}
			conn-> close();

		?>
	</table>

</body>
</html>