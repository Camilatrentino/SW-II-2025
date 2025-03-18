<?php
$num = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];

foreach ($num as $n) {
    if ($n % 2 == 0) {
        $par[] = $n;
    } else {
        $impar[] = $n;
    }
}
echo "Números pares: " . count($par) . "<br>";
echo "Números ímpares: " . count($impar) . "<br>";
?>