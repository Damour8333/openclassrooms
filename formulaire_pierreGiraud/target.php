<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<body>
    <!-- index.php -->
    <?php
    $prenom =$nom=$pseudo="";

    function securisation($donnees)
    {
        $donnees = trim($donnees);
        $donnees = stripslashes($donnees);
        $donnees = strip_tags($donnees);
        return $donnees;
    }
    $prenom = securisation($_POST['prenom']);
    $nom = securisation($_POST['nom']);
    $pseudo = securisation($_POST['pseudo']);

    echo 'ton prénom est :'.$prenom.'<br/>';
    echo 'ton nom est :'.$nom.'<br/>';
    echo 'ton pseudo est :'.$pseudo.'<br/>';
    ?>
<a href="formulaire.php">clique la </a>
</html>

<!-- <p>Bonjour
    <!-- </?php
    print_r($_POST);
    echo strip_tags($_POST['prenom']);
    ?> -->
<!-- ,fais comme chez toi</p>
<p>Tu ne t'appelle pas 
<//?php -->
<!-- echo strip_tags($_POST['prenom']);
?> -->
<!-- J'ai du mal comprendre</p> -->
<!-- <p>Clique<a href="formulaire.php">ici</a>pour retaper ton prénom</p>
</body> -->
<!-- htmlspecialchars -->
<!-- strip_tags -->
<!-- trim()
stripslashes() -->