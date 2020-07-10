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
<html>
<head>
	<script src='sweetalert.min.js'></script>
	<link rel='stylesheet' href='sweetalert.min.css'>
</head>
<body>

</body>
</html>
<?php
# An HTTP GET request example
$data = $_POST;
if(!empty($data)){

 $url = 'http://localhost:8080/event';
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
if($response){
echo "<script type='text/javascript'>
swal('Event Registered','Plan for the day','success');
</script>";	
}
// Close cURL session
//session_write_close();

curl_close($curl);
}
if(!empty($_GET['eventDate'])){
$data=$_GET['eventDate'];	
}
else if(!empty($_POST['eventDate']))
{
	$data=$_POST['eventDate'];
}


$url = 'http://localhost:8080/event/'.$data;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
//print_r($data);
$arr=json_decode($data,true);
// kvstore API url
//unset($_POST['submit']);
//print_r($_POST);
//$arrayName = array('id'=>1, 'firstName' => $_POST['firstName']);
//die;
//echo "succes";
//print_r($response);
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Event Card</title>
  <link href="https://fonts.googleapis.com/css2?family=Inconsolata&family=VT323&display=swap" rel="stylesheet"><link rel="stylesheet" href="event-detail-style.css">
  <script src='event-register-script.js'></script>
  <link rel="stylesheet" type="text/css" href="event-register-style.css">
<style type="text/css">
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
  background-color: #f3efe7;
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
  width: 470px;
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
 

<?php foreach ($arr as $key => $value) {
  echo '<div class="row">
  <div class="col-sm">
  <div class="card">
  <div class="card__side card__side--back">
   <div class="card__cover">
    <h4 class="card__heading">
     <span class="card__heading-span">'.$value['eventName'].'</span>
    </h4>
   </div>
   <div class="card__details">
    <ul>
     <li>'.$value['description'].'</li>
     <li>Event Date:'.$value['eventDate'].'</li>
     <li>Oraginzer Name:'.$value['organizerName'].'</li>
     <li>Type of Event:'.$value['typeOfEvent'].'</li>
     <li>Number of Attendees:'.$value['noOfAttendees'].'</li>
     
    </ul>
   </div>
  </div>

  
 </div></div></div>';
  # code...
}?>
  
    <a  id="create" class="login-trigger"  data-target="#login" data-toggle="modal">+</a>
  
<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">
    
    <div class="modal-content">
      <div class="modal-body">
        <button data-dismiss="modal" class="close">&times;</button>
        <h4>Register Event</h4>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="target">
          <input type="text" name="eventName" class="eventname form-control" placeholder="Event Name" required />
          <input type="text" name="organizerName" class="organizername form-control" placeholder="Organizer Name" required />
          <select name="typeOfEvent" id="typeOfEvent" class="typeOfEvent form-control" required>
          	<option value="Technical Event">Technical event</option>
          	<option value="Promotional Event">Promotional event</option>
          	<option value="Fun Event">Fun event</option>
          	<option value="Meeting">Meetings</option>
          </select>
          <input type="Number" name="noOfAttendees" class="noOfAttendees form-control" placeholder="Number of Attendeees" required />
          <input type="text" name="description" class="description form-control" placeholder="description" required />
          <input type="hidden" name="eventDate" value=<?php if(!empty($_GET['eventDate'])){
          	echo $_GET['eventDate'];
          }else{
          	echo $_POST['eventDate'];
          } ?>>
          <input class="btn login" type="submit" value="Submit" />
        </form>
      </div>
    </div>
  </div>  
</div>
<!-- partial -->
  <script src='jquery.min.js'></script>
<script src='bootstrap.min.js'></script>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">


<!-- <script type="text/javascript">
	$("#target").submit(function() {
  swal('Event Registered',"Please await for response",'success')
});
</script>
 --></body>
</html>
