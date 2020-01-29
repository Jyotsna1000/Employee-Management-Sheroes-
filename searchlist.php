<?php
//function getDetails(){
# An HTTP GET request example
$data=$_GET['firstName'];
$url = 'http://localhost:8080/search/'.$data;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
//print_r($data);
$arr=json_decode($data,true);

?>
<html>
<head>
	<title>Employes List</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
     
	<style>
	body{
		background-color: PeachPuff;
		background-repeat: no-repeat;
		background-size: cover;ø
	}
	</style>
	


</head>
<body>	
	<table class="table">
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>last Name</th>
			<th>Gender</th>
			<th>Address</th>
			<th>State</th>
			<th>Pincode</th>
			<th>Job Status</th>
			<th>Department</th>
			<th>Job Title</th>
			<th>View</th>
		</tr>
		<?php
		foreach ($arr as $key => $value) {
		echo "<tr><td>".$value['id']."</td>
		<td>".$value['firstName']."</td>
		<td>".$value['middleName']."</td>
		<td>".$value['lastName']."</td>
			<td>".$value['gender']."</td>
			<td>".$value['address']."</td>
			<td>".$value['state']."</td>
			<td>".$value['pincode']."</td>
			<td>".$value['jobStatus']."</td>
			<td>".$value['department']."</td>
			<td>".$value['jobTitle']."</td>
			<td><a href='view.php?id=". $value['id']."' class='btn btn-outline-danger'>View</a></td>
			</tr>";
		}
		?>
	</table>
	</body>
	</html>		
