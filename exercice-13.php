<?php
$rayan = array(10 , 12, 8, 19, 3, 16, 11, 13, 9);
$resultat = 0;
echo "Les notes obtenues par l’élève sont : ";
for ($i = 0; $i < count($rayan); $i++){
    echo $rayan[$i] ." " ; 
    $resultat = $resultat + $rayan[$i];
}
$moyen = $resultat / count($rayan);
echo "<br> Sa moyenne générale est donc de : " .number_format($moyen,2);

?>

