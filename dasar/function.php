<?php
//function = kumpulan instruksi yang dibungkus dalam sebuah blok

//date = untuk menampilkan tanggal dalam format tertentu
// l = nama hari lengkap (wednesday)
// D = nama hari singkat (wed)
// d = tanggal (20)
// m = bulan angka (01)
// M = bulan text singkat (Jan)
// F = bulan text (January)
// y = tahun singkat (21)
// Y = tahun (2021)
date_default_timezone_set("Asia/jakarta");
echo date ("H:i:s");
echo "<br>";
echo date("l, d M y");
echo "<p>";

//second = detik yang udah berlalu sejak 1 januari 1970
echo time();
echo "<p>";
//echo date ("l", time()-60*60*24*100);

//strtotime();
date_default_timezone_set("Asia/jakarta");
echo date("l", strtotime("8 aug 2000"));

echo "<p>";
//function sendiri
function biodata(){
    echo "my name is<br>";
    echo "tokki";
}
biodata();
?>