<?php
include_once "connexion.php";
$db=connexionDB();
session_start();
$email=$db->quote($_SESSION["email"]);
$sql="SELECT * FROM users WHERE email_address=$email";
try{
    $resultat=$db->query($sql);
    $user=$resultat->fetch();
    $_SESSION["email"]=$user["name"];
    $_SESSION["first_name"]=$user["first_name"];
}
catch(PDOException $exception){
    die($exception->getMessage());
}

?>
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
<nav class="bg-secondary bg-opacity-10 navbar bg-body-tertiary border border-secondary border-start-0">
  <a class="navbar-brand" href="#"><span>HackathonHub</span></a>
    <form class="d-flex " role="search">
      <input class="form-control me-2 col-sm-12" type="search" placeholder="the Hackathon you are looking for" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <button type="button" class="btn btn-secondary btn-lg"><a href="index.php?controller=hackathon&action=createHackathon1" class="text-decoration-none text-light">Click here to create your own Hackathon</a></button>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"> <?=ucfirst($_SESSION["email"])?> <?=ucfirst($_SESSION["first_name"])?> </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Hackathons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">My hackathons</a>
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
<h2 class="text-light mb-3">Welcome <?=ucfirst($_SESSION["email"])?> <?= ucfirst($_SESSION["first_name"])?></h2>

<!--Hackathons cards-->
<div class="container-fluid ">
<?php
/*count($ListeHackathons);*/ 
foreach($ListeHackathons as $Hackathon){
  ?>
  <div class="col-lg-3 col-sm-12">
  <div class="card">
  <img src="<?=$Hackathon->img?>" class="card-img-top" alt="<?=$Hackathon->name_hackathon?>">
  <div class="card-body">
    <h5 class="card-title text-center"><?=$Hackathon->name_hackathon?></h5>
    <p class="card-text text-center"><small class="text-body-secondary"><?=$Hackathon->date?>, <?=$Hackathon->place?></small></p>
  </div>
  </div>
  </div>
<?php
}
?>
</div>
<?php
include_once "Views/Includes/Footer.php";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>        
</body>
</html>