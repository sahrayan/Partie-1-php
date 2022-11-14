<h1>Exercice 1</h1>

<p>Soit la phrase << Notre formation DL commence aujourd'huit >>.</p>
Ecrire un algorithme permetant de compter le nombre de caractères contenus dans cette phrase;

<h2>Résultat</h2>

<?php

$phrase = "Notre formation commence aujourd'huit";
$longueur = strlen($phrase); //strlen = permets de compter le nombre de mots.
echo "la phrase « $phrase » contient $longueur caractères<br>";
echo "la phrase « $phrase » contien ". strlen($phrase). " caractères<br>";

