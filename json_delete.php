<?php
// kvstore API url


unset($_POST['submit']);
//$arrayName = array('id'=>1, 'firstName' => $_POST['firstName']);

$url = 'http://localhost:8080/employees/'.$_POST['id'].'/'.$_POST['firstName'];

// Initializes a new cURL session
$curl = curl_init($url);


curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
'Authorization: Bearer MY_API_TOKEN'));

$result = curl_exec($curl);
//echo $result;// Set custom headers for RapidAPI Auth and Content-Type header

// Execute cURL request with all previous settings

// Close cURL session
curl_close($curl);
echo "<html>
<head>
 
	<style>
	body{
		background-image: url('images/one.jpg');
		background-repeat: no-repeat;
		background-size: cover;
	}
	</style>
	


</head>
<body>". $response . PHP_EOL . "</body></html>";

//print_r($response);
//echo ;
?>