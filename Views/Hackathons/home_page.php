<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HackathonHub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="CSS/HackathonHub.css" rel="stylesheet"> 
  </head>
<body>

<!--Navbar-->

<nav class="navbar navbar-expand-lg bg-secondary bg-opacity-10 border border-secondary border-start-0">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#"><span>HackathonHub</span></a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon border-0"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav column-gap-5">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#about" >About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#review">Reviews</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#contact">Contact</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Sign in</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link sign border border-white rounded p-2" href="#" data-bs-toggle="modal" data-bs-target="#examplemodal" data-bs-whatever="@mbo" >Sign up</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!--Welcome-->

<div class="display-1 text-white text-center">Welcome to <span>HackathonHub</span></div>
<div class="lead  text-light text-center fw-bold mt-2">your go-to platform for <br> <span>discovering</span> and <span>organizing</span> hackathons!</div> 

<!--About us-->

<h1 class="text-light text-center mb-5" id="about"><span>About us</span></h1>
<div class="kont container-lg mt-1">
 <div class="row justify-content-center align-items-center g-0">
 <div class="col-md-12 col-lg-6">
 <div class="card text-bg-dark mb-3">
    <p class="card-text p-5">Are you passionate about innovation, technology, and collaborative problem-solving? Look no further – <span class="fw-bold">HackathonHub</span> is here to connect you with a world of hackathons where you can unleash your creativity and make a difference.
As a participant, explore our curated list of upcoming hackathons tailored to your interests, skills, and schedule. Whether you're a seasoned developer, a design enthusiast, or a budding entrepreneur, there's a hackathon waiting for you.
But <span class="fw-bold">HackathonHub</span>  isn't just for participants – it's also for organizers! If you're looking to host your own hackathon, our platform provides all the tools and resources you need to plan, promote, and manage your event seamlessly. </p>
  </div>
 </div>
 <!--Carousel--> 
 <div class="col-md-12 col-lg-6">
 <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
  <?php
  $isFirst=true;
  foreach($ListeHackathons as $hackathon){ 
    if($isFirst){
      ?> 
     <div class="carousel-item active ">
        <img src="<?=$hackathon->img?>" class="img d-block w-100 opacity-50" alt="<?=$hackathon->name_hackathon?>">
        <div class="carousel-caption d-none d-md-block">
          <h5><?=$hackathon->name_hackathon?></h5>
          <p><?=$hackathon->date?></p>
        </div>
      </div> 
    <?php 
   $isFirst=false;
   continue; 
   }
    ?>
    <div class="carousel-item ">
        <img src="<?=$hackathon->img?>" class="img d-block w-100 opacity-50" alt="<?=$hackathon->name_hackathon?>">
        <div class="carousel-caption d-none d-md-block">
          <h5><?=$hackathon->name_hackathon?></h5>
          <p><?=$hackathon->date?></p>
        </div>
      </div>
  <?php
  }?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 </div>  
 </div>
 </div>

 <!--Reviews-->

 <div class="kont container-lg" id="review">
 <h1 class="text-light text-center"><span>Reviews</span></h1>
 <div class=" lead text-light text-center fw-bold mb-5"> Many have come before you...</div>
 <div class="row">
  <div class="col-lg-3 col-sm-12">
 <div class="card text-bg-dark mb-3">
  <div class="card-body">
    <h5 class="card-title">David Patel</h5>
    <p class="card-text">I recently hosted my first hackathon using HackathonHub, and I couldn't be happier with the experience. The platform provided everything I needed to organize a successful event, from creating a custom event page to managing registrations and submissions. The team behind HackathonHub was incredibly supportive throughout the process, offering helpful tips and guidance along the way. Thanks to their platform, my hackathon was a huge success, and I can't wait to host more events in the future!</p>
  </div>
  </div>
</div>
<div class="col-lg-3 col-sm-12">
 <div class="card text-bg-dark mb-3 shadow-lg">
  <div class="card-body">
    <h5 class="card-title">Sarah Johnson</h5>
    <p class="card-text">I've been using HackthonHub for a while now, and I'm consistently impressed by the quality and variety of hackathons they feature. Whether you're a beginner or a seasoned hacker, there's something for everyone on this platform. The ability to search and filter hackathons based on different criteria is incredibly helpful, and the event pages provide all the information you need to know before signing up. Overall, a fantastic resource for anyone looking to dive into the world of hackathons!</p>
  </div>
  </div>
</div>
<div class="col-lg-3 col-sm-12">
 <div class="card text-bg-dark mb-3">
  <div class="card-body">
    <h5 class="card-title">Michael Chen</h5>
    <p class="card-text">I absolutely love HackthonHub! It's my go-to platform whenever I'm looking for hackathons to participate in. The website is incredibly user-friendly and well-organized, making it easy to discover upcoming events that match my interests and schedule. Plus, the resources and tips they provide have been invaluable in helping me prepare and excel in hackathons. Highly recommended for anyone passionate about coding and innovation!</p>
  </div>
  </div>
</div>
<div class="col-lg-3 col-sm-12">
 <div class="card text-bg-dark mb-3">
  <div class="card-body">
    <h5 class="card-title">Emily Rodriguez</h5> 
    <p class="card-text">I stumbled upon HackthonHub while searching for hackathons to participate in, and I'm so glad I did! The platform has a sleek and intuitive interface that makes it easy to navigate and find relevant events. I appreciate the variety of hackathons available, catering to different skill levels and interests. The ability to track my progress and connect with other participants adds an extra layer of engagement. Highly recommend giving it a try!</p>
  </div>
  </div>
</div>
</div>
</div>

<!--footer-->

<div class="bg-secondary bg-opacity-10 border border-secondary border-start-0 mt-5" id="contact">
<div class="container">
    <div class="row">
      <div class="col-md-4 mt-4 text-light">
        <h5>About Us</h5>
        <p>Learn more about <span class="fw-bold">HackathonHub</span> and our mission to connect hackers, makers, and innovators from around the world.</p>
      </div>
      <div class="col-md-4 mt-4  text-light">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-decoration-none text-light"><span>About</span></a></li>
          <li><a href="#" class="text-decoration-none text-light"><span>Reviews</span></a></li>
        </ul>
      </div>
      <div class="col-md-4 mt-4 text-light">
        <h5>Contact Us</h5> 
        <address>
          <p>123 Hackathon St.</p>
          <p>Tech City, USA</p>
          <p>Email: info@example.com</p>
        </address>
      </div>
    </div>
  </div>
</div>


<!-- Full screen modal: Sign in-->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-white text-center" id="exampleModalLabel">Sign In</h1>
      </div>
      <div class="modal-body">
  <form method="post" action="index.php?controller=user&action=sign_in">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-white">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label text-white" for="exampleCheck1">Check me out</label>
  </div>
  <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="submit" class="border border-white rounded p-2">Sign in</button>
      </div>
  </form>
      </div>
    </div>
  </div>
</div>

<!-- Full screen modal: Sign up-->

<div class="modal fade" id="examplemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-white text-center" id="exampleModalLabel">Sign Up</h1>
      </div>
      <div class="modal-body">
    <form action="index.php?controller=user&action=sign_up" method="post">
     <div class="mb-3">
    <label for="first_name" class="form-label text-white">First Name</label>
    <input type="text" class="form-control" id="first_name" name="first_name">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label text-white">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label text-white">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text text-white">We'll never share your email with anyone else.</div>
  </div> 
  <div class="mb-3">
    <label for="tel" class="form-label text-white">Telephone number</label>
    <input type="tel" class="form-control" id="tel" name="tel">
  </div> 
  <!--pattern="[0-9]{8}"--> 
  <div class="mb-3">
    <label for="password" class="form-label text-white">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3">
    <label for="confirm_password" class="form-label text-white">Confirm password</label>
    <input type="password" class="form-control" id="confirm_password" name="confirm_password">
  </div>
  <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="submit" class="border border-white rounded p-2">Sign up</button>
      </div>
  </form>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>        
</body>
</html>