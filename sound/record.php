<?php
$cmd ="arecord -f S16_LE  -D hw:0,0 -t wav | lame -b 256 -m s - /var/www/html/sound/test.mp3";
exec($cmd);
$cmd ="pwd";
echo exec($cmd);
	//require('sound.html');
