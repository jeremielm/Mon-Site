<!DOCTYPE html>
<html lang="eng">
<head>
	<title>Glossary</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/styles.css">
	<link rel="stylesheet" type="text/css" href="/css/glossarystyles.css">
</head>

<body class="glossary">
	<header>
		<h1 class="head">Glossary</h1>
		<?php include ("searchbar.php");?>
	</header>

	<?php include("../../menulessonpage.php");?>

	<div class="userContentOne">

		<div class="letter">
			<h1 class="lettrine">E</h1>
		</div>

		<div class="arrowWrapper">
			<input type="button-arrow" name="arrow-left" class="arrow-left" onclick= window.location.href="/./Lessons/Glossary/Dglossary.php">
			<input type="button-arrow" name="arrow-right" class="arrow-right" onclick= window.location.href="/./Lessons/Glossary/Fglossary.php">
		</div>

		<div class="cardDeck">

			<div class="card">
				<img class="img-responsive" src="/./img/bigbird.png">
				<a href="">Title</a>
			</div>

			<div class="card">
				<img class="img-responsive" src="/./img/bigbird.png">
				<a href="">Title</a>
			</div>
		
			<div class="card">
				<img class="img-responsive" src="/./img/bigbird.png">
				<a href="">Title</a>
			</div>

			<div class="card">
				<img class="img-responsive" src="/./img/bigbird.png">
				<a href="">Title</a>
			</div>

			<div class="card">
				<img class="img-responsive" src="/./img/bigbird.png">
				<a href="">Title</a>
			</div>

			<div class="card">
				<img class="img-responsive" src="/./img/bigbird.png">
				<a href="">Title</a>
			</div>

			<div class="card">
				<img class="img-responsive" src="/./img/bigbird.png">
				<a href="">Title</a>
			</div>

			<div class="card">
				<img class="img-responsive" src="/./img/bigbird.png">
				<a href="">Title</a>
			</div>

			<div class="card">
				<img class="img-responsive" src="/./img/bigbird.png">
				<a href="">Title</a>
			</div>

		</div>
		<div class="menu">
			<?php include ("menuglossary.php");?>
		</div>

		<input type="buttonRetour" name="Retour" value="Back" onclick= window.location.href="/utilisateur.php">

	</div>



</body>
</html>