<!DOCTYPE html>
<html lang="eng">
<head>
	<title>Test Writing Lesson</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/styles.css">
	<link rel="stylesheet" type="text/css" href="/css/writinglessons.css">

	<script>
	  $(window).resize(function(){
		$('h1, h2, a').css('z-index', 'auto'); //auto reflow
	  });
	</script>

</head>


<body class="lesson">
	<header class="lesson">
		<h1 class="head">Writing lesson</h1>
	</header>

	<div class="userContentOne">
		<div class="objectifs">
			<h5>Brève description de la leçon qui amène les objectifs de la leçon ainsi que la tâche</h5>
		</div>

		<div class="brouillon">
			
				<div class="guidageBrouillon">
					<h5>Rough notes</h5>
					<p class="chat">What vocabulary will you need?</p>
					<textarea class="answer" rows="3">The words I need</textarea><br><br>
					<p class="chat">What grammar tools will you need?</p>
					<textarea class="answer" rows="3">The grammar I need</textarea><br><br>
					<p class="chat">Write down your main ideas</p>
					<textarea class="answer" rows="8">My main ideas</textarea>
				</div>
				<div class="toolBoxes">
					<div class="one">
						<div class="vocabulary">
							<h5>Vocabulary</h5>
							<p class="chat"> word n°1<br>
								word n°2<br>
								word n°3<br>
								word n°4<br>
								word n°5<br></p>
							<a class="nextLesson"> Vocabulary list n°1</a><br>
							<a class="nextLesson"> Vocabulary list n°2</a><br>
						</div>

						<input type="submit" name="toggleOne" value="Show vocabulary tips" class="toggleOne" id="toggleOne">
					</div>

					<div class="two">
						<div class="grammar">
							<h5>Grammar</h5>
							<p class="chat">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
							<a class="nextLesson"> Grammar tip n°1</a><br>
							<a class="nextLesson"> Grammar tip n°2</a><br>
						</div>

						<input type="submit" name="toggleTwo" value="Show grammar tips" class="toggleTwo" id="toggleTwo">
					</div>
				</div>

			<div class="model">
				<h5>Model</h5>

				<p class="chat">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
			</div>
			<input type="submit" name="toggleThree" value="Show model" class="toggleThree" id="toggleThree">

			<div class="tips">
				<h5>Formal tips</h5>
				<p class="chat">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
			</div>
		</div>


		<div class="ecriture">
			<h5>Writing time</h5>
			<textarea class="writing" rows="20">My text</textarea>
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
			<a class="nextLesson" href="/Lessons/Watch/TestWatchingLesson.php">test Watching Lesson</a>

	</div>

	<input type="buttonRetour" name="Retour" value="Back" onclick= window.location.href="/write.php">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js

"></script>

	<script>
		
			$('#toggleOne').click(function(){
				$('.vocabulary').animate({height:"toggle"}, "fast");
			});

			$('#toggleTwo').click(function(){
				$('.grammar').animate({height:"toggle"}, "fast");
			});

			$('#toggleThree').click(function(){
				$('.model').animate({height:"toggle"}, "fast");
			});
		
	</script>


</body>
</html>