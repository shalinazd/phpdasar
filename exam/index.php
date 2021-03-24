<?php
require 'functions.php';
$doll = get("SELECT * FROM tb_exam");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>List of doll</h1>
    <a href="add.php"> add doll data </a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Action</th>
            <th>Pict</th>
            <th>Name</th>
            <th>Price</th>
            
        </tr>

        <?php $i = 1;?>
        <?php foreach($doll as $row):?>

            <tr>
                <td><?= $i;?></td>
                <td>
                    <a href="change.php?id=<?= $row["id_doll"];?>">change</a>
                    <a href="delete.php?id=<?= $row["id_doll"];?>">delete</a>
                </td>
                <td><img src="img/<?= $row["doll_poster"]?>"width="50"></td>
                <td><?= $row["doll_name"]?></td>
                <td><?= $row["doll_price"]?></td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>