<?php
error_reporting(0);


$list = explode("\n", file_get_contents($argv[1])); 


$hash = '$2y$10$BxO1iVD3HYjVO83NJ58VgeM4wNc7gd3gpggEV8OoHzB1dOCThBpb6'; 

if(isset($argv[1])) {
	foreach($list as $wordlist) {
		print " [+]"; print (password_verify($wordlist, $hash)) ? "$hash -> $wordlist (BENARRRRRRRRRRRRR)\n" : "$hash -> $wordlist (SALAH)\n";
	}
} else {
	print "usage: php ".$argv[0]." wordlist.txt\n";
}
?>
