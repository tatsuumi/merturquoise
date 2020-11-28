<?php

date_default_timezone_set('Asia/Tokyo');
$date = date("Y/m/d H:i:s");
$name = $_POST['name'];
$address = $_POST['address'];
$hobby = $_POST['hobby'];
$family = $_POST['family'];
$etc = $_POST['etc'];
$sex = $_POST['sex'];
$marry = $_POST['marry'];

$user = 'tatsuumi';
$host = 'localhost';
$dbname= 'mylog'; 
$pass = 'tatsu227';

$mysql = new MySQLi($host,$user,$pass, $dbname);
$mysql->set_charset('utf8');
$date = date("Y-m-d H:i:s"); 
$sql = "INSERT INTO people_data(date,name,address,hobby,family,etc,sex,marry) VALUES('$date','$name','$address','$hobby','$family','$etc','$sex','$marry');";
$mysql->query($sql);
$mysql->close();
echo "入力完了";
