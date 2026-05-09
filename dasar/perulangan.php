<?php

echo "<h1>Belajar Perulangan PHP</h1>";

// FOR LOOP

echo "<h2>For Loop</h2>";

for ($i=1; $i <= 5 ; $i++) { 
    echo "Perulangan ke $i <br>";
}

// FOR SEGITIGA

for($i = 1; $i <= 5; $i++) {

    for($j = 1; $j <= $i; $j++) {
        echo "* ";
    }

    echo "<br>";
}

//WHILE LOOP

echo "<h2>While loop</h2>";

$a = 1;

while ($a <= 10) {
    echo "Angka = $a <br>";
    $a++;
}

// DO WHILE LOOP

echo "<h2>Do While Loop</h2>";

$no = 1;

do {
    echo "Nomor: $no <br>";
    $no++;
} while ($no <= 5);

// FOREACH (UNTUK ARRAY)

echo "<h2>Foreach</h2>";

$buah = ["apel", "melon", "nanas"];

foreach ($buah as $item){
    echo "Buah: $item <br>";
}

?>