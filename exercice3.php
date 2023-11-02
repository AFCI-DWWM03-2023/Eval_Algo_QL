<?php

echo " Racine de l'équation du 2nd degré\n";
echo "          Y = aX² + bX + c\n\n";
$choix = "O";

while ($choix == "O" or $choix == "o") {
    $a = readline("Quelle est la valeur de a : ");
    $b = readline("Quelle est la valeur de b : ");
    $c = readline("Quelle est la valeur de c : ");
    if ($a == 0) { // on verifie si l'équation n'est pas du 2nd degré
        if ($b == 0) { // puis si elle n'est pas du 1er degré
            echo "L'équation n'en est plus une !!!\n\n";
        } else {
            echo " L'équation est du 1er degré !\n";
            echo " L'équation s'annule pour x = -(c/b) : " . -$c / $b . "\n\n";
        }
    } else {
        $d = $b * $b - 4 * $a * $c; //calcul du delta
        if ($d < 0) { // delta négatif
            echo " L'équation ne possège pas de racine réelle : \n";
            echo " d = $d\n\n";
        } elseif ($d == 0) { // delta nul
            echo " L'équation possède une racine double : \n";
            echo " d = $d\n";
            echo " x1 = x2 = " . -( $b / (2 * $a) ) . "\n\n";
        } else { // delta positif
            echo " L'équation possède 2 racines distinctes : \n";
            echo " d = $d\n";
            echo " L'équation s'annule pour :\n";
            echo " x1 = " . (-$b + sqrt($d)) / (2 * $a) . "\n";
            echo " x2 = " . (-$b - sqrt($d)) / (2 * $a) . "\n\n";
        }
    }
        

    $choix = readline("Voulez-vous continuer? (O/N) : ");
}

echo "Au revoir et à bientôt!";