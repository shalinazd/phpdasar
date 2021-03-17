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
    <h1>Add Doll Data</h1>
    <form action="" method="post">
        <label for="doll_poster">Picture : </label>
        <input type="text" name="doll_poster" id="doll_poster" required></input>
        <p>

        <label for="doll_name">Name : </label>
        <input type="text" name="doll_name" id="doll_name" required></input>
        <p>

        <label for="doll_price">Price: </label>
        <input type="text" name="doll_price" id="doll_price" required></input>
        <p>
        
        <button type="submit" name="submit"> submit </submit>
    </form>
    
</body>
</html>