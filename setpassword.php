<?php session_start();
if (!isset($_SESSION['otp'])) {
    //header('Location: noaccess.php');
    echo "<h1>Access denied</h1>";
    exit();
}
?>
<head>
  <meta name="google-signin-client_id" content="344649308828-l4n3cgdqs43of7fp75d8t5nuhg6aocr5.apps.googleusercontent.com">
  <title>Login Form</title>
  <link rel='stylesheet' href='https://yui.yahooapis.com/pure/0.5.0/pure-min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Poppins:400,500&amp;display=swap'><link rel="stylesheet" href="index-style.css">
   <script type="text/javascript">
     
function validatePassword(){
  var password = document.getElementById("password1")
  , confirm_password = document.getElementById("password2");
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}
password1.onchange = validatePassword();
password2.onkeyup = validatePassword();
   </script>
</head>

<body>
<!-- partial:index.partial.html -->
<div class="bg-img">
  <div class="content">
    <header>Change Password</header>
    <form action="savepassword.php" method="POST" onsubmit="validatePassword();">
      <div class="field">
        <span class="fa fa-user"></span>
        <input type="email" name="email" placeholder="Email" value="<?php echo $_SESSION['email'];?>">
      </div>
      <div class="field space">
        <span class="fa fa-lock"></span>
        <input type="password" id="password1" name="password" class="pass-key" required placeholder="Password">
        <span class="show">SHOW</span>
      </div>
      <div class="field space">
        <span class="fa fa-lock"></span>
        <input type="password" id="password2" class="pass-key" required placeholder="Confirm Password">
        <span class="show">SHOW</span>
      </div>     
      <div class="field">
        <input type="submit" name="submit" value="SUBMIT" onclick="validatePassword()">
      </div>
    </form>
  </div>
</div>

  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="jquery.min.js"></script>
  <script  src="index-script.js"></script>
  

 
</body>
</html>
