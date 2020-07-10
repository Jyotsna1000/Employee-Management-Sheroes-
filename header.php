<html>
<head>
  <link rel="stylesheet" type="text/css" href="employe-style.css">
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.2/css/all.css'>
</head>
<div class="app">
  <div class='header'>
    <div class='row'>
      <div class='col'>
        <div class='icon'>
          <div class='logo' id='tour-logo'>
            <img src='https://sheroes.com/img/logo.svg'>
          </div>
        </div>
      </div>
      <div class='col'>
        <div class='controls'>
          <!-- <a class='icon'>
            <i class='fas fa-envelope'></i>
          </a>
          <a class='icon'>
            <i class='fas fa-bell'></i>
          </a> -->
          <a class='user-profile' style='text-decoration:none;' href='logout.php' id='tour-user'>Logout 
            <?php session_start();echo $_SESSION['name'];?>
            <img src='images/edit.png'>
          </a>
        </div>
      </div>
    </div>
  </div>
  
  <div class='body'>
    <div class='sidebar'>
      <ul class='sidebar-nav'>
<?php if(strcasecmp($_SESSION['type'],"a")==0){
  echo" <li>
          <a href='dashboard1.php'>
            <i class='fas fa-home'>Dashboard</i>
          </a>
        </li>
        <li>
          <a href='employee.php'>
            <i class='fas fa-user'>Employee Details</i>
          </a>
        </li>
        <li>
          <a href='eventCalendar.php'>
            <i class='fas fa-basketball-ball'>Events</i>
          </a>
        </li>
        <li>
          <a href='complaint.php'>
            <i class='fas fa-book'>Complaint Desk</i>
          </a>
        </li>
        <li>
          <a href='news.php'>
            <i class='fas fa-car'>Add News</i>
          </a>
        </li>
        <li>
          <a href='award.php'>
            <i class='fas fa-trophy'>Acheivements</i>
          </a>
        </li>
        <li class='cta'>
          <a class='primary' id='tour-action' href='gallery.php'>
           Gallery
          </a>
        </li>
        <li class='cta'>
          <a class='primary' id='start-tour' href='admin.php'>
            Make Admin
          </a>
        </li>";
      }
      else{
        echo "
        <li>
          <a href='dashboard1.php'>
            <i class='fas fa-home'>Dashboard</i>
          </a>
        </li>
        <li>
          <a href='list.php'>
            <i class='fas fa-user'>Active Employes Lists</i>
          </a>
        </li>
        <li>
          <a id='tour-elements' href='eventCalendar.php'>
            <i class='fas fa-basketball-ball'>Events</i>
          </a>
        </li>
        <li>
          <a href='complaint.php'>
            <i class='fas fa-book'>Complaint Desk</i>
          </a>
        </li>
        <li class='cta'>
        <a class='primary' id='tour-action' href='gallery.php'>
            Gallery
          </a>
        </li>";
      }

      ?>
    </ul>
  </div>