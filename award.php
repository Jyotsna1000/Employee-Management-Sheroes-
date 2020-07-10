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
  <title>Achievements</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="award-style.css">
<style type="text/css">
  .bg-img {
        background-color: #f3efe7;
  /*background: url("images/back.png");*/
  height: 100%;
  background-size: cover;
  background-position: center;
}
.content {
  position: absolute;
  margin-top: 25em;
  left: 50%;
  z-index: 999;
  margin-top: 28em; 
  margin-left: 10em;
  text-align: center;
  padding: 60px 32px;
  width: 1070px;
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
  <div class="row header">
    <h1>ACHIEVEMENTS &nbsp;&nbsp;</h1></br>
    <h3>Fill out the form below to declare the awards!</h3>
  </div>
  <div class="row body">
    <form action="award-valid.php" method="post">
      <ul>
        
        <li>
          <p class="left">
            <label for="empMonth">Employee of the Month<span class="req">*</span></label>
            <input type="text" name="empMonth" placeholder="Name of Employee" required/>
          </p>
          <p class="pull-right">
            <label for="patOnBag">Pat on the Back<span class="req">*</span></label>
            <input type="text" name="patOnBag" placeholder="Name of Employee" required/>      
          </p>
        </li>
        <li><div class="divider"></div></li>
        <li>
        <p class="left">
            <label for="customerChoice">Customer Choice<span class="req">*</span></label>
            <input type="text" name="customerChoice" placeholder="Name of Employee" required />
          </p>
          <p class="pull-right">
            <label for="innovation">Innovative Idea<span class="req">*</span></label>
            <input type="text" name="innovation" placeholder="Name of Employee" required />
          </p>
        </li>  
        <li><div class="divider"></div></li> 
        <li>
          <p class="left">
            <label for="excellence">Excellence<span class="req">*</span></label>
            <input type="text" name="excellence" placeholder="Name of Employee" required />
          </p>
        </li>     
        <li><div class="divider"></div></li>
        <li>
          <label for="date">Date*</span></label>
          <input type="date" name="date" required>
        </li>
        
        <li>
          <input class="btn btn-submit" type="submit" value="Submit" />
        </li>
        
      </ul>
    </form>  
  </div>
</div>
<!-- partial -->
  
</body>
</html>
