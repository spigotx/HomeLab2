<?php
	
	/**
	-> composer.json
	======================================
	{
		"minimum-stability": "dev",
		"require": {
			"geerlingguy/ping": "1.*@dev"
		}
	}
	======================================
	**/
	
	/**
	* vendor/autoload.php dosyası Composer tarafından
	* oluşturulmaktadır.
	*/
	require("vendor/autoload.php");
	
	use \JJG\Ping;
	
	# Host adresi ( IP adreside girilebilir. )
	$host = "www.google.com.tr";
	# Port numarası ( girmesenizde olur. )
	$port = 443;
	
	$handle = new Ping($host);
	
	if(isset($port))
	{
		$handle->setPort($port);
	}
	
	$latency = $handle->ping("fsockopen");
	
	if($latency !== false)
	{
		echo "Latency is {$latency} ms";
	}
	else
	{
		echo "Host could not be reached.";
	}