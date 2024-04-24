<?php include_once "Views/Includes/Session.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admins</title>
    <link href="CSS/Admin.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex ">
    <?php include_once "Views/Includes/Navbar_admin.php"; ?>
<div class="bg-body-tertiary w-75">
    <p class="display-4 ms-5 mt-5">Admins list</p>
    <table class="table table-striped mt-5">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Login</th>
      <th scope="col">Email_address</th>
      <th scope="col">Action</th>
      <th scope="col">Last Login</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($ListeAdmins as $admin){?>  
    <tr>
      <th scope="row"><?=$admin->admin_id?></th>
      <td><?=$admin->admin_name?></td>
      <td><?=$admin->login?></td>
      <td><?=$admin->admin_email?></td>
      <td></td>
    </tr>
    <?php }?>
  </tbody>  
</table> 
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>        
</body>
</html>    