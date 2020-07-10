<html lang="en" >
<html>
<head>
  <script src='sweetalert.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js'></script>
  <link rel='stylesheet' href='sweetalert.min.css'>
</head>
<body>

</body>
</html>
<?php
$data = $_POST;
 $url = 'http://localhost:8080/setpwd';
 
unset($_POST['submit']);
// Initializes a new cURL session
$curl = curl_init($url);
// Set the CURLOPT_RETURNTRANSFER option to true
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
// Set the CURLOPT_POST option to true for POST request
curl_setopt($curl, CURLOPT_POST, true);
// Set the request data as JSON using json_encode function
curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));
// Set custom headers for RapidAPI Auth and Content-Type header

// Execute cURL request with all previous settings
session_start();
unset($_SESSION['otp']);
session_destroy($_SESSION['otp']);
$response = curl_exec($curl); 
if(!strcmp($response, "true")){
	
  echo "<script type='text/javascript'>swal({
  title: 'Password Changed',
  text: 'Try login now',
  type: 'success',
  timer: 3000,
  showConfirmButton: false
}, function(){
      window.location.href = 'http://localhost/project/index.php';
});</script>";
}
else{
  echo "<script type='text/javascript'>swal({
  title: 'Password cannot Change,
  text: 'Please try again',
  type: 'warning',
  timer: 1000,
  showConfirmButton: false
}, function(){
      window.location.href = 'http://localhost/project/index.php';
});</script>";
}

unset($_POST);
// Close cURL session
curl_close($curl);

//print_r($response);
//echo ;

?>