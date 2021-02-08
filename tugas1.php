<?php
//array numerik
$biodata= ["jaemin", "doctor", "20 y.o"];
$biodata2 = [
    ["jeno", "architect", "20 y.o"],
    ["jaehyun", "designer", "23 y.o"]
];
?>

<?php
//array assosiative 
$food=[
    ["name" => "ratatouille",
    "price" => "200k",
    "quantity" => 2],

    ["name" => "Confit de Canard",
    "price" => "400k",
    "quantity" => 1],

    ["name" => " Bouillabaisse",
    "price" => "140k",
    "quantity" => 1],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menampilkan list</title>
</head>
<body>
    <h1>array numerik</h1>
    <?php foreach($biodata as $b1):?> 
        <?= $b1?>
    <?php endforeach;?>
    <?php foreach($biodata2 as $bd2): echo"<br>";?> 
        <?php foreach($bd2 as $b2):?>
             <?= $b2 ?>
        <?php endforeach;?>
    <?php endforeach;?>    
   
 
    <h1>array assosiative</h1>
    <?php foreach($food as $f):?>
        <ul>
            <li>Name : <?= $f["name"];?></li>
            <li>Price : <?= $f["price"];?></li>
            <li>Quantity : <?= $f["quantity"];?></li>
        </ul>
    <?php endforeach;?>
</body>
</html>