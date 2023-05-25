<?php

$hote= "localhost";
$user= "root";
$mdp = "";

$db = "otaku_days";

$connexion = mysqli_connect($hote, $user, $mdp, $db);

if (!$connexion) {
	echo "Connection failed!";
}