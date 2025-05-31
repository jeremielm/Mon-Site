<!DOCTYPE html>
<html>
<head>
	<title>Les horaires</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>

<!-- haut de page -->

	<header>
		<h1 class="head"> Les horaires
		</h1>
		<a href="login.php">Espace utilisateur</a>	
	</header>

<!-- menu de navigation -->
<?php include ("menu.php");?>

<!-- contenu de la page -->

	<div class="topbox">
	<h4>Périodes scolaires</h4>	
		<div class="horaires">
			<table>
				<tr>
					<th></th>
					<th>Lundi</th>
					<th>Mardi</th>
					<th>Mercredi</th>
					<th>Jeudi</th>
					<th>Vendredi</th>
					<th>Samedi</th>
				</tr>

				<tr>
					<th>9h-12h</th>
					<td>Adultes</td>
					<td>Adultes</td>
					<td>Adultes</td>
					<td>Adultes</td>
					<td>Adultes</td>
					<td>Enfants</td>
				</tr>

				<tr>
					<th>14h-16h</th>
					<td>Adultes</td>
					<td>Adultes</td>
					<td>Enfants</td>
					<td>Adultes</td>
					<td>Adultes</td>
					<td>Adultes</td>
				</tr>

				<tr>
					<th>16h-19h</th>
					<td>Enfants</td>
					<td>Enfants</td>
					<td>Enfants</td>
					<td>Enfants</td>
					<td>Enfants</td>
					<td>Enfants</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="middlebox">
		<h4>Vacances scolaires</h4>
		<div class="horaires">
			<table>
				<tr>
					<th></th>
					<th>Lundi</th>
					<th>Mardi</th>
					<th>Mercredi</th>
					<th>Jeudi</th>
					<th>Vendredi</th>
					<th>Samedi</th>
				</tr>

				<tr>
					<th>9h-12h</th>
					<td>Enfants</td>
					<td>Enfants</td>
					<td>Enfants</td>
					<td>Enfants</td>
					<td>Enfants</td>
					<td>Enfants</td>
				</tr>

				<tr>
					<th>14h-17h</th>
					<td>Enfants</td>
					<td>Enfants</td>
					<td>Enfants</td>
					<td>Enfants</td>
					<td>Enfants</td>
					<td>Enfants</td>
				</tr>
			</table>
		</div>
	</div>

<!-- pied de page -->
	<?php include ("footer.php");?>
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>