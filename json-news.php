<!DOCTYPE html>
<html>
<head>
  <script src='sweetalert.min.js'></script>
  <link rel='stylesheet' href='sweetalert.min.css'>
</head>
<body>

</body>
</html>

<?php

 $url = 'http://localhost:8080/news';

$imageUrl="/Users/jyotsna/Documents/htdocs/project/images/".$_FILES['imageUrl']['name'];
$_POST['imageUrl']=$imageUrl; 
move_uploaded_file($_FILES["imageUrl"]["tmp_name"], $imageUrl);
$data = $_POST;
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
// Close cURL session
if($response&&isset($_POST['submit'])){
echo "<script type='text/javascript'>swal({
  title: 'News added',
  text: 'Look at your dahsboard',
  type: 'succcess',
  timer: 2000,
  showConfirmButton: true
}, function(){
      window.location.href = 'http://localhost/project/news.php';
});</script>";
}

curl_close($curl);
//echo "succes";
//print_r($response);
?>