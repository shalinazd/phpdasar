<?php
require 'functions.php';
//connect ke database
//(host, user, pass, nama database)

//ambil data dr table
$siswa = query("SELECT * FROM tb_siswa");
// var_dump($result);

//ambil data (fetch) mahasiswa

//mysqli_fetch_row() = mengembalikan array numerik
//mysqli_fetch_assoc() = mengembalikan array associative
//mysqli_fetch_array() = mengembalikan kedua array
//mysqli_fetch_object() = menjadikan object

// while($result_stud = mysqli_fetch_assoc($result)){
//     var_dump($result_stud);
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>List of Students</h1>
    <a href="add.php"> add student data </a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Action</th>
            <th>Pict</th>
            <th>Name</th>
            <th>Class</th>
            <th>Email</th>
        </tr>

        <?php $i = 1;?>
        <?php foreach($siswa as $row):?>

            <tr>
                <td><?= $i;?></td>
                <td>
                    <a href="">change</a>
                    <a href="">delete</a>
                </td>
                <td><img src="img/<?= $row["gambar_siswa"]?>"width="50"></td>
                <td><?= $row["nama_siswa"]?></td>
                <td><?= $row["kelas_siswa"]?></td>
                <td><?= $row["email_siswa"]?></td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>