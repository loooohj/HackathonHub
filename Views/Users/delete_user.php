<?php
if($resultat)
header('location:index.php?controller=admin&action=readUsers');
else echo "Error!";
?>