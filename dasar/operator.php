<?php
//operator penggabung string
// .

$nama = "shalinaa";
$nama2 = "zd";

echo $nama . $nama2;
echo "<p>";

//operator aritmatika
// + - * / %

$x = 20;
$y = 10;

echo "<br>";
echo $x + $y;
echo "<br>";
echo $x - $y;
echo "<br>";
echo $x * $y;
echo "<br>";
echo $x / $y;
echo "<p>";

//operator assignment
// =, +=, -=, /=, *=, %=, .=

$r = 1;
$r += 5;

echo $r;
echo "<br>";

$nama = "jaemin";
$nama .= "na";

echo $nama;
echo "<p>";

//operator perbandingan
// < > <= >= == !=
// var_dump = untuk debugging, menampilkan informasi dari variable

var_dump("jaemin");
echo "<br>";
var_dump(05);
echo "<br>";

// ga mentingin tipe data
var_dump(1 <= "5");

//operator identitas
// ===
echo "<br>";

//tipe data ngaruh
var_dump(1 === "1");

//operator logika
// &&, ||

echo "<br>";
$x = 20;

var_dump($x < 10 || $x == 20);

// || kondisi salah satu bener (biar dpt true)
// $$ kondisi dua duanya harus bener (biar dpt true)
?>