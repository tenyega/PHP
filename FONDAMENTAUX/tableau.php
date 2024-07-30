<?php

//tableau indexe
$fruits = ["apple", "kiwi", "grapes"];
$fruitLength = count($fruits);
echo $fruits[1] . PHP_EOL;

//tableau associative
$animals = ['f' => 'fish', 's' => "snake", 'l' => "lion"];
echo $animals['l'] . PHP_EOL;
foreach ($animals as $key => $value) {
    echo $key . ' : ' . $value . PHP_EOL;
}

//tableau multidimensionnelle
$clients = [
    ['prenom' => 'Alice', 'age' => 30, 'dispo' => true],
    ['prenom' => 'Bob', 'age' => 25, 'dispo' => false],
    ['prenom' => 'Charles', 'age' => 42, 'dispo' => false]

];

$bob = $clients[1];
var_dump($bob); // for debugging usually  array (size=3)
// 'prenom' => string 'Bob' (length=3)
// 'age' => int 25
// 'dispo' => boolean false
print_r($bob); //Array ( [prenom] => Bob [age] => 25 [dispo] => )


// Parcours du tableau multidimensionnel
?>
<style>
    th,
    td {
        border: 1px solid black;
    }
</style>
<h1> Table </h1>
<table>
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Disponibility</th>
    </tr>
    <?php
    foreach ($clients as $client) :
    ?>

        <tr>
            <td> <?php echo $client['prenom'] ?></td>
            <td><?php echo $client['age'] ?></td>
            <td><?php echo $client['dispo'] ? '✅' : '❌'; ?></td><br>

        </tr>
    <?php

    endforeach;

    ?>
</table>

<?php
//method de tableaux

#Array_map()
$numbers = [1, 2, 3, 4, 5];


function double($n)
{
    return ($n + $n);
}

$b = array_map('double', $numbers);
print_r($b);



//array_filter()

function ImPair($var)
{
    // returns whether the input integer is odd
    return $var % 2 != 0;
}
echo 'Impair';
print_r(array_filter($numbers, "ImPair"));


//array_reduce

function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}
var_dump(array_reduce($numbers, "sum")); // int(15)
var_dump(array_reduce($numbers, "sum", 100)); // int(115)
// 100 here is an optional value which is considered as an initial value of item. carry here is like an accumulator 