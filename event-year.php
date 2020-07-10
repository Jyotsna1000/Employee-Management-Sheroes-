<?php 
//$url="http://localhost/project/validate.php";

session_start();
if (!isset($_SESSION['id'])) {
    //header('Location: noaccess.php');
    echo "<h1>Access denied</h1>";
    exit();
}
$data=$_GET['year'];
$url = 'http://localhost:8080/eventyear/'.$data;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
//print_r($data);
$arr=json_decode($data,true);
?>

<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Events of an year</title>
  <link rel="stylesheet" href="event-year-style.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="normalize.min.css">
  <link rel="stylesheet"
href="https://fonts.googleapis.com/css?family=Lobster">
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
  top: 60%;
  left: 50%;
  z-index: 999;
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
<header class="month">
  <h1 align="center">Events of <?php echo $_GET['year'];?></h1>
  <ul class="slider content">
   <li class="slide s1">
 <table>
        <tr>
          <td width="200"></td>
          <td><p style="position: absolute; text-align: center;"><?php 
    foreach ($arr as $key => $value) {
      $month=date("m",strtotime($value['eventDate']));
  if($month==1){
    echo "<a href='event-detail.php?id=".$value['id']."'>EventName:".$value['eventName']."<br>";
  }} ?></p></td>
        </tr>
      </table>
</li>
    <li class="slide s2 bg">
      <table>
        <tr>
          <td width="200"></td>
          <td><p style="position: absolute; text-align: center;"><?php 
    foreach ($arr as $key => $value) {
      $month=date("m",strtotime($value['eventDate']));
  if($month==2){
    echo "<a href='event-detail.php?id=".$value['id']."'>EventName:".$value['eventName']."<br>";
  }} ?></p></td>
        </tr>
      </table>
  
    </li>
    <li class="slide s3">
  <table>
        <tr>
          <td width="200"></td>
          <td><p style="position: absolute; text-align: center;"><?php 
    foreach ($arr as $key => $value) {
      $month=date("m",strtotime($value['eventDate']));
  if($month==3){
    echo "<a href='event-detail.php?id=".$value['id']."'>EventName:".$value['eventName']."<br>";
  }} ?></p></td>
        </tr>
      </table>  </li>
    <li class="slide s4">
    <table>
        <tr>
          <td width="200"></td>
          <td><p style="position: absolute; text-align: center;"><?php 
    foreach ($arr as $key => $value) {
      $month=date("m",strtotime($value['eventDate']));
  if($month==4){
    echo "<a href='event-detail.php?id=".$value['id']."'>EventName:".$value['eventName']."<br>";
  }} ?></p></td>
        </tr>
      </table>
    </li>
    <li class="slide s5">
    <table>
        <tr>
          <td width="200"></td>
          <td><p style="position: absolute; text-align: center;"><?php 
    foreach ($arr as $key => $value) {
      $month=date("m",strtotime($value['eventDate']));
  if($month==5){
    echo "<a href='event-detail.php?id=".$value['id']."'>EventName:".$value['eventName']."<br>";
  }} ?></p></td>
        </tr>
      </table>
    </li>
    <li class="slide s6">
      <table>
        <tr>
          <td width="200"></td>
          <td><p style="position: absolute; text-align: center;"><?php 
    foreach ($arr as $key => $value) {
      $month=date("m",strtotime($value['eventDate']));
  if($month==6){
    echo "<a href='event-detail.php?id=".$value['id']."'>EventName:".$value['eventName']."<br>";
  }} ?></p></td>
        </tr>
      </table>
    </li>
    <li class="slide s7">
      <table>
        <tr>
          <td width="200"></td>
          <td><p style="position: absolute; text-align: center; color:white;"><?php 
    foreach ($arr as $key => $value) {
      $month=date("m",strtotime($value['eventDate']));
  if($month==7){
    echo "<a href='event-detail.php?id=".$value['id']."'>EventName:".$value['eventName']."<br>";
  }} ?></p></td>
        </tr>
      </table>
    </li>

<li class="slide s8">
      <table>
        <tr>
          <td width="200"></td>
          <td><p style="position: absolute; text-align: center; color: white;"><?php 
    foreach ($arr as $key => $value) {
      $month=date("m",strtotime($value['eventDate']));
  if($month==8){
    echo "<a href='event-detail.php?id=".$value['id']."'>EventName:".$value['eventName']."<br>";
  }} ?></p></td>
        </tr>
      </table>
    </li>
    <li class="slide s9">
    <table>
        <tr>
          <td width="200"></td>
          <td><p style="position: absolute; text-align: center; color: white;"><?php 
    foreach ($arr as $key => $value) {
      $month=date("m",strtotime($value['eventDate']));
  if($month==9){
    echo "<a href='event-detail.php?id=".$value['id']."'>EventName:".$value['eventName']."<br>";
  }} ?></p></td>
        </tr>
      </table>
    </li>
    <li class="slide s10">
      <table>
        <tr>
          <td width="200"></td>
          <td><p style="position: absolute; text-align: center; color: white;"><?php 
    foreach ($arr as $key => $value) {
      $month=date("m",strtotime($value['eventDate']));
  if($month==10){
    echo "<a href='event-detail.php?id=".$value['id']."'>EventName:".$value['eventName']."<br>";
  }} ?></p></td>
        </tr>
      </table>
    </li>
    <li class="slide">
      <table>
        <tr>
          <td width="200"></td>
          <td><p style="position: absolute; text-align: center; color: white;"><?php 
    foreach ($arr as $key => $value) {
      $month=date("m",strtotime($value['eventDate']));
  if($month==11){
    echo "<a href='event-detail.php?id=".$value['id']."'>EventName:".$value['eventName']."<br>";
  }} ?></p></td>
        </tr>
      </table>
    </li>
    <li class="slide">
      <table>
        <tr>
          <td width="200"></td>
          <td><p style="position: absolute; text-align: center; color: white;"><?php 
    foreach ($arr as $key => $value) {
      $month=date("m",strtotime($value['eventDate']));
  if($month==12){
    echo "<a href='event-detail.php?id=".$value['id']."'>EventName:".$value['eventName']."<br>";
  }} ?></p></td>
        </tr>
      </table>
    </li>
    
  </ul>

</header>
<!-- partial -->
  
</body>
</html>
