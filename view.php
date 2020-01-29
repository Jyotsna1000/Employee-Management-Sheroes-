<?php
//function getDetails(){
# An HTTP GET request example
$data=$_GET['id'];
//$data2=$_GET['firstName'];

$url = 'http://localhost:8080/employees/'.$data.'/'.$_GET['firstName'];
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);

curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
//print_r($data);
$arr=json_decode($data);

//return $data;
//}
?>
<html>
<head>
	<title>Employe Details</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
     
	<style>
	body{
		background-image: url("images/one.jpg");
		background-repeat: no-repeat;
		background-size: cover;
	}
	</style>
	


</head>
<body>
	<?php if(is_null($arr->id))
	echo "Employee doesn't exist";
	else echo "
			<table class='table'>
				<tr>
					<td colspan='5'><h2>Employee Detail</h2>
					</td>
				</tr>
				
				
				<tr>
					<td><b>Personal Details</b></td>
				</tr>
				<tr>
					<td>Name:</td>
					<td>".$arr->firstName.' '.$arr->middleName.' '.$arr->lastName."</td>
	
				    
				</tr>
				<tr>
			    	<td>Gender:</td>
			    	<td>".$arr->gender."</td>
			    </tr>
			    <tr>
			    	<td>BirthDate:</td>
			    	<td>" .date($arr->birthDate)."</td>
			    </tr>
			    <tr>
			    	<td rowspan='2'>Address:</td>
			    	<td colspan='2'>".$arr->address."</td>
			    </tr>
			    <tr align='left'>
			    	<td>".$arr->district.' ,'.$arr->state .' ,'.$arr->pincode."</td>
			   
			    </tr>
			    <tr>
			    	<td><b>Employement Detail</b></td>
			    </tr>
			    <tr>
			    	<td>Job Title</td>
			    	<td>".$arr->jobTitle."</td>
			    </tr>
			    <tr>
			    	<td>Department</td>
			    	<td>".$arr->department."</td>
			    </tr>
			    <tr>
			    	<td>Commnecement Date:</td>
			    	<td>".date($arr->commenceDate)."</td>
			    </tr>
			    <tr>
			    	<td>Employement status</td>
			    	<td>".$arr->jobStatus."</td>
			    </tr>
			    <tr>
			    	<td><b>Banking Details</b></td>
			    </tr>
			    <tr>
			    	<td>Bank:</td>
			    	<td>". $arr->bankName."</td>
			    	<td>" .$arr->bankBranch."</td>
			    </tr>
			    <tr>
			    	<td>Account Number:</td>
			    	<td>".$arr->accno."</td>
			    </tr>

		</table>";
	?>
</body>
</html>
