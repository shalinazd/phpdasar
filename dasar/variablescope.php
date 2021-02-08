<?php
//lingkup variable

$x = 13;

function showX(){
    global $x;
    echo $x;
}
showX();
?>