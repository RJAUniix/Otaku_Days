<?php 

require("config.inc.php");

// if(preg_match("/^[a-zA-Z]+$/",$_POST['nom'])  && preg_match("/^.+$/",$_POST['prenom']){
    $nom = $_POST['nom'];
    $prenom = htmlspecialchars($_POST['prenom']);
    $pseudo = $_POST['pseudo'];
    $sql = "INSERT INTO participants SET nom='$nom',prenom='$prenom',pseudo='$pseudo'";
    mysqli_query($connexion, $sql);
    header('Location:quiz.html')
?>