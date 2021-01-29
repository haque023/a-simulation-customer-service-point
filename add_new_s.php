
<?php
include 'connect.php';

if ($conn) {

	$p_code= $_POST['p_code'];
	$p_id=$_POST['p_id'];
	$p_name=$_POST['p_name'];

	$sql="insert into solve_list (problem_no,problem_code,problem_name) VALUES ('$p_id','$p_code','$p_name')";

	$result=mysqli_query($conn,$sql);
	if (mysqli_affected_rows($conn)>0) {
		$msg="successs";
		echo $msg;
	}
	else{
		$msg="unsuccess";
		echo mysqli_error($conn);
	}
}
if($msg=="successs"){
	header('Location: add.php');
}


?>