<?php
$user = 'tatsuumi';
$host = 'localhost';
$dbname= 'mylog'; 
$pass = 'tatsu227';

$mysql = new MySQLi($host,$user,$pass, $dbname);
$mysql->set_charset('utf8');
//現在時刻を追加
$date = date("Y-m-d H:i:s"); 
$num = 13;
$sql = "INSERT INTO rc_log(date,channel) VALUES('$date','$num');";
$mysql->query($sql);
/**データベースの中身を取得
$sql = "SELECT * FROM `rc_log` LIMIT 0 , 30";
$result = $mysql->query($sql);
 データベースの中身を取得
  while($row = $result->fetch_assoc() ){
    echo $row['id'] ."\t" .$row['date'] . "\n";
}
**/

// DB接続を閉じる
$mysql->close();

require('rc.html');
