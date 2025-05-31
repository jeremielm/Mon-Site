<!DOCTYPE html>
<html lang="eng">
<head>
	<title>Test Speaking Lesson</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/styles.css">
	<link rel="stylesheet" type="text/css" href="/css/speakinglesson.css">

	<script>
	  $(window).resize(function(){
		$('h1, h2, a').css('z-index', 'auto'); //auto reflow
	  });
	</script>

</head>

<body class="lesson">

	<header class="lesson">
		<h1 class="head">Speaking Lesson</h1>
	</header>

	<div class="userContentOne">

		<div class="objectifs">
			<h5>Brève description de la leçon qui amène les objectifs de la leçon ainsi que la tâche</h5>
		</div>

		<div class="vocabulary">
			<h5>Vocabulary</h5>
				<p class="chat"> word n°1<br>
					word n°2<br>
					word n°3<br>
					word n°4<br>
					word n°5<br></p>
				<a class="nextLesson"> Vocabulary list n°1</a><br>
				<a class="nextLesson"> Vocabulary list n°2</a><br><br>
				<textarea class="answer" rows="5">Other words I know</textarea>
		</div>

		<div class="grammar">
			<h5>Grammar</h5>
				<p class="chat">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
				<a class="nextLesson"> Grammar tip n°1</a><br>
				<a class="nextLesson"> Grammar tip n°2</a><br><br>
				<textarea class="answer" rows="5">Other grammar tips I know</textarea>
		</div>

		<div class="idioms">
			<h5>Idioms</h5>
				<p class="chat">
					idiom n°1<br>
					idiom n°2<br>
					idiom n°3<br>
					idiom n°4<br>
					idiom n°5<br></p><br><br>
				<textarea class="answer" rows="5">Other idioms I know</textarea>
		</div>

		<div class="phonology">
			<h5>Phonology</h5>
				<p class="chat">Listen to the following expressions and repeat.</p><br><br>
				<audio controls src="/msc/Jeopardy-Think Music.mp3"></audio><br>
				<audio controls src="/msc/Jeopardy-Think Music.mp3"></audio><br>
				<audio controls src="/msc/Jeopardy-Think Music.mp3"></audio><br>
				<audio controls src="/msc/Jeopardy-Think Music.mp3"></audio>
		</div>

		<div class="ecriture">
			<h5>Rough notes</h5>
				<textarea class="answer" rows="10">My main ideas</textarea>
		</div>

		<div class="containerPlayer">
			<h5>Example</h5>
			<div class="player">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/go2q8qu-Q58" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>

		<div class="evaluation">
			<h5 class="evaluation">Evaluation</h5><br>

			<h5 class="objectif">Objectif n°1</h5>

			<input type="checkbox" id="reached" name="objective" value="reached">
			<label for="reached"> <h5 class="objectif">Reached</h5> </label>
			<input type="checkbox" id="almost" name="objective" value="almost">
			<label for="almost"> <h5 class="objectif">Almost</h5> </label>
			<input type="checkbox" id="notYet" name="objective" value="notYet">
			<label for="notYet"> <h5 class="objectif">Not yet</h5> </label><br><br>

			<h5 class="objectif">Objectif n°2</h5>

			<input type="checkbox" id="reached" name="objective" value="reached">
			<label for="reached"> <h5 class="objectif">Reached</h5> </label>
			<input type="checkbox" id="almost" name="objective" value="almost">
			<label for="almost"> <h5 class="objectif">Almost</h5> </label>
			<input type="checkbox" id="notYet" name="objective" value="notYet">
			<label for="notYet"> <h5 class="objectif">Not yet</h5> </label><br><br>

			<h5 class="objectif">Objectif n°3</h5>

			<input type="checkbox" id="reached" name="objective" value="reached">
			<label for="reached"> <h5 class="objectif">Reached</h5> </label>
			<input type="checkbox" id="almost" name="objective" value="almost">
			<label for="almost"> <h5 class="objectif">Almost</h5> </label>
			<input type="checkbox" id="notYet" name="objective" value="notYet">
			<label for="notYet"> <h5 class="objectif">Not yet</h5> </label>
			<input type="submit" id="save" name="save" value="Save"> 
		</div>

		<div class="nextLesson">
			<h5>Going further</h5><br><br>
			<a class="nextLesson" href="/Lessons/Interact/TestInteractingLesson.php">Test Interacting Lesson</a>

	</div>

	<input type="buttonRetour" name="Retour" value="Back" onclick= window.location.href="/speak.php">

	</div>

</body>
</html>