<?php
  if($resultat){ 
   header('location:index.php?controller=hackathon&action=readHackathons');
  }
  else echo "<p>Error!</p>";
?>