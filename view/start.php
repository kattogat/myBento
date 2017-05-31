<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Maria Berntsson">
	<link rel="stylesheet" href="resources/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MyBento</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
		
			<?php 
				require "../index.php";
			?>
			
		</section>
	
	</main>

	<script src="resources/script.js"></script>
</body>
</html>