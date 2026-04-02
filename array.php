<?php

$hardware = ["CPU", "Monitor", "Mouse", "keyboard"];

print_r($hardware);
var_dump($hardware);

foreach ($hardware as $h){
    echo $h . "<br>";
}

$i = 1;
foreach ($hardware as $h){
    echo $i . ". " . $h . "<br>";
    $i++;
}

?>
