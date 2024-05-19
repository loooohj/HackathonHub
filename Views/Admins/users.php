<?php include_once "Views/Includes/Session.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Users</title>
    <link href="CSS/Admin.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex ">
      <?php include_once "Views/Includes/Navbar_admin.php"; 
      ?>
<div class="bg-body-tertiary w-75">
    <p class="display-4 ms-5 mt-5">Users list</p>
<table class="table table-striped mt-5">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">First_Name</th>
      <th scope="col">Email_address</th>
      <th scope="col">Telephone_number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($ListeUsers as $user){?>  
    <tr>
      <th scope="row"><?=$user->id?></th>
      <td><?=$user->name?></td>
      <td><?=$user->first_name?></td>
      <td><?=$user->email_address?></td>
      <td><?=$user->telephone_number?></td>
      <td><a href="index.php?controller=user&action=deleteUser&id_user=<?=$user->id?>&id_admin=<?=$_SESSION["admin_id"]?>"><button type="button" class="btn btn-outline-danger">Delete</button></a>
      <a href="index.php?controller=history&action=readIdhistory&id_user=<?=$user->id?>"><button type="button" class="btn btn-outline-warning">History</button></a>
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