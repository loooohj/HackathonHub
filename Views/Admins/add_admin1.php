<?php include_once "Views/Includes/Session.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add admin</title>
    <link href="CSS/Admin.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div class="d-flex ">
    <?php include_once "Views/Includes/Navbar_admin.php"; ?>
    <div class="CreateHackathonForm card bg-primary bg-opacity-10 border border-primary border-opacity-25 flex-column ms-5 w-75   px-2 py-5 ">
        <form class="row  align-items-center" action="index.php?controller=admin&action=addAdmin2" method=post>
            <div class="col-md-4 me-4 mt-4 ms-5">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="col-md-4 me-5 mt-4 ms-4">
              <label for="login" class="form-label">Login</label>
              <input type="text" class="form-control" id="login" name="login">
            </div>
            <div class="col-md-4 mt-4 ms-5 ">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="col-md-4 me-5 mt-4 ms-5">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="col-md-4 mt-4 ms-5">
              <label for="admin_type" class="form-label">Admin type</label>
              <input type="number" min="1" max="2" class="form-control" id="admin_type" name="admin_type">
            </div>  
            <div class="col-12 mt-5 d-grid ">
              <button type="submit" class="btn btn-secondary btn-lg" style="background-color:#05316B">Add</button>
            </div>

          </form>   
    </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>        
</body>
</html>