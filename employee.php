<?php 
//$url="http://localhost/project/validate.php";

session_start();
if (strcasecmp($_SESSION['type'],"a")) {
    //header('Location: noaccess.php');
    echo "<h1>Access denied</h1>";
    exit();
}
?>
<html>
<head>

<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="employe-style.css">
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.2/css/all.css'>
<script src="jquery.min.js"></script>
	<script src="popper.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<style>
	
     .bg-img {
        background-color: #f3efe7;
  /*background: url("images/back.png");*/
  height: 100%;
  background-size: cover;
  background-position: center;
}
.bg-img:after {
  position: relative;
  content: "";
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.7);
}

    .content {
  position: absolute;
  margin-top: 25em;
  left: 50%;
  z-index: 999;
  margin-left: 8em;
  text-align: center;
  padding: 60px 32px;
  width: 1070px;
  transform: translate(-50%, -50%);
  background: rgba(255, 255, 255, 0.01);
  box-shadow: -1px 4px 28px 0px rgba(0, 0, 0, 0.75);
}
	</style>

</head>

  <?php include 'header.php';?>
<body class="bg-img">
      

	<div class="container-fluid content">
    <h1 class='h1 title'>
          <i class='fas fa-user'></i>
          <span>Employee Detail</span>
        </h1>

    	<div class="row">
		
			<table class="table">
				<tr align="center">
                <td>
                	<div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="images/edit.png" alt="Card image">
                    <div class="card-body">
                    	<h5 class="card-title">Add</h5>
                    	<p class="card-text">Add new employee details</p>
                    	  <a href="add.php" class="btn btn-outline-danger">Add</a>
                    	</div>
                    </div>
                </td>
                <td>	
                	<div class="card" style="width: 18rem; height: 27rem;">
                    <img src="images/list.jpg" class="card-img-top"  alt="Card image" height="60%">
                    <div class="card-body">
                    	<h5 class="card-title">List</h5>
                    	<p class="card-text">List of Employees</p>
                    	  <a href="list.php" class="btn btn-outline-danger">List</a>
                    	</div>
                    </div>
                	
                </td>
                <td>    
                    <div class="card" style="width: 18rem;">
                    <img src="images/del.svg" class="card-img-top"  alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title">Delete</h5>
                        <p class="card-text">Delete an Employee</p>
                          <a href="delete.php" class="btn btn-outline-danger">Delete</a>
                        </div>
                    </div>
                    
                </td>
            </tr>
            
			</table>
</body>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</html>