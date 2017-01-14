<?php 
	
		$filename = 'liste_abonne.txt';
		$data = file_get_contents($filename);
		echo $data;
		//Injection dans newsletter non securise d'un script qui redirige vers google

 ?>

