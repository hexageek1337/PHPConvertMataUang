<?php
if (!isset($argv[1])){
	echo "Parameter Tidak Valid\n";
	echo "Usage : php ".$argv[0]." [rupiah]\n";
	echo "Example : php ".$argv[0]." 20000";
} elseif (!intval($argv[1])){
	echo "Parameter Tidak Bernilai Integer\n";
	echo "Usage : php ".$argv[0]." [dollar]\n";
	echo "Example : php ".$argv[0]." 2";
} else {
	$parameter_rupiah = $argv[1];
	$rupiah = 13513;
	echo "===========================================\n";
	echo "Status Rupiah per dollar saat ini => ".$rupiah."\n";
	echo "===========================================\n";
	echo "Waiting ...\n\n";
	sleep(3);
	$convert = $parameter_rupiah / $rupiah;
	echo "Convert ".$parameter_rupiah." Rupiah => ".$convert."\n";
	echo "===========================================\n";
}
