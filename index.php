<!DOCTYPE html>
<html lang="eng">
<head>
	<title>Liberty School</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">

<script>
  $(window).resize(function() {
	$('h1, h2, a').css('z-index', 'auto'); //auto reflow
  });
</script>

</head>

<body>

<!-- haut de page -->
	<header>
		<h1 class="head"> Liberty School
		</h1>
		<a href="login.php">Espace utilisateur</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<p class="accueil">Pas encore membre?&nbsp;&nbsp;<a href="subscription.php">Inscrivez-vous!</a></p>
			
	</header>

<!-- menu de navigation -->
<?php include ("menu.php");?>

<!-- contenu sous forme de boites -->
<div class="topbox">
	<h4>Actualités de l'école</h4>
	
</div>

<div class="middlebox">
	<h4>Objectifs globaux</h4>
		<div class="objectifs">
			<p>Imaginez une école dans laquelle vous pouvez faire ce que vous voulez en anglais.
			<p>Convaincu par le concept Subdury, consistant à laisser une totale autonomie aux apprenants, c’est le défi que s’est lancé Liberty school: vous faire progresser en anglais en vous rendant acteur de votre apprentissage dans un cadre de travail confortable et ludique. 
			<p>Vous choisissez vos objectifs en fonction de vos besoins et vous travaillez vos compétences grâce aux nombreuses ressources mises à votre disposition.
			<p> Vous tracez votre chemin vers vos objectifs à l’aide des conseils du professeur ou en totale autonomie.
			<p>Finies les évaluations subies, à la fin de chaque session le professeur et vous déterminez l’état de complétion de vos objectifs. Vous construisez ainsi à votre rythme des compétences solides.
			Vous pourrez regarder, écouter, lire et écrire en anglais, seul ou en groupes. 
			<p>Vous décidez.</p>
		</div>
</div>




<!-- pied de page -->
<?php include ("footer.php");?>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

