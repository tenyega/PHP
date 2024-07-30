<?php
#for 
for ($i = 0; $i < 8; $i++) {
    echo $i;
}

#for imbrique
for ($i = 0; $i <= 3; $i++) {
    for ($j = 0; $j <= 3; $j++) {
        echo "inside first for $i and inside second for $j<br>";
    }
}


#while
$i = 9;
while ($i <= 10) {
    echo $i . PHP_EOL;
    $i++;
}


#do while
$i = 9;
do {
    echo $i . PHP_EOL;
    $i--;
} while ($i < 5);


#endwhile
$i = 1;
?>
<ul>
    <?php while ($i < 5) : ?>
        <li><?php echo $i; ?></li>
    <?php $i++;
    endwhile; ?>
</ul>