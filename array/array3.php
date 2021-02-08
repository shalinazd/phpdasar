<?php
//array biasa (numerik)
$student = ["jaemin", "x ipa 2", "jaeminna@gmail.com"];
$student2 = ["shalina", "x ipa 1", "ashalinaaz@gmail.com"];
//array di dalam array
$student3 = [
    ["mina", "x ipa 2", "minaa@gmail.com"],
    ["jaehyun", "x ipa 1", "jaehyunjeong@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menampilkan list</title>
</head>
<body>
    <h1>Student</h1>
    <!-- array biasa -->
    <ul>
        <li><?php echo $student[0]?> </li>
        <li><?php echo $student[1]?> </li>
        <li><?php echo $student[2]?> </li>
    </ul>

    <ul>
        <?php foreach($student2 as $s2):?> 
        <li> <?= $s2?></li>
        <?php endforeach;?>
    </ul>

    <!-- array di dalam array pake foreach -->
    <ul>
        <?php foreach($student3 as $s3): echo"<br>";?> 
            <?php foreach($s3 as $s):?>
            <li> <?= $s ?></li>
            <?php endforeach;?>
        <?php endforeach;?>
    </ul>
</body>
</html>