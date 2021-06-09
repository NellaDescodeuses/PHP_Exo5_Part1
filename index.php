<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>PHP Exo_5 Part_1</title>
</head>
<body>
  <div class="container">
    <h1 class="text-danger text-center">## Exercice 5 Partie 1</h1>
    <h2>
        Créez une variable âge et une variable genre. Afficher aléatoirement vous êtes une femme et vous avez X ans ou vous êtes un homme et vous avez X ans.
    </h2>
    <?php
        $sexe = array("Femme", "Homme");
        $genre = $sexe[rand(0,1)];
        $age = rand(1,80);
        $result = $age .' ' . $genre;
        //Exercice si l'on rajoute des conditions pour indiquer si la personne est mineure ou majeure.
        if($age > 0 && ($genre == "Femme" || $genre == "Homme")){
          if($age >= 18 && $genre == "Femme"){
            echo "Vous êtes une femme et vous ête majeure.";
          }else if( $age < 18 && $genre == "Femme"){
            echo "Vous êtes une femme et vous êtes mineure.";
          }else if($age >= 18 && $genre == "Homme"){
            echo "Vous êtes un homme et vous êtes majeur.";
          }elseif($age < 18 && $genre == "Homme"){
            echo "Vous êtes un homme et vous ête mineur.";
          }
        }else{
          echo "Veuillez rentrer des infos valides! ! !";
        }
     ?>
   <p class ="text-center mt-4"><?= "Je suis un $genre et j'ai $age ans." ?></p>
  </div>
</html>