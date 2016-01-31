<?php
// Unix Time values
$actualTime = time();
$past4HoursTime = time() - 3600*4;
$past8HoursTime = time() - 3600*8;
$past1DayTime = time() - 3600*24;

// Online/Offline devices
$totalon = 0;
$totaloff = 0;

function GetServerStatus($site, $port)
{
	$status = array("<div class='online'>Online</div>", "<div class='offline'>Offline</div>");
	$fp = @fsockopen($site, $port, $errno, $errstr, 2);
  
	if (!$fp) {
    	global $totaloff;
        $totaloff++;
	    return $status[1];
	} else { 
        global $totalon;
        $totalon++;
        return $status[0];
    }
}

require 'ping/vendor/autoload.php';
use \JJG\Ping;

function GetLatency ($host, $port)
{       
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
	
    #$host = "www.google.com.tr";
    #$port = 443;
    
	$handle = new Ping($host);

    if(isset($port))
    {
        $handle->setPort($port);
    }
    
    $latency = $handle->ping("fsockopen");

	$status = array("<div class='online'> {$latency} ms </div>", "<div class='offline'>Error</div>");
	
    if($latency !== false)
    {
		return $status[0];
    }
    else
    {
		return $status[1];
    }	
}

?>