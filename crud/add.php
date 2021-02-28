<?php
require 'functions.php';
//connect ke database


//cek apakah button submit sudah diclick atau belum
if(isset($_POST["submit"])){
    if(add($_POST) > 0){
        echo "
            <script>
            alert('added successfully');
            document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo "
            <script>
            alert('failed to add');
            document.location.href = 'index.php';
            </script>
        ";
    }

   

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
    <h1>Add Student Data</h1>
    <form action="" method="post">
        <label for="gambar_siswa">Picture : </label>
        <input type="text" name="gambar_siswa" id="gambar_siswa" required></input>
        <p>

        <label for="nama_siswa">Name : </label>
        <input type="text" name="nama_siswa" id="nama_siswa" required></input>
        <p>

        <label for="kelas_siswa">Class: </label>
        <input type="text" name="kelas_siswa" id="kelas_siswa" required></input>
        <p>

        <label for="email_siswa">Email: </label>
        <input type="text" name="email_siswa" id="email_siswa" required></input>
        <p>

        <button type="submit" name="submit"> submit </submit>
    </form>
    
</body>
</html>