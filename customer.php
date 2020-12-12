<?php
include 'config.php';
?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>customer</title>
	
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	
	<table class="table">
  <tr>
  <th>id</th>
  <th>customer</th>
  <th>firstname</th>
  <th>lastname</th>
  <th>street</th>
  <th>city</th>
  <th>province</th>
  <th>country</th>
  <th>phoneno</th>
  <th>email</th>
  <th>time</th>
  <th>pieces</th>
  <th>instruction</th>
  </tr>
           <?php
            $result = mysqli_query($conn, "SELECT * FROM regi");
            if (mysqli_num_rows($result) == 0) {
                echo "
				<h4 class='alert alert-info'>No Record Found.</h4>
					
					"; } else { while ($row = mysqli_fetch_array($result)) { ?>
					<tr> 
					    <td> <?php echo $row['id']; ?> </td>
						<td> <?php echo $row['customer']; ?> </td>
						<td> <?php echo $row['Firstname']; ?> </td>
						<td><?php echo $row['Lastname']; ?></td>
						<td><?php echo $row['Street']; ?></td>
						<td><?php echo $row['City']; ?></td>
						<td><?php echo $row['Province']; ?></td>
						<td><?php echo $row['Country']; ?></td>
						<td><?php echo $row['Phoneno']; ?></td>
						<td><?php echo $row['Email']; ?></td>
						<td><?php echo $row['Time']; ?></td>
						<td><?php echo $row['Pieces']; ?></td>
						<td><?php echo $row['Instruction']; ?></td>

						<td>

						
						<?php echo "<a href=\"delservice.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>"; ?>
                        

					</td>
					</tr>
					<?php
					}
					}
					?>
					</table>
				
</body>
</html>