<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTAKU QUIZ | Rank</title>
    <link rel="icon" href="Medias/icons/star.svg"/>
    <link rel="stylesheet" href="tableau.css">
</head>
<body>
    <h1>😎🥇 CLASSEMENT DES MEILLEURS JOUEURS 🏆🎉</h1>
    <div>
        <div class="navigation">
            <div>
                <a href="../index.html"><button id='quit'>Quitter</button></a>
                <a href="login.html"><button id='play'>Jouer</button></a>
            </div>

            <div>
                <form action="classement.php" method="POST" id="formulaire">
                    <input type="search" 
                        placeholder="Rechercher ici"
                        autocomplete="off"
                        name="recherche"
                        id="recherche">
                    <button type="submit" id="search-btn"><img src="Medias/icons/search.svg" alt="icon recherche"></button>
                </form>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Pseudo</th>
                    <th>Nom et prenoms</th>
                    <th>Scores</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include ('config.inc.php');

                // Pour tester toutes les valeurs si il y a une correspondance avec la zone de recherche
                if (isset($_POST['recherche']) && $_POST['recherche']!=''){
                    $requete = "SELECT *FROM participants WHERE CONCAT(nom,prenom,pseudo,score) like'%".$_POST['recherche']."%' ORDER BY score DESC";
                    $resultat = mysqli_query($connexion,$requete);
                    echo "<span id='recherche_result'>Résultat de recherche sur \" ", $_POST["recherche"] ," \"</span>";
                }
                else {
                    $requete = "SELECT *FROM participants ORDER BY score DESC";
                    $resultat = mysqli_query($connexion,$requete);
                }

                $i=1;
                while ($liste = mysqli_fetch_object($resultat)){ 
                    ?>
                        <tr>
                            <td>
                                <?php 
                                    if ( $i == 1 && (!isset($_POST['recherche']) || $_POST['recherche']=='')) {
                                        echo "🥇";
                                    }
                                    elseif ( $i == 2 && (!isset($_POST['recherche']) || $_POST['recherche']=='')) {
                                        echo "🥈";
                                    } 
                                    elseif ( $i == 3 && (!isset($_POST['recherche']) || $_POST['recherche']=='')) {
                                        echo "🥉";
                                    }
                                    else {
                                        echo $i; 
                                    }
                                ?>
                            </td>
                            <td><?php echo $liste->pseudo; ?></td>
                            <td><?php echo $liste->nom." ".$liste->prenom; ?></td>
                            <td><?php echo $liste->score; ?></td>
                        </tr>
                    <?php
                    $i++; 
                }               
                ?>
            </tbody>
        </table>
    </div>

    <img id="sticker1" src="Medias/illustrations/dbz4.webp" alt="sticker">
    <img id="sticker2" src="Medias/illustrations/kimetsu.webp" alt="sticker">
    <img id="sticker3" src="Medias/illustrations/one_piece0.webp" alt="sticker">
    <img id="sticker5" src="Medias/illustrations/jujutsu2.webp" alt="sticker">
    <img id="sticker4" src="Medias/illustrations/naruto1.webp" alt="sticker">
</body>
</html>