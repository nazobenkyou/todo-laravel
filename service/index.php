<?php
$dsn = 'mysql:dbname=sample;host=127.0.0.1;port=3306;charset=utf8';
$user ='user';
$password ='password';

try {
   $dbh = new PDO($dsn, $user, $password);
   $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "SELECT * FROM todos";
   $stmt = $dbh->query($sql);
   $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
   var_dump($result);
   $dbh = null;
} catch (Exception $e){
   echo "接続失敗：". htmlspecialchars($e->getMessage(),ENT_QUOTES, 'UTF-8') . "<br>";
   die();
}
