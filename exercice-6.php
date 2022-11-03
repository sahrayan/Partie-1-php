<?php
$prixuniter = 9.99;
echo "Prix unitaire de l’article: $prixuniter"."<br>";
$nombre = 5;
echo "Quantité: $nombre"."<br>";
$tva = 0.2;
echo "Taux de TVA: $tva"."<br>";
$total = $nombre*$prixuniter ;

$montantTVA = $total*$tva;

$facture = $total + $montantTVA;

number_format($facture,2);

echo "Le montant de la facture à régler est de : ".$facture;

?>