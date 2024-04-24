<div class="card text-center  bg-primary bg-opacity-10 border border-primary border-opacity-25 flex-column" style="width: 25rem; height:100rem;">
  <div class="card-body">
    <h5 class="card-title m-5 fs-1" style="color:#05316B"><?=ucfirst($_SESSION["admin_name"])?></h5>
    <div class="card-text d-flex flex-column">
        <a href="index.php?controller=admin&action=readUsers" class="m-5 fs-5" style="color:#05316B">Users list</a>
        <a href="index.php?controller=admin&action=readHackathons" class="m-5 fs-5" style="color:#05316B">Hackathons list</a>
        <a href="index.php?controller=admin&action=readAdmins" class="m-5 fs-5" style="color:#05316B">Admins list</a>
        <a href="" class="m-5 fs-5" style="color:#05316B">Log out</a>
    </div>
    </div>
</div>