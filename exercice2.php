<?php

echo "  ****    Table de multiplication    ****\n\n";
$choix = "O";

while ($choix == "O" or $choix == "o") {
    $nb = readline("Entrer le nombre pour lequel vous voulez la table de multiplication : ");
    for ($i=1; $i<=10; $i++) {
        echo "$nb       x $i   = " . $nb*$i . "\n";
    }
    $choix = readline("Voulez-vous continuer? (O/N) : ");
}

echo "Au revoir et à bientôt!";