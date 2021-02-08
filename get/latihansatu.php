<?php

/*
variable super global ( dari php )
$_GET
$_POST
$_REQUEST
$_COOKIE
$_SESSION
$_SERVER
$_ENV
$GLOBALS
*/

/*GET ($_GET)
- mengirim data lewat url
- data tidak rahasia
*/

/*POST ($_post)
- mengirim data lewat form
- log in
*/

// echo $_GET["name"]="shalina";
// echo "<br>";
// var_dump($_GET);

$collegestudent=[
    ["name" => "jaemin",
    "majors" => "medical",
    "dom" => "south jakarta"
],
    ["name" => "jaehyun",
    "majors" => "engineering",
    "dom" => "bandung"
],
    ["name" => "jeno",
    "majors" => "architecture",
    "dom" => "south jakarta"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> student list </h1>
    <?php foreach($collegestudent as $cs):?>
      <li> 
        <a href="latihandua.php?
        name=<?= $cs["name"];?>
        &majors=<?= $cs["majors"];?>
        &dom=<?= $cs["dom"];?>">
        <?= $cs["name"];?>
        </a>
      </li>
    <?php endforeach;?>
</body>
</html>