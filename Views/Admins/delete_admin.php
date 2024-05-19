<?php
if($resultat)
header('location:index.php?controller=admin&action=readAdmins');
else echo "Error!";
?>