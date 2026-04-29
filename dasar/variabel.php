<?php

// Belajar Variabel PHP

echo "<h1>Belajar Variabel PHP</h1>";

$nama = "Mahfudz";
$umur = "23";
$tinggi = "169.5";
$isPelajar = true;

echo "<h2>Contoh Variabel</h2>";

echo "Nama: $nama <br>";
echo "Umur: $umur tahun <br>";
echo "Tinggi: $tinggi cm <br>";
echo "Status Pelajar:" . ($isPelajar ? "Yah" : "Tidak") . "<br>";

// Contoh Perhitungan Variabel

$a = 7;
$b = 9;
$hasil = $a + $b;

echo "<h2>Contoh Perhitungan</h2>";
echo "Hasil $a + $b = $hasil";

// Aturan Variabel

echo "<h2>Aturan Variabel</h2>";
echo "- Harus diawali dengan tanda \$ <br>";
echo "- Tidak boleh pakai spasi <br>";
echo "- Bisa pakai underscore (_) <br>";

?>