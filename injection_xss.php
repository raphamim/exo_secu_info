<?php 

	$script =' <script type="text/javascript"> function relocation() { document.location = \'https://www.google.fr/\';}	 relocation();</script>';

	$filename = 'newsletter-non-securise.php';
	$file = fopen($filename, 'a+');
	fwrite($file, $script);
	$contents = file_get_contents($filename);
	fclose($file); 

	?>