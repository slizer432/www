<?php
// Jumlah total kursi di restoran
$total_kursi = 45;

// Jumlah kursi yang telah ditempati
$kursi_terisi = 28;

// Menghitung jumlah kursi kosong
$kursi_kosong = $total_kursi - $kursi_terisi;

// Menghitung persentase kursi kosong
$persentase_kosong = ($kursi_kosong / $total_kursi) * 100;

// Menampilkan hasil
echo "Jumlah total kursi: $total_kursi<br/>";
echo "Kursi yang telah ditempati: $kursi_terisi<br/>";
echo "Kursi yang masih kosong: $kursi_kosong<br/>";
echo "Persentase kursi kosong: " . number_format($persentase_kosong, 2) . "%<br/>";
?>
