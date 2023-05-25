<?php 

require("config.inc.php");
$score = $_POST["id"];

// Pour prendre le dernier id enregistré
$sql = "SELECT MAX(id) AS max FROM participants";
$resultat = mysqli_query($connexion,$sql);
while ($liste = mysqli_fetch_object($resultat)){
    $idParticipant = $liste->max;
}

// Pour ajouter le score du participant
$sql = "UPDATE `participants` SET `score` = $score WHERE `id` = $idParticipant ";
mysqli_query($connexion, $sql);
// header('Location:quiz.html');
echo $sql;
?>