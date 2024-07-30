<?php
$a = 5;
$b = 6;
// if...else 
if ($a > $b) {
    echo "$a is greater than $b" . PHP_EOL;
} else {
    echo "$a is smaller than $b" . PHP_EOL;
}

//en ternaire
echo ($a > $b) ? "Reussit" : "echec" . PHP_EOL;


// switch
$langue = 'fr';
switch ($langue) {
    case 'en':
        echo "welcome";
        break;
    case 'de':
        echo "Wilkomen";
        break;
    case 'es':
        echo "Bienvenidos";
        break;
    default:
        echo "Bienvenue";
        break;
}


//MATCH (depuis PHP 8)

$langue = "it";
$message = match ($langue) {
    'fr' => 'Bonjour',
    'en' => 'Hello',
    'de' => 'Guten Morgen',
    default => "good morning "
};

echo "message is  " . $message . PHP_EOL;

// comparer les produits. using different operators
$produit1 = 18;
$produit2 = 20;
#simple one 
if ($produit1 < $produit2) {
    echo "Le produit 2 est plus chère que le 1";
} elseif ($produit1 > $produit2) {
    echo "Le produit 1 est plus chère que le 2";
} else {
    echo $identique;
};

#using spaceship operators 

$produit1 <=> $produit2;
$r = $produit1 <=> $produit2;
$result = match ($r) {
    0 => 'equal',
    -1 => 'produit 2 is greater',
    1 => 'produit 1 is greater',
    default => "dsfdfdf "
};

echo "result $result" . PHP_EOL;


// operator de fusion null ??
$userName = null;
$defaultUserName = "Visitor";

$user = $userName ?? $defaultUserName; // checks the first variable and if its null then it will assign the variable $user as the second variable $defaultUserName
echo $user . PHP_EOL;

$userName = "ALICE";
$user = $userName ?? $defaultUserName; // checks the first variable and if its null then it will assign the variable $user as the second variable $defaultUserName
echo $user . PHP_EOL;

// AFFECTATION de operateur fusion null ??
$civilité = null;
$civilité ??= "M";
echo $civilité . PHP_EOL;

$civilité = "Mme";
$civilité ??= "M.";
echo $civilité . PHP_EOL;
