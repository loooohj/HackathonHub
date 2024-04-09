<?php
    if($resultat->rowCount()==1){ 
        session_start();
        $_SESSION["email"]=$email;
        $_SESSION["first_name"]=$first_rname;
        header('location:index.php?controller=hackathon&action=readHackathons');
    }
else{
/*header('location:index.php?controller=hackathon&action=read3Hackathons')*/
?>
<script>
alert("Invalid email or password");
</script>
<?php }?>