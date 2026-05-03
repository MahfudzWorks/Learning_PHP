<?php

echo "<h1>Belajar Percabangan PHP</h1>";

// IF ELSE

echo "<h2>If Else</h2>";

$nilai = 90;

if ($nilai >= 75) {
    echo "Nilai: $nilai <br>";
    echo "Status: Lulus <br>";
} else {
    echo "Nilai: $nilai <br>";
    echo "Status: Tidak Lulus <br>";
}

// IF ELSE IF

echo "<h2>If Else If</h2>";

$nilai2 = 85;

if ($nilai2 >= 90) {
    echo "Grade = A <br>";
} else if ($nilai2 >= 80) {
    echo "Grade = B <br>";
} else if ($nilai2 >= 70) {
    echo "Grade = C <br>";
} else {
    echo "Grade = D <br>";
}

?>