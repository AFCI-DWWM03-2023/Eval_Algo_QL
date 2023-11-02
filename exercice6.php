<?php

$resultats = fopen("resultats.txt", "w"); // ouverture du fichier texte en écriture (write)

$tablechoix = ["Pierre", "Feuille", "Ciseaux"];
$manche = 0;
$jouer = "Oui";

while ($jouer == "Oui" or $jouer == "oui") {
    $manche += 1;
    echo "Manche $manche\n";
    $victoire = 0;
    $defaite = 0;
    $partie = 1;
    while ($victoire < 2 and $defaite < 2) { // la manche se termine après 2 victoires ou 2 défaites
        $choix = readline("Partie $partie : Choisissez (Pierre / Feuille / Ciseaux) : ");
        while ($choix != "Pierre" and $choix != "Feuille" and $choix != "Ciseaux") {
            $choix = readline("Choix invalide. Choisissez entre Pierre, Feuille ou Ciseaux : "); 
        }
        $choixcpu = $tablechoix[rand(0,2)];
        echo "L'ordinateur choisit : $choixcpu\n";

        if ($choix == "Pierre" and $choixcpu == "Ciseaux" or
            $choix == "Ciseaux" and $choixcpu == "Feuille" or
            $choix == "Feuille" and $choixcpu == "Pierre") { // conditions de victoire de l'utilisateur
                $winner = "Utilisateur gagne!\n";
                $victoire += 1;
            } elseif ($choix == $choixcpu) { // condition d'égalité
                $winner = "Egalité\n";
            } else {
                $winner = "Ordinateur gagne!\n"; // condition de victoire de l'ordinateur
                $defaite += 1;
            }
        
        echo $winner;
        $partie += 1;
    }
    if ($victoire == 2) {
        $vainqueur = "Utilisateur";
    } else {
        $vainqueur = "Ordinateur";
    }
    $final = "Score après la manche $manche = Utilisateur ($victoire) - Ordinateur ($defaite) | Vainqueur : $vainqueur\n";
    fwrite($resultats, $final); // on écrit le résultat dans le fichier texte
    echo $final;
    $jouer = readline("Voulez-vous continuer à jouer? (Oui/Non) : ");
}
echo "Fin du jeu. Le résultat final a été enregistré dans le fichier resultats.txt.";
fclose($resultats); // fermeture du fichier texte