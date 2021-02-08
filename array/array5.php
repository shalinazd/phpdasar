<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color:  #AED6F1 ;
            text-align: center;
            line-height: 30px;
            float: left;
            margin: 3px;
            transition: 0.5s;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <!-- <div class="kotak"> 1 </div> -->
    
    <?php $number=[1, 2, 3, 4, 5, 6, 7, 8]?>
    <?php foreach($number as $n):?>
         <div class="kotak"> <?= $n ?> </div>
    <?php endforeach;?>
    
    <div class="clear"></div>

    <?php $number2=[
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];?>
    <?php foreach($number2 as $nbr2):?>
        <?php foreach($nbr2 as $n2):?>
        <div class="kotak"> <?= $n2 ?> </div>
        <?php endforeach;?>
        <div class="clear"></div>
    <?php endforeach;?>
</body>
</html>