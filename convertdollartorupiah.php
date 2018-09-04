<?php
require_once('vendor/autoload.php');
 
use DiDom\Document;

/**
 * 
 */
class ConvertDollarRupiah
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
		$rupiah = doubleval($rupiah);
		echo "===========================================\n";
		echo "[+] Status => ".$this->curi()->text()."/USD\n";
		echo "===========================================\n";
		echo "[-] Jumlah USD : ";
		$parameter_dollar = trim(fgets(STDIN));
		sleep(3);
		echo "===========================================\n";
		$convert = $parameter_dollar * $rupiah;
		echo "[=] Convert ".$parameter_dollar." Dollar => Rp.".$convert."\n";
		echo "===========================================\n";
	}
}

$t = new ConvertDollarRupiah;
$t->run();