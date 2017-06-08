<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Maria Berntsson">
	<link rel="stylesheet" href="view/resources/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MyBento - Uppdatera</title>
</head>

<body>

	<header></header>

	<main>
		<section>
			<article>
				<nav>
					<a href="index.php">Se skafferiet</a><br>
					<a href="index.php?action=add">Lägg till produkter</a><br>
				</nav>
			</article>
		
			<h2>Uppdatera en produkt i skafferi.</h2>
			
			<form method="post" action="?action=pantry-update&id=<?= $_GET['id'] ?>">
				<label id="thing">Uppdatera: <?php echo $_GET['name']; ?></label>
				<br>
				<label>Nytt antal</label>
				<br>
				<input type="text" name="productQun">
				<br>
				<label>Nytt antal liter</label>
				<br>
				<input type="text" name="productLiter">
				<br>
				<label>Nytt antal kg</label>
				<br>
				<input type="text" name="productKg">
				<br>
				<input class="butt" type="submit" value="Uppdatera" name="pantryUpdate">
			</form>
		</section>
	
	</main>

	<script></script>
</body>
</html>
