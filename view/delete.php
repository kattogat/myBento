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
				<a href="index.php?action=add">Lägg till produkter</a><br>
				<a href="index.php?action=update">Updatera produkter</a><br>
			</article>
		</section>
	
		<section>
		
			<h2>Ta bort en produkt ur skafferi.</h2>
			
			<form method="post" action="?action=pantry-delete">
				<label>Namn</label>
				<input type="text" name="productName">
				<br>
				<input type="submit" value="Ta bort" name="pantryDelete">
			</form>
		</section>
	
	</main>

	<script></script>
</body>
</html>
