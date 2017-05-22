<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Maria Berntsson">
	<link rel="stylesheet" href="main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MyBento</title>
</head>

<body>

	<header></header>

	<main>
		<section>
			<article>
				<h2>MyBento</h2>
				<p>Välkommen till MyBento! Här kan du visullera ett skafferi.</p>
				<a href="create.php">Lägg till produkter</a><br>
				<a href="update.php">Updatera produkter</a><br>
				<a href="delete.php">Ta bort produkter</a><br>
			</article>
		</section>
		<section>
		
			<h2>Ditt skafferi</h2>
			
			<?php require "../app/model/Model.php"; $pantry = new Model("", "pantry"); $pantry->getEverything();  ?>
			
		</section>
	
	</main>

	<script></script>
</body>
</html>