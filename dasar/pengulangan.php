<?php
//for, do while, while, foreach


//for
// inisialisasi = variable awal
// kondisi terminasi == memberhentikan pengulangan
// decrement increment = penentuan maju mundur pengulangan
for($y = 5; $y < 10; $y++){
    echo "Hello world!<br>";
}

echo "<p>";
for($y = 10; $y < 5; $y--){
    echo "Hello world!<br>";
}
 
echo "<p>";
for($y = 0; $y < 5; $y++){
    echo $y;
    echo "<br>";
}

echo "<p>";

//while
// kalo kondisi true lakukan perintah
//cek dulu, baru dijalani
$a = 15;
while($a > 10){
    echo "Tokki Na<br>";
    $a--;
}

echo "<p>";

//do while
// lakukan selama kondisinya true 
//jalan dulu, baru di cek
$b = 10;
do{
    echo "hi tokki!<br>";
    $b++;
}while($b < 5);
?>