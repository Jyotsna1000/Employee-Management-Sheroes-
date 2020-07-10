
<head>
  <title>OTP</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Poppins:400,500&amp;display=swap'><link rel="stylesheet" href="index-style.css">
</head>

<body>
<!-- partial:index.partial.html -->
<?php session_start();?>
<div class="bg-img">
  <div class="content">
    <header>OTP Verification</header>
    <form action="validateotp.php" method="POST">
      <div class="field">
        <span class="fa fa-user"></span>
        <input type="text" name="email" value="<?php echo $_SESSION['email'];?>" required>
      </div>
      <div class="field space">
        <span class="fa fa-lock"></span>
        <input type="number" name="otp"  required placeholder="OTP">
        <span class="show">SHOW</span>
      </div>
      <div class="field">
        <input type="submit" name="submit" value="Submit">
      </div>
    </form>
    
</div>

  <script src='https://kit.fontawesome.com/a076d05399.js'></script><script  src="index-script.js"></script>
  

 
</body>
</html>
