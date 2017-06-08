<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Maria Berntsson">
	<link rel="stylesheet" href="view/resources/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MyBento - Lägg till</title>
</head>

<body>

	<header></header>

	<main>
		<section>
			<article>
				<nav>
					<a href="index.php">Se produkter</a><br>
				</nav>
			</article>
	
			<h2>Lägg till en produkt i ditt skafferi.</h2>
			
			<form method="post" action="?action=pantry-add">
				<label>Namn</label>
				<br>
				<input type="text" name="productName">
				<br>
				<label>Antal</label>
				<br>
				<input type="text" name="productQun">
				<br>
				<label>Liter</label>
				<br>
				<input type="text" name="productLiter">
				<br>
				<label>Kg</label>
				<br>
				<input type="text" name="productKg">
				<br>
				<input class="butt" type="submit" value="Lägg till" name="pantryAdd">
			</form>
		</section>
	
	</main>

	<script></script>
</body>
</html>