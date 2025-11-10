<?php 
$text  = "belajar di kelasfullstack";

echo strlen($text); // menghitung jumlah karakter
echo "<br>";
echo strtoupper($text); // mengubah menjadi huruf kapital
echo "<br>";
echo strtolower($text); // mengubah menjadi huruf kecil
echo "<br>";
echo ucfirst($text); // mengubah huruf pertama menjadi kapital
echo "<br>";
echo ucwords($text); // mengubah huruf pertama setiap kata menjadi kapital
echo "<br>";
echo strrev($text); // membalikkan string
echo "<br>";
echo str_replace("kelasfullstack", "codepolitan", $text); // mengganti string
?>