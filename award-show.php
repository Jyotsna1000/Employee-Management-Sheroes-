<?php 
//$url="http://localhost/project/validate.php";

session_start();
if (!isset($_SESSION['id'])) {
    //header('Location: noaccess.php');
    echo "<h1>Access denied</h1>";
    exit();
}

# An HTTP GET re
$url = 'http://localhost:8080/award';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
//print_r($data);
$arr=json_decode($data);

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Awards</title>
  <link rel="stylesheet" href="award-show-style.css">
<style type="text/css">
	.content {
  position: absolute;
  margin-top: 25em;
  left: 50%;
  z-index: 999;
  margin-top: 25em; 
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
<body>
<!-- partial:index.partial.html -->

<div class="container content">	
<div class="about-awardsbox">
		<div class="grid2">		  
      <figure class="effect-oscar">
			  <figcaption>
            <div class="trophy">
              <div class="cup"></div>
              <div class="lefthand"></div>
              <div class="righthand"></div>
              <div class="stand"></div>
              <div class="base"></div>
              <div class="circle"></div>
            </div>
			    <p>Employee of the month
            <br><br>-<?php echo $arr->empMonth;?></p>
			  </figcaption>
		 	</figure>
      <figure>
			  <figcaption>
			    <h1 style="padding-top:80px;">Awards of this Month</h1>
			  </figcaption>
		 	</figure>
			<figure class="effect-oscar">
			  <figcaption>
            <div class="trophy">
              <div class="cup"></div>
              <div class="lefthand"></div>
              <div class="righthand"></div>
              <div class="stand"></div>
              <div class="base"></div>
              <div class="circle"></div>
            </div>
          <p>Pat on the Back Award
            <br><br>-<?php echo $arr->patOnBag;?></p>
			  </figcaption>
		 	</figure>
			<figure class="effect-oscar">
			  <figcaption>
            <div class="trophy">
              <div class="cup"></div>
              <div class="lefthand"></div>
              <div class="righthand"></div>
              <div class="stand"></div>
              <div class="base"></div>
              <div class="circle"></div>
            </div>
			    <p>Customer Choice Award
            <br><br>-<?php echo $arr->customerChoice;?></p>
			  </figcaption>
		 	</figure>
			<figure class="effect-oscar">
			  <figcaption>
            <div class="trophy">
              <div class="cup"></div>
              <div class="lefthand"></div>
              <div class="righthand"></div>
              <div class="stand"></div>
              <div class="base"></div>
              <div class="circle"></div>
            </div>
			    <p>Innovative Idea Award
            <br><br>-<?php echo $arr->innovation;?></p>
			  </figcaption>
		 	</figure>
			<figure class="effect-oscar">
			  <figcaption>
            <div class="trophy">
              <div class="cup"></div>
              <div class="lefthand"></div>
              <div class="righthand"></div>
              <div class="stand"></div>
              <div class="base"></div>
              <div class="circle"></div>
            </div>
			    <p>Award of excellence
            <br><br>-<?php echo $arr->excellence;?></p>
			  </figcaption>
	 		</figure>		 
		</div>
	</div>
  </div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>
