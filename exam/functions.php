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
    $name = $post["doll_name"];
    $pict = $post["doll_poster"];
    $price = $post["doll_price"];

     //query insert data
     $query = "INSERT INTO tb_exam VALUES(null, '$pict', '$name', '$price')";
     mysqli_query($db, $query);
     return mysqli_affected_rows($db);
}

function delete($id){
    global $db;
    $delete = "DELETE FROM tb_exam WHERE id_doll=$id";
    mysqli_query($db, $delete);
    return mysqli_affected_rows($db);
}

function change($data){
    global $db;
    $id= $data["id_doll"];
    $name = $data["doll_name"];
    $pict = $data["doll_poster"];
    $price= $data["doll_price"];
   

    $query = "UPDATE tb_exam SET 
    doll_name = '$name',
    doll_poster = '$pict',
    doll_price = '$price'

    WHERE id_doll= $id";
    
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
    

}
?>