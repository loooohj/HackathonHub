<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="CSS/HackathonHub.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body>
  <?php 
  session_start();
  ?>
  <p class="text-light display-5 text-center fw-bold mt-2 bg-secondary bg-opacity-10 border border-secondary "><?=$h->name_hackathon?></p>
  <img src="<?=$h->img?>" class="card-img-top img-thumbnail rounded mx-auto d-block " style="height: 550px;width:80%;" alt="<?=$h->img?>">
  <div class="bg-secondary bg-opacity-10 border border-secondary  row align-items-center">
    <div class="col-lg-6 col-sm-12 ps-5">
      <i class="fa-regular fa-calendar fa-2xl my-5" style="color: #ffffff;"> <?=$h->date?> (<?=$h->num_days?> day(s) )</i> 
      <br>
      <i class="fa-solid fa-location-dot fa-2xl my-4" style="color: #ffffff;"> <?=$h->place?></i>
      <br>
    <i class="fa-regular fa-clock fa-2xl my-5" style="color: #ffffff;"> From <?=$h->start_time?> To <?=$h->end_time?></i>
    <br>
    <i class="fa-solid fa-money-bill fa-2xl my-4" style="color: #ffffff;"><?php if($h->price==0) echo " Free"; else echo " ".$h->price." Dinars per each team member."?></i>
    <br>
    <i class="fa-solid fa-people-group fa-2xl my-5" style="color: #ffffff;"> Members:<?php if($h->min_num_members==$h->max_num_members){ echo "exactly $h->min_num_members";} else{echo "From $h->min_num_members To $h->max_num_members";}?></i>
    </div> 
    <div class="card bg-dark  col-lg-6 col-sm-12 fs-4 p-5 border-start border-5">
    <p class="text-light"><?=$h->descriptive_text?></p>  
  </div>
  <a class="nav-link sign border border-white rounded py-5 text-center fs-1" href="index.php?controller=participation&action=participate&id_hackathon=<?=$h->id_hackathon?>&max=<?=$h->max_num_members?>&min=<?=$h->min_num_members?>&image=<?=$h->img?>">Participer</a>  
</div>

</body>