<?php
require 'functionstugas.php';
$id = $_GET["id"];

if(delete($id) > 0){
    echo "
    <script>
    alert('data deleted successfully');
    document.location.href = 'tugas.php';
    </script>
";
}else{
echo "
    <script>
    alert('data failed to delete');
    document.location.href = 'tugas.php';
    </script>
";
}

echo mysqli_error($db);
?>