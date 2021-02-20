<?php
$conn = mysqli_connect("localhost", "root", "", "db_phpdasar");
$result = mysqli_query($conn, "SELECT * FROM tb_movie");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Movie List</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Posters</th>
            <th>Title</th>
            <th>Duration</th>
            <th>Cinema Room</th>
        </tr>

        <?php $i = 1;?>
        <?php while($row = mysqli_fetch_assoc($result)):?>

            <tr>
                <td><?= $i;?></td>
                <td><img src="img/img1.jpeg"width="50"></td>
                <td><?= $row["movie_title"]?></td>
                <td><?= $row["movie_duration"]?></td>
                <td><?= $row["cinema_room"]?></td>
            </tr>
            <?php $i++ ?>
        <?php endwhile; ?>
    </table>
</body>
</html>