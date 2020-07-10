<?php
# An HTTP GET request example

$data=$_GET['id'];
$url = 'http://localhost:8080/eventsingle/'.$data;
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
  <title>Event Card</title>
  <link href="https://fonts.googleapis.com/css2?family=Inconsolata&family=VT323&display=swap" rel="stylesheet"><link rel="stylesheet" href="event-detail-style.css">
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
  /*background-color: #f3efe7;*/
  box-shadow: -1px 4px 28px 0px rgba(0, 0, 0, 0.75);
}
</style>
</head>
<?php include 'header.php';?>
<body class="bg-img">
<!-- partial:index.partial.html -->
<div class="artboard">
 <div class="card">

  <div class="card__side card__side--back">
   <div class="card__cover">
    <h4 class="card__heading">
     <span class="card__heading-span"><?php echo $arr->eventName;?></span>
    </h4>
   </div>
   <div class="card__details">
    <ul>
     <li><?php echo $arr->description;?></li>
     <li>Event Date:<?php echo $arr->eventDate;?></li>
     <li>Oraginzer Name:<?php echo $arr->organizerName;?></li>
     <li>Type of Event:<?php echo $arr->typeOfEvent;?></li>
     <li>Number of Attendees:<?php echo $arr->noOfAttendees;?></li>
     
    </ul>
   </div>
  </div>

  
 </div>
</div>
<!-- partial -->
  
</body>
</html>
