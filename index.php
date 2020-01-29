<?php include 'charts.php';?>
<html>
<head>

<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<script src="jquery.min.js"></script>
	<script src="popper.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<style>
	body{
		background-image: url("images/back.jpg");
		background-repeat: no-repeat;
		background-size: cover;
	}
	</style>
</head>
<body background="images/one.jpg">
	<div class="container-fluid">
	<div class="row">
		
			<table class="table">
				<tr>
					<td style="width: 30%;">
                        <img src="https://sheroes.com/img/logo.svg">
                    </td>
					<td align="center" style="font-family:sans-serif; color:crimson;"><h2><b>Employee Management</b></h2>
					</td>
				</tr>
				<tr>
					<td rowspan="2">
						<nav class="navbar  bg-light navbar-light"> <ul class="navbar-nav">
							<li class="nav-item"><a class="nav-link" href="add.php">Add an Employee</a>
							</li>
                            <li class="nav-item"><a class="nav-link" href="list.php">List of Employees</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="delete.php">Delete an Employee</a>
                            </li>
                        </ul>
                    </nav>
                </td>

                <td>
                	<div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="images/employe.png" alt="Card image">
                    <div class="card-body">
                    	<h5 class="card-title">Details</h5>
                    	<p class="card-text">Quick view of employes details.</p>
                    	  <a href="search.php" class="btn btn-outline-danger">Search</a>
                    	</div>
                    </div>
                </td>
                <td>	
                	<div class="card" style="width: 18rem;">
                    <img src="images/stat.png" class="card-img-top"  alt="Card image">
                    <div class="card-body">
                    	<h5 class="card-title">Stats</h5>
                    	<p class="card-text">Statistics of employees.</p>
                    	  <a href="chart.php" class="btn btn-outline-danger">Go for it</a>
                    	</div>
                    </div>
                	
                </td>
            </tr>
            <tr>
            	<td>
            		<div class="card chartContainer">
            			<div class="card-body">
            				<div id="chartContainer" style="height: 300px; width: 100%;"></div>
               
                       </div>
                    </div>
                </td>
                <td>
                	<div class="card chartPie">
                		<div class="card-body">
                			<div id="chartPie" style="height: 300px; width: 100%;"></div>
                        </div>
                   </div>
                </td>
            </tr>
			</table>
</body>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</html>