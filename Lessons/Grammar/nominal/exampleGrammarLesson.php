<!DOCTYPE html>
<html lang="eng">
<head>
	<title>Exemple de leçon de grammaire</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/styles.css">
	<link rel="stylesheet" type="text/css" href="/css/grammarLessonStyles.css">
</head>

<body class="grammar">

	<header>
		<h1 class="head">Exemple de leçon de grammaire</h1>
		<?php include ("../../../searchbar.php");?>
	</header>

	<?php include("../../../menulessonpage.php");?>

	<div class="userContentOne">

		<div class="grammarLesson">
			<h5>Leçon</h5><br><br>
			<p class="chat">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
		</div>

		<div class="grammarExercise">
			<h5>Exercice</h5><br><br>
			<p class="consigne">Complète les phrases suivantes avec la bonne forme.</p><br>

			<p class="chat"><label for="phraseOne">1. C'est l'histoire d'un mec, normal...</label>

				<select name="conjugaison" id="phraseOne" class="exercice">
					<option value="vert">vert</option>
					<option value="rouge">rouge</option>
					<option value="bleu">bleu</option>
					<option value="blanc">blanc</option>
					<option value="jaune">jaune</option>
				</select><br>

			<label for="phraseTwo">2. On a une chance sur</label>

				<select name="conjugaison" id="phraseTwo" class="exercice">
					<option value="blanc">10</option>
					<option value="rouge">100</option>
					<option value="bleu">10 000</option>
					<option value="vert">1 000 000</option>
					<option value="jaune">10 000 000</option>
				</select> de se faire mordre par une chauve-souris ENRAGEE!<br>

			<label for="phraseThree">3. Le Nord, en fonction de comment on est tourné, ça change tout le temps.</label>

				<select name="conjugaison" id="phraseThree" class="exercice">
					<option value="quoi">Quoi?</option>
					<option value="pasFaux">C'est pas faux!</option>
					<option value="tCon">Mais t'es con!</option></p>


			

			<input type="buttonRetour" name="Retour" value="Valider" onclick= window.location.href="">
		</div>

		<div class="nextLesson">
			<h5>Pour aller plus loin</h5><br><br>
			<a class="nextLesson" href="">Link to the next lesson</a><br>
			<a class="nextLesson" href="">Link to the next lesson</a><br>
			<a class="nextLesson" href="">Link to the next lesson</a>
		</div>

		<input type="buttonRetour" name="Retour" value="Retour" onclick= window.location.href="/Lessons/Grammar/precisGrammatical.php">

	</div>



</body>
</html>
