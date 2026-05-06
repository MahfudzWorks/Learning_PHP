<?php

echo "<h1>Belajar Function Dasar PHP</h1>";

// FUNCTION TANPA PARAMETER

function salam() {
    echo "Halo, selamat belajar PHP! <br>";
}

echo "<h2>Function Tanpa Parameter</h2>";
salam();
salam();

// FUNCTION DENGAN RETURN

function hitungLuasPersegi() {
    $sisi = 5;
    return $sisi * $sisi;
}

echo "<h2>Function dengan Return</h2>";
echo "Luas persegi: " . hitungLuasPersegi() . "<br>";

// FUNCTION DENGAN VARIABEL GLOBAL

$nama = "Mahfudz";

function tampilNama() {
    global $nama;
    echo "Nama saya: $nama <br>";
}

echo "<h2>Function dengan Global</h2>";
tampilNama();
?>