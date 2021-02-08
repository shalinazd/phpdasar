<?php
//Tuliskan code untuk menampilkan angka 1-100
for($y = 1; $y < 101; $y++){
    echo $y;
    echo "<br>";
}

echo "<p>";
//Tuliskan code untuk menampilkan, jika jam waktu shubuh, maka keluar text "subuh" jika jam waktu ashar, maka keluar text "ashar", dan seterusnya sampai isya
date_default_timezone_set("Asia/jakarta");
$hour = date("H:i");

if($hour > "04.30" && $hour < "05.53"){
    $time = " Fajr!";
}elseif($hour > "12.05" && $hour < "15.27"){
    $time = "dhuhr!";
}elseif($hour > "15.27" && $hour < "18.17"){
    $time = "asr!";
}elseif($hour > "18.17" && $hour < "19.31"){
    $time = "maghrib!";
}else{
    $time = "isya!";
}

echo "now $time!!!";


echo "<p>";
//Zaki telah mengikuti Ujian Matematika di sekolahnya, lalu untuk penilaian ujiannya, nilai 90-100 mendapatkan A, nilai 80-90 mendapatkan B, lalu nilai 70-80 mendapatkan C. 
//Jika Zaki mendapatkan nilai 85, nilai huruf apa yang didapatkannya? buatlah code phpnya!!
$score = 85;
$a = 90;
$b = 80;

if($score > $a){
    echo "A";
}elseif($score > $b){
    echo "B";
}elseif($score < $b){
    echo "C";
}
?>