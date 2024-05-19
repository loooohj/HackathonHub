<?php
if($resultat)
header('location:index.php?controller=admin&action=readHackathons');
else echo "Error!";
?>