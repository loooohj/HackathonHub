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
<p class="text-light display-5 text-center f mt-2 bg-secondary bg-opacity-10 border border-secondary ">List of Teams</p>

<table class="table table-striped">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Team name</th>
      <th scope="col">Number</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($ListeParticipants as $Participant){?>
    <tr>
      <th scope="row"><?=$Participant->id_participation?></th>
      <td><?=$Participant->team_name?></td>
      <td><?=$Participant->num_team_members?></td>
      
    </tr>
    <?php }?>
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>        
</body>
</html>    