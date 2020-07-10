<?php 
//$url="http://localhost/project/validate.php";

session_start();
if (!isset($_SESSION['id'])) {
    //header('Location: noaccess.php');
    echo "<h1>Access denied</h1>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Gallery</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'><link rel="stylesheet" href="gallery-style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="swiper-container main-slider loading">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(images/gallery1.jpg)">
        <img src="images/gallery1.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Sheroes Summit</p>
        <span class="caption">The Summit was created with the objective of bringing women professionals from SHEROES community and businesses on a common platform. A platform which encourages them to share various perspectives and experiences and ultimately improve their respective strategy and execution. Putting women’s growth on the big roadmap was important to us, so was the ability to strengthen custom-fit career choices.</span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(images/gallery2.jpg)">
        <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLWTdaX3J5b1VueDg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Outing</p>
        <span class="caption">Sheroes Believe in team building.Team coordination is a process that involves the use of strategies and patterns of behavior aimed to integrate actions, knowledge and goals of interdependent members, in order to achieve common goals.</span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(images/gallery3.jpg)">
        <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLRml1b3B6eXVqQ2s" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Sheroes Hackathon</p>
        <span class="caption">We conduct the hackathon to improve our enthusiasm in the field for self growth.The more you know, the better, and the core principle of self-growth is to obtain knowledge, improve skills</span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(images/gallery4.jpeg)">
        <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLVUpEems2ZXpHYVk" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Sheroes Talk</p>
        <span class="caption">A high-energy series of multi-city events, a coming together of thought leaders, disrupters, women trailblazers, artists and members of the SHEROES community. Rich in conversations, connections, and opportunities, this year we talk about the power of building communities and how this movement is changing the world!</span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(images/gallery5.jpg)">
        <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLNXBIcEdOUFVIWmM" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Offline events</p>
        <span class="caption">Apart from the job board, there are community meets, job fairs, special workshops and programs, coaching, mentoring, community reosurces to help women professionals.</span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(images/gallery6.jpg)">
        <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLVUpEems2ZXpHYVk" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Fun event</p>
        <span class="caption">Sheroes helps women to relieve from stress and live for a moment.Research shows that when we have fun with others, these experiences have a positive effect on building trust and developing communication. </span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(images/gallery7.jpg)">
        <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLVUpEems2ZXpHYVk" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Sheroes as team</p>
        <span class="caption">Team Spirit is defined on Coach Wooden’s Pyramid of Success as “A genuine consideration for others. An eagerness to sacrifice personal interests of glory for the welfare of all.”</span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(images/gallery8.jpg)">
        <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLVUpEems2ZXpHYVk" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Honour Women</p>
        <span class="caption">Nivedita Bhasin (born 1963) of Indian Airlines became the youngest woman pilot in world civil aviation history to command a commercial jet aircraft on 1 January 1990 at the age of 26. </span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(images/gallery9.jpg)">
        <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLVUpEems2ZXpHYVk" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Woman for Woman</p>
        <span class="caption">“The day will come when men will recognize woman as his peer, not only at the fireside, but in councils of the nation. Then, and not until then, will there be the perfect comradeship, the ideal union between the sexes that shall result in the highest development of the race.”</span>
      </div>
    </div>
  </div>
  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev swiper-button-white"></div>
  <div class="swiper-button-next swiper-button-white"></div>
</div>

<!-- Thumbnail navigation -->
<div class="swiper-container nav-slider loading">
  <div class="swiper-wrapper" role="navigation">
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(images/gallery1.jpg)">
        <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLbVhsNzdIYmlfN1E" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Sheroes Summit</p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(images/gallery2.jpg)">
        <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLWTdaX3J5b1VueDg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Outing</p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(images/gallery3.jpg)">
        <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLRml1b3B6eXVqQ2s" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Sheroes Hackathon</p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(images/gallery4.jpeg)">
        <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLVUpEems2ZXpHYVk" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Sheroes Talk</p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(images/gallery5.jpg)">
        <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLNXBIcEdOUFVIWmM" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Offline Events</p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(images/gallery6.jpg)">
        <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLNXBIcEdOUFVIWmM" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Fun Events</p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(images/gallery7.jpg)">
        <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLNXBIcEdOUFVIWmM" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Sheroes as Team</p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(images/gallery8.jpg)">
        <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLNXBIcEdOUFVIWmM" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Honour Women</p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(images/gallery9.jpg)">
        <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLNXBIcEdOUFVIWmM" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Woman for Woman</p>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js'></script><script  src="gallery-script.js"></script>

</body>
</html>
