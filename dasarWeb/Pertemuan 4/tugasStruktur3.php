<?php
$skor = 400;
$isDapatHadiah = false;

($skor >=500) ? $isDapatHadiah = true : $isDapatHadiah = false;

echo "total skor pemain adalah: $skor <br>";
echo "Apakah pemain mendapatkan hadiah tambahan?" . ($isDapatHadiah ? "(ya)" : "(tidak)");
?>
