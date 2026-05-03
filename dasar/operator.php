<?php

echo "<h1>Belajar Operator PHP</h1>";

// Operator Aritmatika

echo "<h2>Operator Aritmatika</h2>";

$a = 10;
$b = 5;

echo "a = $a, b = $b <br>";
echo "Penjumlahan: ". ($a + $b) ."<br>";
echo "Pengurangan: ". ($a - $b) ."<br>";
echo "Perkalian: ". ($a * $b) ."<br>";
echo "Pembagian: ". ($a / $b) ."<br>";
echo "Modulus (sisa bagi): ". ($a % $b) ."<br>";

// OPERATOR PERBANDINGAN

echo "<h2>Operator Perbandingan</h2>";

$x = 10;
$y = 20;

echo "x = $x, y = $y <br>";

echo "x == y : " . ($x == $y ? "true" : "false") ." <br>";
echo "x != y : " . ($x != $y ? "true" : "false") ." <br>";
echo "x < y : " . ($x < $y ? "true" : "false") ." <br>";
echo "x > y : " . ($x > $y ? "true" : "false") ." <br>";
echo "x <= y : " . ($x <= $y ? "true" : "false") ." <br>";
echo "x >= y : " . ($x >= $y ? "true" : "false") ." <br>";

// OPERATOR LOGIKA

echo "<h2>Operator Logika</h2>";

$nilai = 80;
$absen = 90;

echo "Nilai = $nilai, Absen = $absen <br>";

$lulus = ($nilai >= 75 && $absen >= 75);
echo "Lulus (AND): " . ($lulus ? "Ya" : "Tidak") . "<br>";

$lulus2 = ($nilai >= 75 || $absen >= 75);
echo "Lulus (OR): " . ($lulus2 ? "Ya" : "Tidak") . "<br>";

$tidakLulus = !($nilai >= 75);
echo "Tidak lulus (NOT): " . ($tidakLulus ? "Ya" : "Tidak") . "<br>";

?>
