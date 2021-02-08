<?php
//array 
//array = variabel yang menyimpan banyak nilai 

//cara lama
$siswi = array("dinda", "nadhifa", "kirei", "disi");

//cara baru
$siswi = ["aca","bilqis", "nailah", "ty"];
$arr = [1, 2, 3, 4, "text", true, false];

echo $siswi[0];
echo "<br>";
echo $arr[1];
// var_dump($siswi);

//cara nambahin elemen pada array
$siswi[] = "uzlah";
$siswi[] = "keisha";
var_dump($siswi);


?>