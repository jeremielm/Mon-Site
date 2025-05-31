
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<title>Espace Utilisateur</title>
</head>
<body class="utilisateur">
	<!-- haut de page -->
	<header>

		<h1 class="head"> Liberty School</h1>
		<h1 class="head"> Mon profil</h1>

	<?php

		$date = date("D-F-Y");
		$heure = date("H:i");
		echo "<p>" . $date . "</p>"
	?>

	<?php
		$timeOfDay = "morning";
		$timeOfDay2 = "afternoon";
		$timeOfDay3 = "evening";
		$firstName = $_SESSION["prenom"];

		if ($heure > 0 AND $heure <= 11 )
		 {
			echo "<p>".'Good '.$timeOfDay.' '. $firstName ."</p>";
		}
		elseif ($heure > 11 AND $heure <= 17)
		 {
			echo "<p>".'Good '.$timeOfDay2.' '. $firstName ."</p>";
		}
		else
		{
			echo "<p>".'Good '.$timeOfDay3.' '. $firstName ."</p>";
		}

	?>

	</header>




<!-- menu de navigation -->
<?php include ("menuutilisateur.php");?>

<!-- gestion des divs de la page -->
<div class="userContentOne">

		<div class="myPicture">
			<img src="img/tie.jpeg" alt="Bootstrap" class="img-thumbnail">
		</div>

		<div class="myStats">
				<?php include ("graphUtilisateur.php");?>
		</div>

		<div class="turnScreen">
			<p class="chat"> Faites pivoter votre appareil mobile ou agrandissez votre fenêtre pour voir votre progression </p>
		</div>

		<div class="chat">
			<p class="chat">Le chat (pas prioritaire)</p>
		</div>

		<div class="myWords">
			<p class="chat">Insérer les derniers mots de vocabulaire appris et saisis par l'élève</p>

			<p>Lorem ipsum dolor sit amet, et vim graece tempor utamur, ex nonumes volumus vivendum cum, id regione labitur sadipscing sea. Ad per decore semper. His in consul semper dissentiunt. No sit impetus aliquam appareat, et mei sumo dicant graece.

			Te zril quidam postulant ius, ea eos solet iudico adipisci. Cu usu tollit verear volumus, cum libris erroribus appellantur at. Mei no evertitur pertinacia argumentum. Vix in atqui deseruisse, essent bonorum apeirian his ea, in duo tacimates iudicabit liberavisse.</p> 
		</div>

		<div class="myLatestLessons">
			<p class="chat">Insérer les liens vers l'historique des leçons effectuées par l'élève</p>
			<p>Lorem ipsum dolor sit amet, et vim graece tempor utamur, ex nonumes volumus vivendum cum, id regione labitur sadipscing sea. Ad per decore semper. His in consul semper dissentiunt. No sit impetus aliquam appareat, et mei sumo dicant graece.

			Te zril quidam postulant ius, ea eos solet iudico adipisci. Cu usu tollit verear volumus, cum libris erroribus appellantur at. Mei no evertitur pertinacia argumentum. Vix in atqui deseruisse, essent bonorum apeirian his ea, in duo tacimates iudicabit liberavisse.</p>
		</div>

</div>

		





<?php include ("footer.php");?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>