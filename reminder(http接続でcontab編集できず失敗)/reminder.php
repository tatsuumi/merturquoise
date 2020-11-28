<?php

$min = $_POST['min'];
$hour = $_POST['hour'];
$day = $_POST['day'];
$month = $_POST['month'];
$message = $_POST['message'];

//$min = 1;
//$hour = 1;
//$day = 1;
//$month =1;
//$message ="hello3";

$reminder ="$min $hour $day $month * root cd /home/pi ; python say.py $message ";
echo $reminder."<br>";

$cmd = "(crontab -l ; echo '$reminder') | crontab -";

echo exec($cmd);

echo "<br>complete";