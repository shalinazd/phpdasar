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
?>