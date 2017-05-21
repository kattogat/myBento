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

	<main>
		<section>
			<article>
				<h2>MyBento</h2>
				<p>Välkommen till MyBento! Här kan du visullera ett skafferi.</p>
			</article>
		</section>
		<section>
			<form method="POST" action="../app/controler.php">
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