<?php
    if($resultat->rowCount()==1){ 
        /*nheb yekhou first_name */
        header('location:index.php?controller=hackathon&action=readHackathons');
    }
else{
/*header('location:index.php?controller=hackathon&action=read3Hackathons')*/
?>
<script>
alert("Invalid email or password");
</script>
<?php }?>