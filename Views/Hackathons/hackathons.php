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
<h2 class="text-light mb-3">Welcome <?=$_SESSION["email"]?></h2>

<!--Hackathons cards-->
<div class="container-fluid">
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
</body>
</html>