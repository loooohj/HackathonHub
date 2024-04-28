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
<?php 
$id=$_SESSION["id"]?>

<!--Navbar-->
<nav class="bg-secondary bg-opacity-10 navbar bg-body-tertiary border border-secondary border-start-0">
  <a class="navbar-brand" href="#"><span>HackathonHub</span></a>
    <form class="d-flex " role="search">
      <input class="form-control me-2 col-sm-12" type="search" placeholder="the Hackathon you are looking for" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <button type="button" class="btn btn-secondary btn-lg"><a href="index.php?controller=hackathon&action=createHackathon1" class="text-decoration-none text-light">Organize your own Hackathon</a></button>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"> <?=ucfirst($_SESSION["name"])?> <?=ucfirst($_SESSION["first_name"])?> </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php?controller=hackathon&action=readHackathons">Hackathons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?controller=hackathon&action=readMyhackathons">My hackathons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?controller=participation&action=readMyparticipations">My participations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Log out</a>
          </li>
          <!--<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>-->
        </ul>
      </div>
    </div>
</nav>
<!--Hackathons cards-->
<div class="container-fluid">
  <div class="row">
<?php
/*count($ListeHackathons);*/ 
foreach($ListeHackathons as $Hackathon){
  ?>
  <div class=" col-lg-3 col-sm-12 rounded-5 mt-5 position-relative">
  <div class="card border-top-0 border-start-0 border-end-0 border-5">
  <img src="<?= $Hackathon->img ?>" class="card-img-top rounded-top " alt="<?=$Hackathon->name_hackathon?>" >
  <div class="card-body">
    <h5 class="card-title text-center"><?=$Hackathon->name_hackathon?></h5>
    <p class="card-text text-center text-light"><small><?=$Hackathon->date?>, <?=$Hackathon->place?></small></p>
    <div class="d-flex">    
    <a href="index.php?controller=hackathon&action=updateMyhackathon1&id_hackathon=<?=$Hackathon->id_hackathon?>&id_user=<?=$id?>"><button type="button" class="btn btn-outline-success">Update</button></a>    
    <a href="index.php?controller=hackathon&action=deleteMyhackathon&id_hackathon=<?=$Hackathon->id_hackathon?>&id_user=<?=$id?>"><button type="button" class="btn btn-outline-danger">Delete</button>
    <a href="index.php?controller=hackathon&action=readHackathonByid&id_hackathon=<?=$Hackathon->id_hackathon?>"><button type="button" class="btn btn-outline-info">Details</button></a>
    <a href="index.php?controller=participation&action=readParticipants&id_hackathon=<?=$Hackathon->id_hackathon?>"><button type="button" class="btn btn-outline-warning" style="">Participants</button></a>
    </div>

</div>
</div>
  </div>
  <?php
}
?>
</div>
</div>
<nav aria-label="Page navigation example" class="pagination mt-5">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
<?php
include_once "Views/Includes/Footer.php";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>        
</body>
</html>