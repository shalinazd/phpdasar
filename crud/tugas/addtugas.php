<?php
require 'functionstugas.php';
//connect ke database


//cek apakah button submit sudah diclick atau belum
if(isset($_POST["submit"])){
    if(add($_POST) > 0){
        echo "
            <script>
            alert('added successfully');
            document.location.href = 'tugas.php';
            </script>
        ";
    }else{
        echo "
            <script>
            alert('failed to add');
            document.location.href = 'tugas.php';
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
    <h1>Add Movie </h1>
    <form action="" method="post">
        <label for="movie_posters">Posters : </label>
        <input type="text" name="movie_posters" id="movie_posters" required></input>
        <p>

        <label for="movie_title">Title : </label>
        <input type="text" name="movie_title" id="movie_title" required></input>
        <p>

        <label for="movie_rate">Rate : </label>
        <input type="text" name="movie_rate" id="movie_rate" required></input>
        <p>
        
        <button type="submit" name="submit"> submit </submit>
    </form>
    
</body>
</html>