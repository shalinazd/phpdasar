<?php
require 'functionstugas.php';
$movie = get("SELECT * FROM tb_movie");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>List of movie</h1>
    <a href="addtugas.php"> add movie </a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Action</th>
            <th>Posters</th>
            <th>Title</th>
            <th>Rating</th>
            
        </tr>

        <?php $i = 1;?>
        <?php foreach($movie as $row):?>

            <tr>
                <td><?= $i;?></td>
                <td>
                    <a href="changetugas.php?id=<?= $row["id_movie"];?>">change</a>
                    <a href="deletetugas.php?id=<?= $row["id_movie"];?>">delete</a>
                </td>
                <td><img src="img<?= $row["movie_posters"];?>" width="100" height="150"></td>
                <td><?= $row["movie_title"];?></td>
                <td><?= $row["movie_rate"];?></td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>