<?php
require 'functionstugas.php';
$id = $_GET["id"];
$movie = get("SELECT* FROM tb_movie WHERE id_movie = $id")[0];

if(isset($_POST["submit"])){
    if(change($_POST) > 0){
        echo "
            <script>
            alert('successfully changed');
            document.location.href = 'tugas.php';
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
    <h1>Change Movie Data</h1>
    <form action="" method="post">
            <input type="hidden" name="id_movie" value="<?= $movie["id_movie"]?>"></input>

            <label for="movie_posters">Posters : </label>
            <input type="text" name="movie_posters" id="movie_posters" required
            value="<?= $movie["movie_posters"];?>"></input>
            <p>

            <label for="movie_title">Title : </label>
            <input type="text" name="movie_title" id="movie_title" required
            value="<?= $movie["movie_title"];?>"></input>
            <p>

            <label for="movie_rate">Rate: </label>
            <input type="text" name="movie_rate" id="movie_rate" required
            value="<?= $movie["movie_rate"];?>"></input>
            <p>



            <button type="submit" name="submit"> submit </submit>
    </form>
    
</body>
</html>