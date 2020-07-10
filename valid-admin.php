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
# An HTTP GET request example
$data = $_POST;

 $url = 'http://localhost:8080/access';
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
$response = curl_exec($curl);
if(strcasecmp($response, "true")==0){
echo "<script type='text/javascript'>swal({
  title: 'Access Granted',
  text: 'Please Login to check',
  type: 'success',
  timer: 2000,
  showConfirmButton: false
}, function(){
      window.location.href = 'http://localhost/project/admin.php';
});</script>";}
else{
	echo "<script type='text/javascript'>swal({
  title: 'Credentials do not match',
  text: 'Please check',
  type: 'warning',
  showConfirmButton: true
}, function(){
      window.location.href = 'http://localhost/project/admin.php';
});</script>";
}
// Close cURL session
//session_write_close();

curl_close($curl);
?>