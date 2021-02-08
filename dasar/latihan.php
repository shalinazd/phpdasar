<?php
date_default_timezone_set("Asia/jakarta");
$hour = date("H:i");

if($hour > "06.00" && $hour < "11.00"){
    $time = " morning!";
}elseif($hour > "11.00" && $hour < "15.00"){
    $time = "afternoon!";
}elseif($hour > "15.00" && $hour < "18.00"){
    $time = "evening";
}elseif($hour > "18.00" && $hour < "23.00"){
    $time = "night";
}else{
    $time = "dawn";
}

echo "good $time!!!";
?>