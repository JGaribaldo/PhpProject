<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$weather = $_GET["weather"];
$temp = $GET["temperature"];

if ($weather == "sunny" && $temp > 70){
    echo 'Hello World!! :):):):)';
}
else if ($weather == "sunny" && $temp <= 70){
    echo 'Hello World!! :)';
}
else if ($weather == "cloudy"){
    echo 'Hellow World!! :|';
}
else {
    echo 'Hello World :(';
}
?>