<?php

echo "           CALCUL D'UN CERCLE\n\n";
$choix = "O";

while ($choix == "O" or $choix == "o") {
    $r = readline("Quel est le rayon du cercle : ");
    echo "Sa circonférence est de               : " . $r * 2 * pi();
    echo "\nSa surface est de                     : " . $r * $r * pi();
    echo "\n\n";
    $choix = readline("Voulez-vous faire un autre calcul? (O/N) : ");
}

echo "Au revoir et à bientôt!";