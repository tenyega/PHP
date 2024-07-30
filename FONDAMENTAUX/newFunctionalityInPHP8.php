<?php

//declare(strict_types=1); // force the respect for the types of the parameters of the function. 
//Better to have this in production for the respect of the type of the data. 

$add = function ($a, $b) {
    $somme = $a + $b;
    return $somme;
};
echo $add(3, 5) . PHP_EOL;


//New things in PHP 8 typage des parameters
function customerData(string $civilite, string $prenom, int $age, bool | int $dispo): array
{
    $arr = ["civilite" => $civilite, 'prenom' => $prenom, 'age' => $age, 'dispo' => $dispo];
    return $arr;
}


$client1 = customerData('M', 'Alice', 25, 1);

var_dump($client1);


//argument Nommé. New in PHP 8

function userInfo(string $civilitePassed, string $prenomPassed,  $agePassed,  $dispoPassed): array
{
    // Ne pas oublier de traiter les types de donées. 
    $civilitePassed = is_string($civilitePassed) ? $civilitePassed : 'Monsieur/Madame';
    $prenomPassed = is_string($prenomPassed) ? $prenomPassed : 'Visitor';
    $agePassed = is_int($agePassed) ? $agePassed : '-';
    $dispoPassed = (is_bool($dispoPassed) || is_int($dispoPassed)) ? $dispoPassed : '❌';

    $arr = ["civilite" => $civilitePassed, 'prenom' => $prenomPassed, 'age' => $agePassed, 'dispo' => $dispoPassed];
    return $arr;
}

//here with out the $ sign the name of the argument must be used . 
$client2 = userInfo(civilitePassed: 'M', dispoPassed: 2.5, agePassed: '25', prenomPassed: 'Alice');
echo 'Our table for verification of Age and dispo' . PHP_EOL;
var_dump($client2);
