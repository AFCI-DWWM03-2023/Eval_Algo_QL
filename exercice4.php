<?php

$tab1 = ["Avion", "BOING747", "AIRBUSA380", "LEARJET45", "DC10", "CONCORDE", "ANTONOV32"];
$tab2 = ["CodeAVION", "B0", "AB", "LJ", "DC", "CO", "AN"];
$tab3 = ["VitesseCroisiere", 800, 950, 700, 900, 1400, 560];
$tab4 = ["RayonAction", 10000, 12000, 4500, 8000, 16000, 2500];

$choix1 = "O";

echo " **** STATISTIQUES AVIONS ****\n\n";
while ($choix1 == "O" or $choix1 == "o") {
    $code =  readline("Entrez le code de l'avion : ");
    $index = 0;
    for ($i = 1; $i < count($tab2); $i++) { // on cherche si le code entré existe dans la liste (i commence à 1 car l'entête du tableau est à 0)
        if ($tab2[$i] == $code) {
            $index = $i; //si on trouve le code dans la liste, on enregistre l'index pour pouvoir récuperer le nom de l'avion et les charactéristiques de l'avion dans les autres tableaux
        }
    }
    if ($index == 0) {
        echo " Cet avion n'existe pas\n\n";
    } else {
        echo "Avion : " . $tab1[$index] . " Vitesse : " . $tab3[$index] . " Rayon d'action : " . $tab4[$index] . "\n\n";
        $choix2 = readline("Voulez vous éditer les statistiques? (O/N) : ");
        if ($choix2 == "O" or $choix2== "o") {

            $max = $tab3[1];
            $imax = 1;
            for ($i = 2; $i < count($tab3); $i++) {  //on recherche la vitesse maximale dans la liste et on enregistre son index comme dans la boucle précédente
                if ($tab3[$i] > $max) {                                     
                    $max = $tab3[$i];
                    $imax = $i;
                }
            }
            $sum = 0;
            for ($i = 1; $i < count($tab4); $i++) { // calcul de la somme des rayons d'action
                $sum += $tab4[$i];
            }
            echo " L'avion qui vole le plus vite est le " . $tab1[$imax] . " à $max km/h\n";
            echo " La moyenne des rayons d'action est de : " . $sum/(count($tab4) - 1) . "\n\n"; //on soustrait 1 car on ne doit pas compter l'entête du tableau
        }
    }

    $choix1 = readline("Voulez-vous faire une autre recherche? (O/N) : ");
}
echo "Au revoir et à bientôt!";