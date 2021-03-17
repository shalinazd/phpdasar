<?php
require 'functions.php';
$id = $_GET["id"];
$doll = get("SELECT* FROM tb_exam WHERE id_doll = $id")[0];

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
    <h1>Change Doll Data</h1>
    <form action="" method="post">
            <input type="hidden" name="id_doll" value="<?= $doll["id_doll"]?>"></input>

            <label for="doll_poster">Picture : </label>
            <input type="text" name="doll_poster" id="doll_poster" required
            value="<?= $doll["doll_poster"];?>"></input>
            <p>

            <label for="doll_name">Name : </label>
            <input type="text" name="doll_name" id="doll_name" required
            value="<?= $doll["doll_name"];?>"></input>
            <p>

            <label for="doll_price">Class: </label>
            <input type="text" name="doll_price" id="doll_price" required
            value="<?= $doll["doll_price"];?>"></input>
            <p>



            <button type="submit" name="submit"> submit </submit>
    </form>
    
</body>
</html>