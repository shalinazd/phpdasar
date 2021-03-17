<?php
require 'functions.php';
$id = $_GET["id"];
$siswa = get("SELECT* FROM tb_siswa WHERE id_siswa = $id");
// var_dump($siswa);
//connect ke database


//cek apakah button submit sudah diclick atau belum
if(isset($_POST["submit"])){
    if(change($_POST) > 0){
        echo "
            <script>
            alert('successfully changed');
            document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo "
            <script>
            alert('failed to change');
            </script>
        ";
    }

   $db = mysqli_connect("localhost", "root", "", "db_phpdasar");
   echo mysqli_error($db);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Change Student Data</h1>
    <form action="" method="post">
            <input type="hidden" name="id_siswa" value="<?= $siswa["id_siswa"];?>"></input>

            <label for="gambar_siswa">Picture : </label>
            <input type="text" name="gambar_siswa" id="gambar_siswa" required
            value="<?= $siswa["gambar_siswa"];?>"></input>
            <p>

            <label for="nama_siswa">Name : </label>
            <input type="text" name="nama_siswa" id="nama_siswa" required
            value="<?= $siswa["nama_siswa"];?>"></input>
            <p>

            <label for="kelas_siswa">Class: </label>
            <input type="text" name="kelas_siswa" id="kelas_siswa" required
            value="<?= $siswa["kelas_siswa"];?>"></input>
            <p>

            <label for="email_siswa">Email: </label>
            <input type="text" name="email_siswa" id="email_siswa" required
            value="<?= $siswa["email_siswa"];?>"></input>
            <p>

            <button type="submit" name="submit"> submit </submit>
    </form>
    
</body>
</html>