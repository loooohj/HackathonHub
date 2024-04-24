<?php
if($resultat)
header('location:index.php?controller=participation&action=readMyparticipations');
else echo "Error!";
?>