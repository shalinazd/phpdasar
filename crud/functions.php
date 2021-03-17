<?php
//mysqli_connect = buat connect ke database
//mysqli_query = buat connect ke table
//mysqli_fetch_assoc == nge get
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

function delete($id){
    global $db;
    $delete = "DELETE FROM tb_siswa WHERE id_siswa=$id";
    mysqli_query($db, $delete);
    return mysqli_affected_rows($db);
}

function change($data){
    global $db;
    //ambil datadari setiap elemen form
    $id= $data["id_siswa"];
    $name = $data["nama_siswa"];
    $pict = $data["gambar_siswa"];
    $email = $data["email_siswa"];
    $class = $data["kelas_siswa"];

    $query = "UPDATE tb_siswa SET 
    nama_siswa = '$name',
    gambar_siswa = '$pict',
    email_siswa = '$email',
    kelas_siswa = '$class',
    
    WHERE id_siswa= $id";
    
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
    

}
?>