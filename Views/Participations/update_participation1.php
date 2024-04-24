<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="CSS/HackathonHub.css" rel="stylesheet"> 
</head>
<body>

    <div class="card bg-dark p-5" >
        <form action="index.php?controller=participation&action=updateMyparticipation2&id_participation=<?=$p->id_participation?>" method=post>
    <div class="row align-items-center">
    <div class="col-lg-6 me-5">
    <label for="team_name" class="text-light">Team name</label>
    <input class="form-control form-control-lg" type="text" id="team_name" name="team_name" value="<?=$p->team_name?>">
    </div>
    <div class="col-auto ms-5">
    <label for="members" class="text-light">The number of team members</label>
    <input type="number" min="<?=$min?>" max="<?=$max?>" class="form-control" id="members" name="members" value="<?=$p->num_team_members?>">
    </div>
    </div>
    <div class="col-auto">
    <button type="submit" class="nav-link sign border border-white rounded p-2 text-center m-5">Update</button>
    </div>
    </form> 
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>        
</body>
</html>