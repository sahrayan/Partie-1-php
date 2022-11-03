<h1>Exercice 3</h1>

<p>Soit la phrase << Notre formation DL commence aujourd'huit >>.</p>
Ecrire un algorithme permetant de compter le nombre de caractères contenus dans cette phrase;

<h2>Résultat</h2>

<?php

$phrase = "Notre formation commence aujourd'huit.";
echo "la phrase avant : $phrase"; echo "<br>";
echo "la phrase apres : ".str_replace("aujourd'huit", "demain", $phrase) // ici str_replace permet de remplacer un mots par un autre


?>