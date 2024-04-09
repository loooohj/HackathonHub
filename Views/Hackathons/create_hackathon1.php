<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add hackathon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="CSS/HackathonHub.css" rel="stylesheet"> 
</head>
<body>
    <div class="card text-bg-dark mt-5 ms-5 w-75 py-5 px-2">
        <form class="row  align-items-center" action="index.php?controller=hackathon&action=createHackathon2" method=post>
            <div class="col-md-4 me-5 mt-5 ms-5">
              <label for="name_hackathon" class="form-label">Name</label>
              <input type="text" class="form-control" id="name_hackathon" name="name_hackathon">
            </div>
            <div class="col-md-4 mt-5 ms-5 " >
              <label for="img" class="form-label">Image</label>
              <input type="text" class="form-control" id="img" name="img">
            </div>
            <div class="col-md-4 me-5 mt-5 ms-5">
              <label for="date" class="form-label">Date</label>
              <input type="text" class="form-control" id="date" name="date" placeholder="JJ/MM/YYYY">
            </div>
            <div class="col-md-4 mt-5 ms-5 ">
              <label for="place" class="form-label">Place</label>
              <input type="text" class="form-control" id="place" name="place">
            </div>
            <div class="col-md-4 me-5 mt-5 ms-5">
              <label for="max_num_participants" class="form-label">The maximum number of participants</label>
              <input type="text" class="form-control" id="max_num_participants" name="max_num_participants">
            </div>
            <div class="col-md-4 mt-5 ms-5">
              <label for="num_days" class="form-label">Number of days</label>
              <input type="text" class="form-control" id="num_days" name="num_days">
            </div>
            <div class="col-md-4 me-5 mt-5 ms-5">
                <label for="start_time" class="form-label">Start time</label>
                <input type="text" class="form-control" id="start_time" name="start_time" placeholder="HH:MM">
              </div>
              <div class="col-md-4 mt-5 ms-5 " style="margin-right: 10%;">
                <label for="end_time" class="form-label">End time</label>
                <input type="text" class="form-control" id="end_time" name="end_time" placeholder="HH:MM">
              </div>
            <div class="col-12 mt-5 d-grid ">
              <button type="submit" class="btn btn-secondary btn-lg">Create</button>
            </div>
          </form>   
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>        
</body>
</html>