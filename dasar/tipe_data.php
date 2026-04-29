<?php

echo "<h1>Belajar Tipe Data PHP</h1>";

// String (Teks)

$nama = "Mahfudz";

echo "<h2>String</h2>";
echo "Nama: $nama <br>";

// Integer (Bilangan Bulat)

$umur = 23;

echo "<h2>Integer</h2>";
echo "Umur: $umur <br>";

// Float (Bilangan Desimal)

$tinggi = 169.5;

echo "<h2>Float</h2>";
echo "Tinggi: $tinggi cm <br>";

// Boolean (True & False)

$isPelajar = true;

echo "<h2>Boolean</h2>";
echo "Status Pelajar: " . ($isPelajar ? "Ya" : "Tidak") . "<br>";

// Array

$hobi = ["Coding", "Gaming", "Olahraga"];

echo "<h2>Array</h2>";
echo "Hobi pertama: " . $hobi[0] . "<br>";
echo "Hobi kedua: " . $hobi[1] . "<br>";

// Tipe Data

echo "<h2>Cek Tipe Data</h2>";

var_dump($nama);
echo "<br>";

var_dump($umur);
echo "<br>";

var_dump($tinggi);
echo "<br>";

var_dump($isPelajar);
echo "<br>";

var_dump($hobi);

?>