<?php
if($resultat)
header('location:index.php?controller=hackathon&action=readMyhackathons');
else echo "Error!";
?>