<?php include_once "Views/Includes/Session.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Dashboard Hackathons</title>
</head>
<body>
    <div class="d-flex">
    <?php include_once "Views/Includes/Navbar_admin.php"; ?>
<div class="bg-body-tertiary w-75">
    <p class="display-4 ms-5 mt-5">Hackathons list</p>
<table class="table table-striped mt-5  align-middle table-bordered">
<thead>
    <tr>
      <th scope="col" class="col-lg-8">ID</th>
      <th scope="col" class="col-lg-8">Name</th>
      <th scope="col" class="col-lg-8">Organizer</th>
      <th scope="col" class="col-lg-8">Date</th>
      <th scope="col" class="col-lg-8">Place</th>
      <th scope="col" class="col-lg-8">Maximum number of teams</th>
      <th scope="col" class="col-lg-8">Start time</th>
      <th scope="col" class="col-lg-8">End time</th>
      <th scope="col" class="col-lg-8">Number of days</th>
      <th scope="col" class="col-lg-8">Price</th>
      <th scope="col" class="col-lg-8">Minimum number of members</th>
      <th scope="col" class="col-lg-8">Maximum number of members</th>
      <th scope="col" class="col-lg-8">Descriptive text</th>
      <th scope="col" class="col-lg-8">Action</th>

    </tr>
  </thead>
  <tbody>
      <?php foreach($ListeHackathons as $hackathon){?>  
    <tr>
      <th scope="row"><?=$hackathon->id_hackathon?></th>
      <td><?=$hackathon->name_hackathon?></td>
      <td><?=$hackathon->id_user?></td>
      <td><?=$hackathon->date?></td>
      <td><?=$hackathon->place?></td>
      <td><?=$hackathon->max_num_teams?></td>
      <td><?=$hackathon->start_time?></td>
      <td><?=$hackathon->end_time?></td>
      <td><?=$hackathon->num_days?></td>
      <td><?=$hackathon->price?></td>
      <td><?=$hackathon->min_num_members?></td>
      <td><?=$hackathon->max_num_members?></td>
      <td><?=$hackathon->descriptive_text?></td>
      <td><a href="index.php?controller=hackathon&action=delete_hackathon&id_hackathon=<?=$hackathon->id_hackathon?>"><button type="button" class="btn btn-outline-danger">Delete</button></a>
      <a href="index.php?controller=hackathon&action=updateMyhackathon1&id_hackathon=<?=$Hackathon->id_hackathon?>&id_user=<?=$id?>"><button type="button" class="btn btn-outline-success">Update</button></a>  
    </td> 
    </tr>
    <?php }?>
  </tbody>  
</table>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>        
</body>
</html>