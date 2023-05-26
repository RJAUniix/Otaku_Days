<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le tableau des scores</title>
    <link rel="stylesheet" href="tableau.css">
</head>
<body>
    <div>
        <div class="navigation">
            <a href="../index.html"><button>Quitter</button></a>
            <input type="text" placeholder="Rechercher ici...">
        </div>
        <table class="table">
            <caption>CLASSEMENT DES MEILLEURS JOUEURS</caption>
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
                $requete = "SELECT *FROM participants ORDER BY score DESC";
                $resultat = mysqli_query($connexion,$requete);
                $i=1;
                while ($liste = mysqli_fetch_object($resultat)){ ?>
                        <tr>
                            <td><?php echo $i; ?></td>
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
</body>
</html>