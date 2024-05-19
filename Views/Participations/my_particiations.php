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
<nav class="bg-secondary bg-opacity-10 navbar bg-body-tertiary border border-secondary border-start-0">
  <a class="navbar-brand" href="#"><span>HackathonHub</span></a>
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
<p class="text-light display-5 text-center bg-secondary bg-opacity-10 border border-secondary ">List of Participations</p>

<table class="table table-striped mt-5">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Hackathon</th>
      <th scope="col">Team name</th>
      <th scope="col">Number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($ListeParticipations as $Participant){?>
    <tr>
      <th scope="row"><?=$Participant->id_participation?></th>
      <td><?=$Participant->id_hackathon?></td>
      <td><?=$Participant->team_name?></td>
      <td><?=$Participant->num_team_members?></td>
      <td>   <a href="index.php?controller=participation&action=deleteMyparticipation&id_participation=<?=$Participant->id_participation?>&id_hackathon=<?=$Participant->id_hackathon?>&id_user=<?=$id_user?>"><button type="button" class="btn btn-outline-danger me-5">Delete</button></a><a href="index.php?controller=participation&action=updateMyparticipation1&id_participation=<?=$Participant->id_participation?>"><button type="button" class="btn btn-outline-success ">Update</button></a> </td>
      </tr>
    <?php }?>
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>        
</body>
</html>    