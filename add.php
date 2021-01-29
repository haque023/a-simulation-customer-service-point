<!DOCTYPE html>
<html>
<head>
	<title>New Product</title>
	<link rel="stylesheet" type="text/css" href="style for add.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

	<style>
	
	.btn {
		background-color: DodgerBlue;
		border: none;
		color: white;
		padding: 12px 16px;
		font-size: 16px;
		cursor: pointer;
	}

	.btn:hover {
		background-color: RoyalBlue;
	}
</style>
</head>
<body>
	<div class="container">
		<div class="loginBox">

			<!-- <img src="user.png" class="user"> -->
			<h2>Add New uva Sove</h2>
			<form method="post" action="add_new_s.php" >
				<p>Problem ID</p>
				<input type="text" name="p_id" id="give_id" placeholder="Enter Product ID">
				<p id="err">
				<p>Problem Name</p>
				<input type="text" name="p_name" placeholder="Enter Product_Name">
			
    <p>Code</p>

   <textarea class="form-control" name="p_code" rows="7" id="p_code" placeholder="Describe The Products"></textarea>
 
    <input type="submit" name="upload" value="upload" ><br><br>
    




</form>
<p id="shows"></p>
</div>
</div>
</body>
</html>

