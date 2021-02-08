<?php
//isset = untuk nge-cek variable udah ada atau belum
//di $_GET ada data apa engga? kalo ga ada,pindah ke latihansatu.php
if( !isset($_GET["name"]) ||
    !isset($_GET["majors"]) ||
    !isset($_GET["dom"]) 
){
    header("Location: latihansatu.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Name : <?= $_GET["name"];?></li>
        <li>Majors : <?= $_GET["majors"];?></li>
        <li>Dom : <?= $_GET["dom"];?></li>
    </ul>
    <a href="latihansatu.php"> back </a>
</body>
</html>