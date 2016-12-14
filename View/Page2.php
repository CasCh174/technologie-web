<html>
<link rel="stylesheet" type="text/css" href="../Style/format.css">
<head>
	<title> RESERVATION </title>
</head>
<body>
	<h1> DETAIL DES RESERVATION </h1>

	<form action="../Controller/control.php" method="post">

		<div class="cadre" class="padding">

	<?php for ($i = 0; $i< $reservation->getSeats(); $i++): ?>
	  <p> Nom : <input type="text" name="names[]" value=<?php echo $reservation->getNames()[$i];?>> </p>
		<p> Age : <input type="text" name="ages[]" value=<?php echo $reservation->getAges()[$i];?> > </p>
	<?php endfor; ?>

</div>

		<p>

			<button type="submit" name="next" value="third"> Etape suivante </button>
			<button type="submit" name="return" value="retour"> Retour a la page precedente </button>
			<button type="submit" name="back" value="Annuler la reservation"> Annuler la reservation </button>

		</p>
			<input type='hidden' name = "p" value="2" />
	</form>
</p>
</body>
</html>
