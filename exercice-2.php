<h1>Exercice 2</h1>

<p>Soit la phrase << Notre formation DL commence aujourd'huit >>.</p>
Ecrire un algorithme permetant de compter le nombre de mots contenus dans cette phrase;

<h2>Résultat</h2>

<?php

$phrase = "Notre formation commence aujourd'huit";
$longueur = str_word_count($phrase); //str_word_count permet de compter chaque mots dans une phrase
echo "la phrase « $phrase » contient $longueur mots<br>";
echo "la phrase « $phrase » contien ". str_word_count($phrase). " mots<br>"; 