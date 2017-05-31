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
				<a href="index.php">Se produkter</a><br>
				<a href="update.php">Updatera produkter</a><br>
				<a href="delete.php">Ta bort produkter</a><br>
			</article>
		</section>
		<section>
		
			<h2>Lägg till en produkt i ditt skafferi.</h2>
			
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
				<input type="submit" value="Lägg till" name="pantryAdd">
			</form>
		</section>
	
	</main>

	<script></script>
</body>
</html>