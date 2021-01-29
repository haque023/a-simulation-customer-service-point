<?php
include 'connect.php';

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table width="832" border="1" align="center" cellpadding="5">
		<tr>
			<td width="150">S. No </td>
			<td width="150">Problem No </td>
			<td width="237">Problem Name</td>
		</tr>
		<?php
        $p_id=$_GET['p_id'];
		$sql = "select * from solve_list where problem_no='$p_id'";

		$result = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));

		$i=0;
		if(mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))	
			{
				$i++;
				?>				
				<tr>
					<td><?php echo $i ?></td>
					<td><?php echo $row['problem_no'] ?></td>
					<td><?php echo $row['problem_name'] ?></td>
				</tr>
				<?php

			}
		}

		?>
	</table>




</body>
</html>