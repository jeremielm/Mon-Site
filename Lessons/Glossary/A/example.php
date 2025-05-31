<!DOCTYPE html>
<html lang="eng">
<head>
	<title>Vocabulary prototype</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/styles.css">
	<link rel="stylesheet" type="text/css" href="/css/vocabularypagestyles.css">
	<link rel="stylesheet" type="text/css" href="/Jquery/AudioPlayer/progres-bar.css">
</head>

<body class="glossary">

	<header>
		<h1 class="head">Prototype</h1>
		<?php include ("../searchbar.php");?>	
	</header>

	<div class="userContentOne">			

		<div class="nouns">
			<h1 class="noun">Nouns</h1>
		</div>

		<div class="cardDeck">

			<div class="cardNoun">
				<img class="img-responsive" src="/./img/word.png">
				<h3 class="word">Word</h4>	
				<div class="mediPlayer">
					<audio class="listen" preload="none" data-size="40" src="/audio/word.mp3"></audio>
				</div>
			</div>

			<div class="cardNoun">
				<img class="img-responsive" src="/./img/word.png">
				<h3 class="word">Word</h4>
				<div class="mediPlayer">
					<audio class="listen" preload="none" data-size="40" src=""></audio>
				</div>
			</div>

			<div class="cardNoun">
				<img class="img-responsive" src="/./img/word.png">
				<h3 class="word">Word</h4>
				<div class="mediPlayer">
					<audio class="listen" preload="none" data-size="40" src=""></audio>
				</div>
			</div>

			<div class="cardNoun">
				<img class="img-responsive" src="/./img/word.png">
				<h3 class="word">Word</h4>
				<div class="mediPlayer">
					<audio class="listen" preload="none" data-size="40" src=""></audio>
				</div>
			</div>

		</div>

		<div class="verbs">
			<h1 class="verb">Verbs</h1>
		</div>

		<div class="cardDeck">

			<div class="cardVerb">
				<img class="img-responsive" src="/./img/word.png">
				<h3 class="word">Word</h4>
				<div class="mediPlayer">
					<audio class="listen" preload="none" data-size="40" src=""></audio>
				</div>
			</div>

			<div class="cardVerb">
				<img class="img-responsive" src="/./img/word.png">
				<h3 class="word">Word</h4>
				<div class="mediPlayer">
					<audio class="listen" preload="none" data-size="40" src=""></audio>
				</div>
			</div>

			<div class="cardVerb">
				<img class="img-responsive" src="/./img/word.png">
				<h3 class="word">Word</h4>
				<div class="mediPlayer">
					<audio class="listen" preload="none" data-size="40" src=""></audio>
				</div>
			</div>

			<div class="cardVerb">
				<img class="img-responsive" src="/./img/word.png">
				<h3 class="word">Word</h4>
				<div class="mediPlayer">
					<audio class="listen" preload="none" data-size="40" src=""></audio>
				</div>
			</div>

		</div>

		<div class="adjectives">
			<h1 class="adjective">Adjectives</h1>
		</div>

		<div class="cardDeck">

			<div class="cardAdjective">
				<img class="img-responsive" src="/./img/word.png">
				<h3 class="word">Word</h4>
				<div class="mediPlayer">
					<audio class="listen" preload="none" data-size="40" src=""></audio>
				</div>
			</div>

			<div class="cardAdjective">
				<img class="img-responsive" src="/./img/word.png">
				<h3 class="word">Word</h4>
				<div class="mediPlayer">
					<audio class="listen" preload="none" data-size="40" src=""></audio>
				</div>
			</div>

			<div class="cardAdjective">
				<img class="img-responsive" src="/./img/word.png">
				<h3 class="word">Word</h4>
				<div class="mediPlayer">
					<audio class="listen" preload="none" data-size="40" src=""></audio>
				</div>
			</div>

			<div class="cardAdjective">
				<img class="img-responsive" src="/./img/word.png">
				<h3 class="word">Word</h4>
				<div class="mediPlayer">
					<audio class="listen" preload="none" data-size="40" src=""></audio>
				</div>
			</div>

		</div>

		<div class="adverbs">
			<h1 class="adverb">Adverbs</h1>
		</div>

		<div class="cardDeck">

			<div class="cardAdverb">
				<img class="img-responsive" src="/./img/word.png">
				<h3 class="word">Word</h4>
				<div class="mediPlayer">
					<audio class="listen" preload="none" data-size="40" src=""></audio>
				</div>
			</div>

			<div class="cardAdverb">
				<img class="img-responsive" src="/./img/word.png">
				<h3 class="word">Word</h4>
				<div class="mediPlayer">
					<audio class="listen" preload="none" data-size="40" src=""></audio>
				</div>
			</div>

			<div class="cardAdverb">
				<img class="img-responsive" src="/./img/word.png">
				<h3 class="word">Word</h4>
				<div class="mediPlayer">
					<audio class="listen" preload="none" data-size="40" src=""></audio>
				</div>
			</div>

			<div class="cardAdverb">
				<img class="img-responsive" src="/./img/word.png">
				<h3 class="word">Word</h4>
				<div class="mediPlayer">
					<audio class="listen" preload="none" data-size="40" src=""></audio>
				</div>
			</div>

		</div>

		<input type="buttonRetour" name="Retour" value="Back" onclick= window.location.href="/Lessons/Glossary/Aglossary.php">

	</div>


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="/Jquery/AudioPlayer/player.js"></script>
	<script> 
    	$(document).ready(function () {
       	 $('.mediPlayer').mediaPlayer();
    });
	</script>
</body>
</html>