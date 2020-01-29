<html>
<head>
	<title>Search Employe Details</title>
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
	<h1>Search employee detail</h1>
	<div class="card"  style="width: 20rem;">
		<img class="card-img-top" src="images/edit.png"  alt="Card image">
		<form class="form-horizontal card-body" action="searchlist.php" method="GET" enctype="multipart/form-data">
                    	<h5 class="card-title">Enter Employee Name:</h5>
                    	<input type="text" name="firstName" class="card-text" required><br>
                    	  <input type="submit" name="search" class="btn btn-outline-danger">
                    
        </form>
    </div>
</div>
</body>
</html>
