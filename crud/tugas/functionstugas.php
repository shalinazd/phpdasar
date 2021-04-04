<?php
$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

function get($query){
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
    $title = $post["movie_title"];
    $posters = $post["movie_posters"];
    $rate = $post["movie_rate"];

     //query insert data
     $query = "INSERT INTO tb_movie VALUES(null, '$title', '$posters', '$rate')";
     mysqli_query($db, $query);
     return mysqli_affected_rows($db);
}

function delete($id){
    global $db;
    $delete = "DELETE FROM tb_movie WHERE id_movie=$id";
    mysqli_query($db, $delete);
    return mysqli_affected_rows($db);
}

function change($data){
    global $db;
    $id= $data["id_movie"];
    $title = $data["movie_title"];
    $posters = $data["movie_posters"];
    $rate= $data["movie_rate"];
   

    $query = "UPDATE tb_movie SET 
    movie_title = '$title',
    movie_posters = '$posters',
    movie_rate = '$rate'

    WHERE id_movie= $id";
    
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);

}

function cari($keyword){
    $query = "SELECT * FROM tb_siswa WHERE 
    nama_siswa = '%keyword%' OR
    email_siswa = '%keyword%' OR
    kelas_siswa = '%keyword%'" ;
    return get($query);


}
?>