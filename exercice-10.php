<?php
$montantapayer = 152;
 echo "Montant à payer : ".$montantapayer. "€". "<br>";
$montantverser = 200;
echo "Montant versé : ".$montantverser. "€". "<br>";
$rendu = $montantverser-$montantapayer;
echo  "Reste a payer : ".$rendu. "€". "<br>";
echo "************** <br>";
$a = $rendu;
$b = 0;
$c = 0;
$d = 0;
$e = 0;

for($a = $rendu; $a >0; $a) {
    if($rendu >= 10){
        $rendu = $rendu - 10;
        $b = $b + 1;
    }elseif ($rendu >= 5){
    $rendu = $rendu - 5;
    $c = $c + 1;
    }elseif ($rendu >= 2){
    $rendu = $rendu - 2;
    $d = $d + 1;
    }elseif ($rendu >= 1){
    $rendu = $rendu - 1;
    $e = $e + 1;
    }
$a = $rendu;
}
echo $b. "billets de 10 € <br>" .$c . "billet de 5€ <br>" .$d. "piece de 2€ <br>" .$e. "piece de 1€";
?>