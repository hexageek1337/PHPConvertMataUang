<?php
require_once('vendor/autoload.php');
 
use DiDom\Document;

/**
 * 
 */
class ConvertRupiahDollar
{
	
	function __construct()
	{
		#
	}

	private function curi()
	{
		$url = 'https://kursdollar.net/real-time/USD/';
		$document = new Document($url, true);

		$kurs = $document->find('td')[3];

		// var_dump($kurs);

		return $kurs;
	}

	public function run()
	{
		$rupiah = str_replace(' ', '', $this->curi()->text());
		$rupiah = floatval($rupiah);
		$rupiah = str_replace('.', '', $rupiah);
		echo "===========================================\n";
		echo "[+] Status => ".$this->curi()->text()."/USD\n";
		echo "===========================================\n";
		echo "[-] Jumlah Rupiah : ";
		$parameter_rupiah = trim(fgets(STDIN));
		sleep(3);
		echo "===========================================\n";
		$convert = $parameter_rupiah / $rupiah;
		echo "[=] Convert ".$parameter_rupiah." Rupiah => ".$convert." USD\n";
		echo "===========================================\n";
	}
}

$t = new ConvertRupiahDollar;
$t->run();