<?php
$user = 'tatsuumi';
$host = 'localhost';
$dbname= 'mylog'; 
$pass = 'tatsu227';

$mysql = new MySQLi($host,$user,$pass, $dbname);
$mysql->set_charset('utf8');
//データベースの中身を取得
$sql = "SELECT * FROM rc_log;";
$result = $mysql->query($sql);
//ータベースの中身を取得
  while($row = $result->fetch_assoc() ){
	  echo $row['id'] ."\t" .$row['date'] ."\t" .$row['channel'];
	echo  "<br>";
}
// DB接続を閉じる
$mysql->close();
