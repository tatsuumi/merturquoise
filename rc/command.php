<?php
$channel = $_POST['channel'];
$num = (int)$channel;
switch($num){
	case 1: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat 1ch.txt)";break;
	case 2: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat 2ch.txt)";break;
	case 3: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat 3ch.txt)";break;
	case 4: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat 4ch.txt)";break;
	case 5: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat 5ch.txt)";break;
	case 6: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat 6ch.txt)";break;
	case 7: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat 7ch.txt)";break;
	case 8: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat 8ch.txt)";break;
	case 9: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat 9ch.txt)";break;
	case 10: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat 10ch.txt)";break;
	case 11: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat 11ch.txt)";break;
	case 12: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat 12ch.txt)";break;
	case 13: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat power.txt)";break;
	case 14: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat input.txt)";break;
	case 15: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat tool.txt)";break;
	case 16: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat daikin_on_heat.txt)";break;
	case 17: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat up.txt)";break;
	case 18: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat records.txt)";break;
	case 19: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat left.txt)";break;
	case 20: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat ok.txt)";break;
	case 21: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat right.txt)";break;
	case 22: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat bach.txt)";break;
	case 23: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat down.txt)";break;
	case 24: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat end.txt)";break;
	case 25: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat table.txt)";break;
	case 26: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat vol+.txt)";break;
	case 27: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat vol-.txt)";break;
	case 28: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat youtube.txt)";break;
	case 29: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat netflix.txt)";break;
	case 30: $cmd ="cd /home/pi/bto_ir_advanced_cmd ; bto_advanced_USBIR_cmd -d $(cat daikin_off_heat.txt)";break;
	default: echo "No match!"; break;
}
echo exec($cmd);
require('rc.html');

if ($num < 13) {
$user = 'tatsuumi';
$host = 'localhost';
$dbname= 'mylog';
$pass = 'tatsu227';
$mysql = new MySQLi($host,$user,$pass, $dbname);
$mysql->set_charset('utf8');
//現在時刻を追加
$date = date("Y-m-d H:i:s");
$sql = "INSERT INTO rc_log(date,channel) VALUES('$date','$num');";
$mysql->query($sql);
}
