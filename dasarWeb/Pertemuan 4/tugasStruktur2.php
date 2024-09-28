<?php
$harga = 120000;
$diskon = 0.2;

if ($harga > 100000) {
    $hargaBaru = $harga - ($harga * $diskon);
} else {
    $hargaBaru = $harga;
}
echo "Harga barang: $harga <br>";
echo "Diskon: 20% <br>";
echo "Harga barang setelah diskon: $hargaBaru";
?>
