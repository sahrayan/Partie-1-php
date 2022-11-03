<?php


$mot = 'Engage le jeu que je le gagne';

$inverse = strtolower(str_replace(" ","",$mot));
$inverse= strrev($inverse);
if (strtolower(str_replace(" ","",$mot)) === $inverse) {
    echo $mot . ' est palindrome';
} else {
    echo $mot . ' n\'est pas palindrome ';
}

?>