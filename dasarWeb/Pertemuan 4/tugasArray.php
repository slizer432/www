<?php
$nilai = [["Alice", 85], ["Bob", 92], ["Charlie", 78], ["David", 64], ["Eve", 90]];
$rataRata = 0;

foreach ($nilai as $siswa) {
    $rataRata += $siswa[1];
}

$rataRata /= count($nilai);

echo "Rata-rata nilai: $rataRata <br>";

echo "Nilai yang lebih dari rata-rata: <br>";

foreach ($nilai as $siswa) {
    if ($siswa[1] > $rataRata) {
        echo "Nama: " . $siswa[0] . ", Nilai: " . $siswa[1] . "<br>";
    }
}
?>

