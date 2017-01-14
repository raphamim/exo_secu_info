<?php 
$one_checked =false;
$securite='';
$linux='';
$wordpress='';

if (!empty($_POST['securite']) ) {
	$securite= ' [ Sécurité ] ';
	$one_checked = true;
}

if (!empty($_POST['linux']) ) {
	$linux= ' [ Linux ] ';
	$one_checked = true;
}

if (!empty($_POST['wordpress']) ) {
	$wordpress= ' [ Wordpress ] ';
	$one_checked = true;
}

if(!empty($_POST['nom']) && ctype_alpha($_POST['nom']) && !empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && $one_checked === true ){
	$message = 'Formulaire envoyé !';

	$nom = htmlspecialchars($_POST['nom']);
	$email = htmlspecialchars($_POST['email']);

	$filename = 'liste_abonne.txt';
	$file = fopen($filename, 'a+');
	fwrite($file, $nom.' '.$email.' // Thèmes -> '.$securite.''.$linux.''.$wordpress.' || <br/>');
	$contents = file_get_contents($filename);
	fclose($file);
} 

 ?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Newsletter non sécurisé</title>
</head>
<body>
<h1>S'inscrire à notre newsletter !</h1>
<p><?= (!empty($message) ? $message : '')?></p>	
<form method="POST" id="form">

		<label for="nom">Prénom / Nom : </label><input type="text" name="nom">
		<br/>
		<label for="email">Email : </label><input type="text" name="email">
		<br/>
		<p>Thème de la newsletter : </p>
		<br/>
		<input type="checkbox" name="securite"  id="securite"/> <label for="securite">sécurité </label>
		<br/>
		<input type="checkbox" name="linux"  id="linux"/> <label for="linux">Linux </label>
		<br/>
		<input type="checkbox" name="wordpress"  id="wordpress"/> <label for="wordpress">Wordpress </label>
		<br/>
		<input type="submit" value=" Envoyer " id="button-send">
	
</form>

</body>
</html> 