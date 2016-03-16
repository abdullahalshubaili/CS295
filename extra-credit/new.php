<?php

$cars = array(" volvo "," bmw "," dodge "," GMC ","ford ");
echo " <br> <b>array one </br></b>";
foreach($cars as $car){
echo "$car <br>";}

$fancycars = array("Ferrari","Lamborghini","Bently","mazaratti");
echo " <br> <b>array two </br></b>";
foreach($fancycars as $fancy){
echo "$fancy <br>";}

$c = array_merge($cars, $fancycars);
echo "<br><b>my arrays are merged </b></br>";
foreach($c as $hobla){
echo "$hobla </br>";}

unset($c[5]); //delete Ferrari
echo "<br><b> arrays after deleting </b></br>";
foreach($c as $d){
echo "$d </br>";}

?>