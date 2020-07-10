<?php 
//$url="http://localhost/project/validate.php";

session_start();
if (!isset($_SESSION['id'])) {
    //header('Location: noaccess.php');
    echo "<h1>Access denied</h1>";
    exit();
}

$data=$_GET['date'];
$url = 'http://localhost:8080/event/'.$data;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
//print_r($data);
$arr=json_decode($data,true);
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Events Card</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,500,700'><link rel="stylesheet" href="event-list-style.css">
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

<body class="bg-img">
<div class="content container">
<h1 class="h1 title">Events of <?php echo $_GET['date'];?></h1><!-- partial:index.partial.html -->

  <?php foreach($arr as $key => $value){
    echo '<div class="card-media">
    <!-- media container -->
    <div class="card-media-object-container">
      <div class="card-media-object" style="background-image: url(images/event-list.jpeg);"></div>
          </div>
    <!-- body container -->
    <div class="card-media-body">
      <div class="card-media-body-top" >
        <span class="subtle">'.$value['eventDate'].'</span>
      </div>
      <span class="card-media-body-heading">'.$value['eventName'].'</span>
      <div class="card-media-body-supporting-bottom">
        <span class="card-media-body-supporting-bottom-text subtle" style="margin-left:-43em;">New Delhi</span>
        <span class="card-media-body-supporting-bottom-text subtle u-float-right">Free</span>
      </div>
      <div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal">
        <span class="card-media-body-supporting-bottom-text subtle">#'.$value['typeOfEvent'].'</span>
        <a href="event-detail.php?id='.$value['id'].'" class="card-media-body-supporting-bottom-text card-media-link u-float-right">VIEW</a>
      </div>
    </div>
  </div>
';

  }
  ?>
  
    
  
</div>
<!-- partial -->
  
</body>
</html>
