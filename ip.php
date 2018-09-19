<?php
/**
 * grab domain from ip
 * Coded : galehdotid
 * thx   : Indoxploit - sukabumi blackhat
 * Open file grab-domains.txt in sublime text !
 */ 
error_reporting(0);
class ip{
	function ngegas($ip){
		$ch = curl_init();
		$options = [
            CURLOPT_URL => "https://api.hackertarget.com/reverseiplookup/?q=$ip",
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_USERAGENT => "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0",
            CURLOPT_SSL_VERIFYHOST  => FALSE,
            CURLOPT_SSL_VERIFYPEER  => FALSE

		];
		curl_setopt_array($ch, $options);
		$ekse = curl_exec($ch);
		// print_r($ekse);
		$domain = $ekse;
		        echo $domain;
		   $file = @fopen("grab-domain.txt", "a");
		           @fwrite($file, $domain);
		           @fclose($file);

		       return $ekse;
		      curl_close($ch);
	}
	function gasken($ip){
		$this->ngegas($ip);
	}
}
$ip = $argv[1];
if($ip){
$gasken = new ip();
$gasken->gasken($ip);
}else{
	echo "php ip.php 192.168.0.0.1";
}
?>