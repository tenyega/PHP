<?php

//  error_reporting(0);NOT TO SHOW ANY ERROR MSG TO THE NAVIGATOR 
error_reporting(E_ALL);

//Saving error in the log 

ini_set('log-errors', 1);
// ini_set('error_log', "./FONDAMENTAUX/errorLog.log"); //./errorLog will be saved as per the location of the actual root of the dossier 
ini_set('error_log', __DIR__ . "/errorLog.log"); //./errorLog will be saved as per the location of the actual root of the dossier 


$a = 10;
$b = $a;

$c = &$a; //passage par reference 
echo "avant changement \$a =$a et \$c= $c et \$b= $b" . PHP_EOL; //avant changement $a =10 et $c= 10 et $b= 10
$a = 25;
echo "apres changement \$a =$a et \$c= $c et \$b= $b" . PHP_EOL; // apres changement $a =25 et $c= 25 et $b= 10
// affectation par reference is the changes in c results with changes in a 


// SCALAIER
$x = 1; // integer
$y = 2.3; //float
$vrai = true; //boolean
$faux = false; //boolean

echo "\$vrai" . $vrai . PHP_EOL; // returns 1 
echo "\$false" . $faux; //returns void string


//DONNEES COMPOSEES
$arr1 = array("chaine", 2, true);
$arr2 = array("string", 12, false);
foreach ($arr1 as $key => $value) {
    echo $value . PHP_EOL;
}

$obj = new DateTime();
echo $obj->getTimestamp();


//FUNCTIONS
$displayName = function () {
    echo "Je suis Alice";
};

echo $displayName() . PHP_EOL;


//REcuperaton du type d'une données

#gettype()
echo gettype($obj) . PHP_EOL; //Object
echo gettype($displayName) . PHP_EOL; //Object
echo gettype($arr1) . PHP_EOL; //Array

#function is_???
echo is_bool($vrai) . PHP_EOL; // returns 1 for true
echo is_bool($faux) . PHP_EOL; // returns 1 for true 
echo is_int($y) . PHP_EOL; //returns ' ' for false
echo is_int($x) . PHP_EOL; //returns 1 for true


// conversion
#conversion  implicite
$n1 = 2;
$str1 = "10 unities";
// echo $n1 + $str1 . PHP_EOL; // gives a warning but with 12 as answer at the same time 


#conversion explicit
$n2 = 6;
$str2 = "10";
echo $n2 + (int)$str2 . PHP_EOL; // this is the correct way to do the conversion explicit if required by the developper 


# utilisation de settype( bonne pratique )
$n3 = 6;
$str3 = "10";
settype($str3, "int");
echo $n3 + $str3 . PHP_EOL;


#??val()
$n4 = "20.55BC";
echo floatval($n4);//this transforms the float value of the long float values