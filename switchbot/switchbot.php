<?php
	$cmd ="cd /home/pi/python-host ; python switchbot.py DE:AF:53:1C:C8:83 Press";
	echo exec($cmd);
	//require('switchbot.html');
