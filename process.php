<?php
  require 'db.php';
  
  $startD = $_POST['startD'];
  $endD = $_POST['endD'];
  
  if($startD != '' and $endD != '') {
    $startTime = floor(microtime(true)); 
    $primeNumber = deapazonCheck($startD, $endD);
    $processedTime = date('H:i:s.',floor(microtime(true)) - $startTime) . gettimeofday()['usec']; 

    $dsn = 'mysql:host=maxonbtc.beget.tech;dbname=maxonbtc_test';
    $pdo = new PDO($dsn, 'maxonbtc_test','cagnN%9n');
    $sql = 'INSERT INTO bakalavratest(data, stack, start, end, num, time) VALUES (:data, :stack, :start, :end, :num, :time)';
    $query = $pdo->prepare($sql);
    $query->execute(['data' => date("Y/m/d"), 'stack' => 'PHP', 'start' => $startD, 'end' => $endD, 'num' => $primeNumber, 'time' => $processedTime]);
    
      header('location /table.php');

  }

  function deapazonCheck($startD, $endD) {
    $primeNumCol = 0;
    for ($i = $startD; $i <= $endD; $i++) {
        if (isPrime($i)) {
            $primeNumCol++;
        }
      }
      return $primeNumCol;
  }

  function isPrime($num){
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return $num > 1;
  }