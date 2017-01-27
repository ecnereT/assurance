<?php
session_start();
$url='../view/index.php';
 
function redirige($url)
{
    $url='../view/index.php';
    die('<meta http-equiv="refresh" content="0;URL='.$url.'">');
}

if(isset($_SESSION['auth']))
{
    unset($_SESSION['auth']);
    redirige($url);
}