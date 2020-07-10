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
session_start();
if(!strcmp($_SESSION['otp'], $_POST['otp']))
{
	echo "<script type='text/javascript'>
    window.location.href = 'http://localhost/project/setpassword.php';</script>";  
}
else
{
	echo "<script type='text/javascript'>swal({
  title: 'OTP do not match',
  text: 'Please try again later',
  type: 'warning',
  timer: 2000,
  showConfirmButton: false
}, function(){
      window.location.href = 'http://localhost/project/index.php';
});</script>";

}
?>