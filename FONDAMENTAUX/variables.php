<?php
$animal = 'chien';
$chien = 'labrador';
echo "le $chien est un $animal" . PHP_EOL;

echo $animal . $chien . PHP_EOL;

//variable de variable depricated

echo "le $chien est un ${$animal}" . PHP_EOL;


//CONSTANT 
define("COLOR", 'red');
echo "my favorite color is " . COLOR;

//Constant magique
echo "__Line__:" . __LINE__ . PHP_EOL; //18 
echo "__DIR__:" . __DIR__ . PHP_EOL; //C:\YEGA\CDA\MY WORK\PHP
echo "__FILE__:" . __FILE__ . PHP_EOL; //C:\YEGA\CDA\MY WORK\PHP\variables.php
