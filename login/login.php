<?php
//cek apakah tombol submit udah di click atau belum
if(isset($_POST["submit"])){
    //cek usn dan pass
    if($_POST["username"] == "tokki" && $_POST["password"] == "081320"){
        //jika benar, redirect ke halaman admin.php
        header("Location: admin.php");
        exit;
    }else{
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Login </h1>
<!-- pesan error -->
<?php if(isset($error)):?>
    <p style="color: red; font-style:italic;"> incorrect username/password </p>
<?php endif;?>

    <form action="" method="post">
    <label for="username"> username : </label>
    <input type="text" name="username" id="username">

    <p>

    <label for="password"> password : </label>
    <input type="password" name="password" id="password">

    <p>

    <button type="submit" name="submit"> login </button>
    </form>
</body>
</html>