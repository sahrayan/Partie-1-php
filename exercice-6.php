<?php
$prixuniter = 9.99;
$nombre = 5;
$tva = 0.2;
$total = $nombre*$prixuniter ;
$montant = $total*$tva;
$facture = $total+ $montant;
echo "Le montant de la facture à régler est de : $facture";
?>