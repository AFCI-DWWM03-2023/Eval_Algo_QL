<?php

$chaine = strtolower(readline("Entrez une chaîne de charactères : ")); // on convertit la chaine en minuscule pour simplifier le compte des caractères alphabétiques
$count = 0;
$voy = 0;
$con = 0;
$num = 0;
$alpha = 0;
$spec = 0;

$strvoy = "aeiou"; // liste des voyelles
$strspec = "[]^¨'£$%^&*()}{@:'#~?><>.,;@|\-=-_+-¬` éèëêàâäöôïîüûç"; // liste des caractères spéciaux
    // les lettres à accent comptent comme 2 caractères!!!!!

foreach (str_split($chaine) as $char) { // pour chaque caractère dans la chaine
    echo $char;
    $count += 1;
    if (str_contains($strspec, $char)) { // on verifie si c'est un caractère spécial (char est dans la liste)
        $spec += 1;
    } elseif (is_numeric($char)) { // sinon on verifie si c'est un chiffre
        $num += 1;
    } else { // sinon c'est un caractère alphabétique
        $alpha += 1;
        if (str_contains($strvoy, $char)) { // on verifie si c'est une voyelle
            $voy += 1;
        } else { // sinon c'est une consonne
            $con += 1;
        }
    }
}

echo "Nombre de caractères : $count\n";
echo "Nombre de voyelles : $voy\n";
echo "Nombre de consonnes : $con\n";
echo "Nombre de chiffres : $num\n";
echo "Nombre de caractères alphabétiques : $alpha\n";
echo "Nombre de caractères spéciaux : $spec\n";