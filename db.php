<?php

$host = 'maxonbtc.beget.tech';
$db = 'maxonbtc_test';
$user = 'maxonbtc_test';
$pass = 'cagnN%9n';

try{
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user,$pass);
}catch(PDOException $e){
    echo 'ERROR',$e->getMessage();
}

?>