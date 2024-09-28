<?php
$nilaiSiswa = [85,92,78,64,90,75,88,79,70,96];

sort($nilaiSiswa);
$duaTerendah = array_slice($nilaiSiswa, 0, 2);
$duaTertinggi = array_slice($nilaiSiswa, -1, 2);

$exclude = array_merge($duaTerendah, $duaTertinggi);

$totalFiltered = array_sum($nilaiSiswa) - array_sum($exclude);

echo "Nilai terfilter: $totalFiltered";
?>
