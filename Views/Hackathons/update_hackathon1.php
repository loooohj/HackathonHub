<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update hackathon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="CSS/HackathonHub.css" rel="stylesheet"> 
</head>
<body>
<?php session_start();
    $id=$_SESSION["id"];?>
    <div class="CreateHackathonForm card text-bg-dark  ms-5 w-75 mt-4  px-2">
        <form class="row  align-items-center" action="index.php?controller=hackathon&action=updateMyhackathon2&id_hackathon=<?=$h->id_hackathon?>&id_user=<?=$id?>" method=post>
            <div class="col-md-4 me-5 mt-4 ms-5">
              <label for="name_hackathon" class="form-label">Name</label>
              <input type="text" class="form-control" id="name_hackathon" name="name_hackathon" value="<?=$h->name_hackathon?>">
            </div>
            <div class="col-md-4 mt-4 ms-5">
              <label for="img" class="form-label">Poster</label>
              <input type="file" id="ajouter_photo1" name="img" value="<?=$h->img?>">
              <label for="ajouter_photo1" id="ajouter_photo2" onclick="ajouter()"><i class="fas fa-plus" id="plus"></i></label>
            </div>
            <div class="col-md-4 me-5 mt-4 ms-5">
              <label for="date" class="form-label">Date</label>
              <input type="text" class="form-control" id="date" name="date" placeholder="JJ/MM/YYYY" value="<?=$h->date?>">
            </div>
            <div class="col-md-4 mt-4 ms-5 ">
              <label for="place" class="form-label">Place</label>
              <input type="text" class="form-control" id="place" name="place" value="<?=$h->place?>">
            </div>
            <div class="col-md-4 me-5 mt-4 ms-5">
              <label for="max_num_teams" class="form-label">The maximum number of teams</label>
              <input type="text" class="form-control" id="max_num_teams" name="max_num_teams" value="<?=$h->max_num_teams?>">
            </div>
            <div class="col-md-4 mt-4 ms-5">
              <label for="num_days" class="form-label">Number of days</label>
              <input type="text" class="form-control" id="num_days" name="num_days" value="<?=$h->num_days?>">
            </div>
            <div class="col-md-4 me-5 mt-4 ms-5">
                <label for="start_time" class="form-label">Start time</label>
                <input type="text" class="form-control" id="start_time" name="start_time" placeholder="HH:MM" value="<?=$h->start_time?>">
              </div>
              <div class="col-md-4 mt-4 ms-5 " style="margin-right: 10%;">
                <label for="end_time" class="form-label">End time</label>
                <input type="text" class="form-control" id="end_time" name="end_time" placeholder="HH:MM" value="<?=$h->end_time?>">
              </div>
              <div class="col-md-4 me-5 mt-4 ms-5">
                <label for="min_num_members" class="form-label">Minimum number of members per team</label>
                <input type="text" class="form-control" id="min_num_members" name="min_num_members" value="<?=$h->min_num_members?>">
              </div>
              <div class="col-md-4 mt-4 ms-5 " style="margin-right: 10%;">
                <label for="max_num_members" class="form-label">Maximum number of members per team</label>
                <input type="text" class="form-control" id="max_num_members" name="max_num_members" value="<?=$h->max_num_members?>">
              </div>
              <div class="col-md-4 mt-4 ms-5 " style="margin-right: 8%;">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="IN DINARS" value="<?=$h->price?>">
              </div>
              <div class="col-md-4 mt-4 ms-5" style="margin-right: 10%;">
                <label for="descriptive text" class="form-label">Descriptive text</label>
                <textarea  class="form-control" id="descriptive text" placeholder="Descriptive text" name="descriptive_text" ><?=$h->descriptive_text?></textarea>
              </div>
              <input type="hidden" value=<?=$id?> name="id">
            <div class="col-12 mt-5 d-grid ">
              <button type="submit" class="btn btn-secondary btn-lg">Update</button>
            </div>

          </form>   
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>        
</body>
</html>
