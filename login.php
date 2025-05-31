<?php
session_start ();

$bdd = new PDO('mysql:host=localhost;dbname=espace_membres','root', 'root');


if (isset($_POST['Envoyer'])){

	$mail = htmlspecialchars($_POST['mail']);
	$password = md5(htmlspecialchars($_POST['password']));

	if($mail !=="" && $password !=="")
	{
		$requete = "SELECT ID,prenom FROM membres WHERE mail='".$mail."' and password='".$password."'";
		$reponse = $bdd->prepare($requete);
		$reponse->execute();
		$reponse->setFetchMode(PDO::FETCH_ASSOC);
		//$_SESSION  = ["prenom"]; 	affecter variable prénom
		$count = 0;

		foreach ($reponse as $ligne) {

			$count++;
		}

		if($count != 0) 


		{
	
			header('Location: utilisateur.php');

		}

		else
		{
			$erreur = "Mail ou mot de passe incorrect";
		}
	}


}
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/loginstyles.css">
	<title>Espace utilisateur</title>
</head>
<body class="login">


<div class="boite">
	<form method="POST" action="">

	
	<h4 class="connexion">Connexion</h4>
	
		<h5>Adresse mail</h5>
			<input type="email" id="email" name="mail" placeholder="sherlock.holmes@bakerstreet.com" value="<?php if(isset($mail)) {echo $mail;} ?>" >		
			<h5>Mot de passe</h5>
			<input type="password" name="password" placeholder="******">
			<input type="submit" name="Envoyer">
			<input type="button" name="Retour" value="Retour" onclick= window.location.href="index.php">
	</form>
	<?php
		if(isset($erreur)){
			echo "<h5>" .$erreur. "</h5>" ;
		}
		?>
</div>
	
</body>
</html>

