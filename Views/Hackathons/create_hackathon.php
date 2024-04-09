<?php
  if($resultat){
    session_start();
    $_SESSION["email"]=$email;
    $_SESSION["first_name"]=$first_rname;
   header('location:index.php?controller=hackathon&action=readHackathons');
  }
  else echo "<p>Error!</p>";
?>