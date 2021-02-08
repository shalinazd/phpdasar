<?php
//array assosiative = keynya kita buat sendiri
$collegestudent=[
    ["name" => "jaemin",
    "majors" => "medical",
    "dom" => "south jakarta"],

    ["name" => "jaehyun",
    "majors" => "engineering",
    "dom" => "bandung"],

    ["name" => "jeno",
    "majors" => "architecture",
    "dom" => "south jakarta"],
];

echo $collegestudent[0]["name"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($collegestudent as $c):?>
        <ul>
            <li>Name : <?= $c["name"];?></li>
            <li>Majors : <?= $c["majors"];?></li>
            <li>Dom : <?= $c["dom"];?></li>
        </ul>
    <?php endforeach;?>
</body>
</html>
