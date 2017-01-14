<?php 

if( !empty($_POST['login']) && !empty($_POST['mdp'])  ){
	$message = 'Bonjour ';

	$login = htmlspecialchars($_POST['login']);
	$mdp = htmlspecialchars($_POST['mdp']);

	$filename = 'id.txt';
	$file = fopen($filename, 'a+');
	fwrite($file, 'Login : '.$login.' mdp : '.$mdp.'  |  |  |  ');
	$contents = file_get_contents($filename);
	fclose($file);
} 


 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
</head>
<body>
	<p><?= (!empty($message) ? $message.' '.$login : '')?></p>
	<form method="POST" id="form">
		<label for="login">login : </label><input type="text" name="login">
		<br/>
		<label for="mdp">mdp : </label><input type="text" name="mdp">
		<br/>
		<input type="submit" value="ok">
	</form>
	
	

</body>
</html>