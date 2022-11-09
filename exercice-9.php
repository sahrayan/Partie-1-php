<?php
$age = 25;
$sex = "F";
echo "age : ".$age ."<br>";
echo "sexe : ".$sex ."<br>";
if($age >20 && $sex == 'M'){
echo "La personne est imposable";
}elseif($age >=18 && $age <=35 && $sex =="F"){
echo "La personne est imposable";
}else echo "La personne n'est pas imposable";
?>