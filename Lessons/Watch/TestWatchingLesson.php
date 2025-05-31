<!DOCTYPE html>
<html lang="eng">
<head>
	<title>Test Watching Lesson</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/styles.css">
	<link rel="stylesheet" type="text/css" href="/css/watchinglessons.css">

		<script>
	  $(window).resize(function(){
		$('h1, h2, a').css('z-index', 'auto'); //auto reflow
	  });
	</script>

</head>

<body class="lesson">
	<header class="lesson">
		<h1 class="head">Oral Comprehension</h1>
	</header>

	<div class="userContentOne">
		<div class="objectifs">
			<h5>Brève description de la leçon qui amène les objectifs de la leçon ainsi que la tâche</h5>
		</div>

		<div class="anticipation">
			<h5>Anticipation</h5>
			
			<p class="chat">Question 1</p>
			<textarea class="answer"rows="3">Write your answer here.</textarea>
			<p class="chat">Question 2</p>
			<textarea class="answer"rows="3">Write your answer here.</textarea>
		</div>

		<div class="containerPlayer">
			<div class="player">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/go2q8qu-Q58" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>

		<div class="toolBox">
			<h5>Toolbox</h5>
			<p class="chat">Word 1= mot 1</p>
			<p class="chat">Word 2= mot 2</p>
			<p class="chat">Word 3= mot 3</p>
			<p class="chat">Word 4= mot 4</p>
			<p class="chat">Word 5= mot 5</p>
		</div>

		<div class="guidage">
			<h5>Comprehension guide</h5>

			<p class="chat">Question 1</p>
			<textarea class="answer"rows="3">Write your answer here.</textarea>
			<p class="chat">Question 2</p>
			<textarea class="answer"rows="3">Write your answer here.</textarea>
			<p class="chat">Question 3</p>
			<textarea class="answer"rows="3">Write your answer here.</textarea>
			<p class="chat">Question 4</p>
			<textarea class="answer"rows="3">Write your answer here.</textarea>
			<p class="chat">Question 5</p>
			<textarea class="answer"rows="3">Write your answer here.</textarea>
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
			<a class="nextLesson" href="/Lessons/Write/TestWritingLesson.php">Test Writing Lesson</a>

	</div>

	<input type="buttonRetour" name="Retour" value="Back" onclick= window.location.href="/watch.php">

	</div>



</body>
</html>