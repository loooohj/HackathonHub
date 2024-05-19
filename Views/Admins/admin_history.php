<?php include_once "Views/Includes/Session.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard History</title>
    <link href="CSS/Admin.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div class="d-flex ">
    <?php include_once "Views/Includes/Navbar_admin.php"; ?>
    <div class="bg-body-tertiary w-75">
      <p class="display-4 ms-5 mt-5"> <?=ucfirst($admin['admin_name'])?>'s History
      <a href="index.php?controller=adminhistory&action=deletehistory&id_admin=<?=$admin['admin_id']?>"><button type="button" class="btn btn-outline-danger">Delete all</button></a> 
      </p>
<table class="table table-striped mt-5">
<thead>
<tr>
      <th scope="col">Activity</th>
      <th scope="col">Date</th>
      <th scope="col">ID user/hackathon</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($ListeHistory as $history){?>  
    <tr>
      <th scope="row"><?=$history->Activity?></th>
      <td><?=$history->TimeStamp?></td>
      <td><?=$history->TargetID?></td>
    </tr>
    <?php }?>
  </tbody>  
</table>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>        
</body>
</html>