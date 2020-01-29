<?php
//function getDetails(){
# An HTTP GET request example
$data=$_GET['id'];
$name=$_GET['firstName'];
?>

<html>
<head>
	<title>Delete Employe Details</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
	<script src="popper.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<style>
	body{
		background-image: url("images/one.jpg");
		background-repeat: no-repeat;
		background-size: cover;
	}s
	</style>

</head>
<body>

	<div align="center">
	<h1>Delete the employee detail</h1>
	<div class="card"  style="width: 20rem;">
		<img class="card-img-top" src="images/del.svg" alt="Card image">
		<form class="form-horizontal card-body" action="json_delete.php" method="POST" enctype="multipart/form-data">
                    	<h5 class="card-title">Enter Employee Id:</h5>
                    	<input type="text" name="id" class="card-text" value="<?php print_r(!empty($data)?$data:'') ?>" required><br>
                    	<b>Enter employee name:</b>
                    	<input type="text" name="firstName" class="card-text" value="<?php print_r(!empty($name)?$name:'') ?>" required><br>
                    	  <input type="submit" name="submit" class="btn btn-outline-danger">
                    
        </form>
    </div>
</div>
</body>
</html>
