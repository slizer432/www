<?php

$loremImpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.";

echo "<p>{$loremImpsum}</p>";
echo "Panjang karakter: " . strlen($loremImpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremImpsum) . "<br>";
echo "<p>" . strtoupper($loremImpsum) . "</p>";
echo "<p>" . strtolower($loremImpsum) . "</p>";

?>
