<?php
$jual = $_POST['jual'];

if ($jual < 1000000) {
  $komisi = $jual * 0.05;
} elseif ($jual <= 5000000) {
  $komisi = $jual * 0.10;
} else {
  $komisi = $jual * 0.15;
}

echo "Penjualan: $jual <br>";
echo "Komisi: $komisi";
