<?php 
	$con = mysqli_connect('localhost','ganesh','gunace123');
	if(!$con)
	{
		echo "Not connected to server";
	}
	if(!mysqli_select_db($con, 'crudapp'))
	{
		echo "Database Not Started";
	}
	
	$sql = "SELECT * FROM crud";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			?>
			<tr>
				<td><?php echo $row["fullName"]; ?></td>
				<td><?php echo $row["empCode"]; ?></td>
				<td><?php echo $row["salary"]; ?></td>
				<td><?php echo $row["city"]; ?></td>
				<td>
					<a onclick="onEdit()">Edit</a>
					<a onclick="ondeleterecord('<?php echo $row["id"]; ?>')">Delete</a>
				</td>
			</tr>
			<?php
		}
	} else {
		echo "0 results";
	}
?>


