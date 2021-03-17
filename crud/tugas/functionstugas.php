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
    $title = $post["movie_title"];
    $posters = $post["movie_posters"];
    $duration = $post["movie_duration"];
    $cinemaroom = $post["cinema_room"];

     //query insert data
     $query = "INSERT INTO tb_movie VALUES(null, '$posters', '$title', '$duration', '$cinemaroom')";
     mysqli_query($db, $query);
     return mysqli_affected_rows($db);
}

function delete($id){
    global $db;
    $delete = "DELETE FROM tb_movie WHERE id_siswa=$id";
    mysqli_query($db, $delete);
    return mysqli_affected_rows($db);
}


?>