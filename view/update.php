<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Maria Berntsson">
	<link rel="stylesheet" href="resources/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MyBento</title>
</head>

<body>

	<header></header>

	<main>
		<section>
			<article>
				<a href="index.php">Se skafferiet</a><br>
				<a href="index.php?action=add">Lägg till produkter</a><br>
				<a href="index.php?action=delete">Ta bort produkter</a><br>
			</article>
		</section>
	
		<section>
		
			<h2>Updatera en produkt i skafferi.</h2>
			
			<form method="post" action="?action=pantry-update&id=<?= $_GET['id'] ?>">
				<label>Namn: <?php echo $_GET['name']; ?></label>
				<br>
				<label>Nytt antal</label>
				<input type="text" name="productQun">
				<br>
				<label>Nytt antal liter</label>
				<input type="text" name="productLiter">
				<br>
				<label>Nytt antal kg</label>
				<input type="text" name="productKg">
				<br>
				<input type="submit" value="Uppdatera" name="pantryUpdate">
			</form>
		</section>
	
	</main>

	<script></script>
</body>
</html>
