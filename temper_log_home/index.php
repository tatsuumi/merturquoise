<?php
$user = 'tatsuumi';
$host = 'localhost';
$dbname= 'mylog'; 
$pass = 'tatsu227';

$mysql = new MySQLi($host,$user,$pass, $dbname);
$mysql->set_charset('utf8');
//データベースの中身を取得
$sql = "SELECT * FROM temper_log;";
$result = $mysql->query($sql);
//データベースの中身を取得
  while($row = $result->fetch_assoc() ){
    echo $row['id'] ."\t" .$row['date'] ."\t" .$row['temper'] . "<br>";
}
// DB接続を閉じる
$mysql->close();
