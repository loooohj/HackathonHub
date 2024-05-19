<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body>    
<center>
<div class="card  mb-3 shadow bg-primary bg-opacity-10 border border-primary border-opacity-25" style="width: 60rem; height:40rem;">
<img src="IMAGES/admin.jpg" style="width:300px; border-radius:100px;" class=" mx-auto d-block" alt="admin">  
<div class="card-body">
    <h5 class="card-title mb-4" style="color:#05316B">Admin log in</h5>
    <form action="index.php?controller=admin&action=sign_in" method="post">
    <input type="text" class="form-control w-50 mb-4" placeholder="login" name="login">
    <input type="password" class="form-control w-50 mb-4" placeholder="password" name="password">
    <button type="submit" class="btn text-white w-25" style="background-color:#05316B">Log in</button>
    </form>  
</div>
</div>
</center>
</body>    

<!--admin type/admin_history/badalt type image /id_history user-->