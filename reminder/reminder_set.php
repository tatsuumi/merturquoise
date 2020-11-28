<?php

$min = (int)$_POST['min'];
$hour = (int)$_POST['hour'];
$day = (int)$_POST['day'];
$month = (int)$_POST['month'];
$message = $_POST['message'];

$min=str_pad($min, 2, 0, STR_PAD_LEFT);
$hour=str_pad($hour, 2, 0, STR_PAD_LEFT);
$day=str_pad($day, 2, 0, STR_PAD_LEFT);
$month=str_pad($month, 2, 0, STR_PAD_LEFT);

// ファイルを書き込みモードで開く
	$file_handle = fopen("remind_data/".$month.$day.$hour.$min.".txt", "w");

	// ファイルへデータを書き込み
	fwrite($file_handle,$message);

	// ファイルを閉じる
	fclose($file_handle);

echo $month."月".$day."日 ".$hour.":".$min."<br>";
echo "メッセージ".$message;