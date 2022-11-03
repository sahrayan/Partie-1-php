<?php





$mot = 'Engage le jeu que je le gagne';
$inverse = strtolower(strrev($mot)); // strrev inverse une chaîne et strtolower change les mots d'une chaîne majuscule en minuscules
if  (strtolower($mot) ==$inverse) {    // if = si
    echo $mot . ' est palindrome';
} else { // else = sinon
    echo $mot . ' n\'est pas palindrome ';
}




?>