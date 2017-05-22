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
				<a href="index.php">Se produkter</a><br>
				<a href="create.php">Lägg till produkter</a><br>
				<a href="delete.php">Ta bort produkter</a><br>
			</article>
		</section>
	
		<section>
		
			<h2>Updatera en produkt i skafferi.</h2>
			
			<form method="get" action="../index.php">
				<label>Namn</label>
				<input type="text" name="productName">
				<br>
				<label>Antal</label>
				<input type="text" name="productQun">
				<br>
				<label>Liter</label>
				<input type="text" name="productLiter">
				<br>
				<label>Kg</label>
				<input type="text" name="productKg">
				<br>
				<input type="submit" value="Uppdatera" name="pantryUpdate">
			</form>
		</section>
	
	</main>

	<script></script>
</body>
</html>