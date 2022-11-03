<?php


$mot = 'Engage le jeu que je le gagne';

$inverse = strtolower(strrev($mot));
if (strtolower($mot) === $inverse) {
    echo $mot . ' est palindrome';
} else {
    echo $mot . ' n\'est pas palindrome ';
}

?>