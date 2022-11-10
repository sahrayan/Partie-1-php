<?php
  $dateNaissance = "27-01-2004";
  $aujourdhui = date("Y-m-d");
  $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
  echo 'Votre age est '.$diff->format('%y');
?>