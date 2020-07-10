<?php 
//$url="http://localhost/project/validate.php";

session_start();
if (!isset($_SESSION['id'])) {
    //header('Location: noaccess.php');
    echo "<h1>Access denied</h1>";
    exit();
}
else{
$url = 'http://localhost:8080/getnews';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);

curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
//print_r($data);
$arr=json_decode($data,true);
//echo $_SESSION['name'];

echo
"<html lang='en' >
<head>
  <meta charset='UTF-8'>
  <title>Dashboard</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.2/css/all.css'><link rel='stylesheet' href='dashboard1-style.css'>

</head>
<body>
<!-- partial:index.partial.html -->
<div class='app'>
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
          <a class='user-profile' style='text-decoration:none;' href='logout.php' id='tour-user'>Logout "
            .$_SESSION['name'].
           " <img src='images/edit.png'>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class='body'>
    <div class='sidebar'>
      <ul class='sidebar-nav'>";
if(strcasecmp($_SESSION['type'],"a")==0){
  echo" 
  <li>
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
            <i class='fas fa-envelope'>Add News</i>
          </a>
        </li>
        <li>
          <a href='award.php'>
            <i class='fas fa-trophy'>Achievements</i>
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
            <i class='fas fa-user'>Active Employes List</i>
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

      echo"</ul>
    </div>
    <div class='main'>
      <div class='main__content'>
        <h1 class='h1 title'>
          <i class='fas fa-home'></i>
          <span>Dashboard</span>
        </h1>
        <div class='dashcards'>";
        if(strcasecmp($_SESSION['type'],"a")==0){
       echo
         "<div class='col'>
            <div class='card'>
              <h5 class='card__subtitle'><i class='fas fa-search'>Search</i></h5>
              <h2 class='card__title'><img class='card-img-top' src='images/employe.png' alt='Card image' style='width:150px; height:100px;'></h2>
              <p class='card__extra'><a class='primary' id='tour-action' href='search.php'>Quick View of Employes Detail</a></p>
            </div>
          </div>
          <div class='col'>
            <div class='card'>     
              <h5 class='card__subtitle'><i class='fas fa-trophy'>Awards</i></h5>
              <h2 class='card__title'><img class='card-img-top' src='images/award.jpg' alt='Card image' style='width:150px; height:100px;'></h2>
              <p class='card__extra'><a class='primary' id='tour-action' href='award-show.php'>Achievements</a></p>
            </div>
          </div>
          <div class='col'>
            <div class='card'>
              <h5 class='card__subtitle'><i class='fas fa-home'>Statistics</i></h5>
              <h2 class='card__title'><img src='images/stat.png' alt='Card image' style='width:150px; height:100px;'></h2>
              <p class='card__extra'><a class='primary' id='tour-action' href='chart.php'>Get some information</a></p>
            </div>
          </div>
        </div>";
      }else{
        echo
         "<div class='col'>
            <div class='card' id='tour-card'>
              <h5 class='card__subtitle'><i class='fas fa-search'>Edit</i></h5>
              <h2 class='card__title'><img class='card-img-top' src='images/employe.png' alt='Card image' style='width:150px; height:100px;'></h2>
              <p class='card__extra'><a class='primary' id='tour-action' href='edit.php?id=".$_SESSION['id']."'>View your Detail</a></p>
            </div>
          </div>
          <div class='col'>
            <div class='card'>
              <h5 class='card__subtitle'><i class='fas fa-trophy'>Awards</i></h5>
              <h2 class='card__title'><img class='card-img-top' src='images/award.jpg' alt='Card image' style='width:150px; height:100px;'></h2>
              <p class='card__extra'><a class='primary' id='tour-action' href='award-show.php'>Achievements</a></p>
            </div>
          </div>
          <div class='col'>
            <div class='card'>
              <h5 class='card__subtitle'><i class='fas fa-home'>Statistics</i></h5>
              <h2 class='card__title'><img class='card-img-top'   src='images/stat.png' alt='Card image' style='width:150px; height:100px;'></h2>
              <p class='card__extra'><a class='primary' id='tour-action' href='chart.php'>Get some information</a></p>
            </div>
          </div>
          </div>";     
      }

       echo" </div>
       <br>
          <h1 class='h1 title' style=''>
          <i class='fas fa-book'></i>
          <span>News Feed</span>
          </h1>
           <div class='container'>
                <div id='cards-container'>
                          <div class='cards'>";
                             foreach ($arr as $key => $value) {
                            echo "<a href='page.php?id=".$value['id']."'><div class='card1'><img src='images/".$value['imageUrl']."'style='width:200; height:200;''>
                            <div class='container'>
                                <h4>
                                <b>".$value['heading']."</b>
                                </h4>
                              </div>
                            </div></a>";      
                          }
                          echo "</div>
                    </div>  
                 
        </div>
      </div>
    </div>
  </div>

<!-- partial -->

</body>
</html>";
}
