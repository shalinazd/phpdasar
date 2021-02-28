<?php
//mysqli_connect = buat connect ke database
//mysqli_query = buat connect ke table
//mysqli_fetch_assoc == nge get
$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

function query($query){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows; 
}

function add($post){
    global $db;

    //ambil datadari setiap elemen form
    $name = $post["nama_siswa"];
    $pict = $post["gambar_siswa"];
    $email = $post["email_siswa"];
    $class = $post["kelas_siswa"];

     //query insert data
     $query = "INSERT INTO tb_siswa VALUES(null, '$pict', '$name', '$class', '$name')";
     mysqli_query($db, $query);
     return mysqli_affected_rows($db);
}
?>