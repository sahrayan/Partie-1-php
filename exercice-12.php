<?php

$nom =['Mickaël' => 'FRA', 'Virgile' => 'ESP', 'Marie-Claire' => 'ENG'];

ksort($nom);

foreach($nom as $a => $valeur){

    if($valeur == 'FRA'){

        echo 'salut '.$a."<br>";

    }elseif($valeur == 'ESP'){

        echo 'hola '.$a. "<br>";

    }else

        echo 'hello '.$a."<br>" ;

}
?>