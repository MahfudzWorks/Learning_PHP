<?php

echo "<h1>Belajar Function dengan Parameter<h1>";

//FUNCTION DENGAN PARAMETER

function salam($nama) {
    echo "Halo . $nama! <br>";
}

echo "<h2>Function dengan Parameter</h2>";
salam("Mahfudz");
salam("Budi");
salam("Siti");

// FUNCTION DENGAN LEBIH DARI 1 PARAMETER

function perkenalan($nama, $umur) {
    echo "Nama saya $nama, umur saya $umur tahun <br>";
}

echo "<h2>Function 2 Parameter</h2>";
perkenalan("Mahfudz", 23);
perkenalan("Andi", 20);
?>