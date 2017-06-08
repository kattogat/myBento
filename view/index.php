<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Maria Berntsson">
	<link rel="stylesheet" type="text/css" href="view/resources/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MyBento</title>
</head>

<body>

	<header></header>

	<main>
		<section>
			<article>
				<h2>MyBento</h2>
				<p id="welcome">Välkommen till MyBento! Här kan du visullera ett skafferi.</p>
				<nav>
					<a href="index.php?action=add">Lägg till produkter</a><br>
				</nav>
			</article> 
		
			<h2>Ditt skafferi</h2>
			<table>
				<tbody>
					<tr>
						<th>Produkt</th>
						<th>Antal</th>
						<th>Uppdatera / Ta bort</th>
					</tr>
			<?php 
				
				foreach( $theThings as $row ) {
			?>
					<tr>
						<td><?= $row['name'] ?></td>
						<td><?= $row['quantity'] ?></td>
						<td><a href="?action=update&id=<?= $row['id'] ?>&name=<?= $row['name'] ?>">Uppdatera |</a> <a href="?action=delete&id=<?= $row['id'] ?>">Ta bort</a></td>
					</tr>
			<?php 
				}
			?>
					
				</tbody>
			</table>
			
		</section>
	
	</main>

	<script src="resources/script.js"></script>
</body>
</html>