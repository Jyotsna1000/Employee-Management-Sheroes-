<?php 
//$url="http://localhost/project/validate.php";

session_start();
if (strcasecmp($_SESSION['type'],"a")) {
    //header('Location: noaccess.php');
    echo "<h1>Access denied</h1>";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Give Admin Access</title>
  <link rel="stylesheet" href="admin-style.css">
  <style>
  
     .bg-img {
        background-color: #f3efe7;
  /*background: url("images/back.png");*/
  height: 100%;
  background-size: cover;
  background-position: center;
}
.bg-img:after {
  position: relative;
  content: "";
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.7);
}

    .content {
  position: absolute;
  margin-top: 25em;
  left: 50%;
  z-index: 999;
  margin-top: 3em; 
  margin-left: 10em;
  text-align: center;
  padding: 60px 32px;
  width: 970px;
  transform: translate(-50%, -50%);
  background-color: #f3efe7;
  box-shadow: -1px 4px 28px 0px rgba(0, 0, 0, 0.75);
}
  </style>

</head>
<?php include 'header.php';?>
<body class="bg-img">
<!-- partial:index.partial.html -->
<div class="container content">
  <div class="box"></div>
  <div class="container-forms">
    <div class="container-info">
      <div class="info-item">
        <div class="table">
          <div class="table-cell">
            <p>
              Have an account?
            </p>
            <div class="btn">
              Log in
            </div>
          </div>
        </div>
      </div>
      <div class="info-item">
        <div class="table">
          <div class="table-cell">
            <p>
              Don't have an account? 
            </p>
            <a class="primary" style="margin-left:2rem;" href="signup.php">
              Sign up
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container-form">
      <p>Give Access</p>
      <div class="form-item log-in">
        <div class="table">
          <div class="table-cell">
            <form method="post" action="valid-admin.php">
            <input name="empId" placeholder="Employe Id"  type="number" /><input name="email" placeholder="Email Id" type="email" />
            <input class="primary" type="submit" name="submit" value="Submit">
          </form>
          </div>
        </div>
      </div>
      <div class="form-item sign-up">
        <div class="table">
          <div class="table-cell">
            <input name="email" placeholder="Email" type="text" /><input name="fullName" placeholder="Full Name" type="text" /><input name="Username" placeholder="Username" type="text" /><input name="Password" placeholder="Password" type="Password" />
            <div class="btn">
              Sign up
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script><script  src="admin-script.js"></script>

</body>
</html>
