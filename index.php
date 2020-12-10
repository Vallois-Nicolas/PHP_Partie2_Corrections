<?php
// Exercice 3
$age = 20;
$gender = "Femme";
$resultExercise3;
if ($age >= 18 && $gender == "Homme") {
    $resultExercise3 = "Vous êtes un Homme et vous êtes Majeur";
} else if ($age < 18 && $gender == "Homme") {
    $resultExercise3 = "Vous êtes un Homme et vous êtes Mineur";
} else if ($age >= 18 && $gender == "Femme") {
    $resultExercise3 = "Vous êtes une Femme et vous êtes Majeure";
} else {
    $resultExercise3 = "Vous êtes une Femme et vous êtes Mineure";
}

// Exercice 4
$magnitude = rand(1, 9);
$resultExercise4;
switch ($magnitude) {
    case 1:
        $resultExercise4 = "Micro-séisme impossible à ressentir.";
        break;

    case 2:
        $resultExercise4 = "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
        break;
    
    case 3:
        $resultExercise4 = "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
        break;

    case 4:
        $resultExercise4 = "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
        break;

    case 5:
        $resultExercise4 = "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
        break;

    case 6:
        $resultExercise4 = "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
        break;

    case 7:
        $resultExercise4 = "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
        break;
    
    case 8:
        $resultExercise4 = "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
        break;

    case 9:
        $resultExercise4 = "Séisme capable de tout détruire sur une très vaste zone.";
        break;

    default:
        $resultExercise4 = "Le random a pas marché.";
        break;
}

// Exercice 5
$resultExercise5;
if($gender != "Homme") {
    $resultExercise5 = "C'est une développeuse !!!";
} else {
    $resultExercise5 = "C'est un développeur !!!";
}

// Exercice 6
$resultExercise6;
if($age >= 18) {
    $resultExercise6 = "Tu es majeur";
} else {
    $resultExercise6 = "Tu n'es pas majeur";
}

// Exercice 7
$resultExercise7;
$isOk = true;
if($isOk == false) {
    $resultExercise7 = "C'est pas bon";
} else {
    $resultExercise7 = "C'est ok";
}

// Exercice 8
$resultExercise8;
if($isOk) {
    $resultExercise8 = "C'est ok";
} else {
    $resultExercise8 = "C'est pas bon";
}
?>
<!doctype html>
<html lang="fr">
  <head>
    <title>PHP Partie 2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <!-- Affichage Exercice 3 -->
    <p><?= $resultExercise3 ?></p>
    <!-- Affichage Exercice 4 -->
    <p>Magnitude <?= $magnitude ?> : <?= $resultExercise4 ?></p>
    <!-- Affichage Exercice 5 -->
    <p><?= $resultExercise5 ?></p>
    <!-- Affichage Exercice 6 -->
    <p><?= $resultExercise6 ?></p>
    <!-- Affichage Exercice 7 -->
    <p><?= $resultExercise7 ?></p>
    <!-- Affichage Exercice 8 -->
    <p><?= $resultExercise8 ?></p>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>