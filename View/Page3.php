<html>
<link rel="stylesheet" type="text/css" href="Style/format.css">
<head>
	<title> RESERVATION </title>
</head>
<body>
	<h1> VALIDATION DES RESERVATION </h1>

	<form action="Controller/control.php" method="POST">

	<p class="cadre">
	<table>
		<tr>
			<td>Destination</td>
			<td><?php echo $reservation->getDestination(); ?></td>
		</tr>
		<tr>
			<td>Nombre de places</td>
			<td><?php echo $reservation->getSeats();?></td>
		</tr>
			<br>
		</tr>
		<?php for ($i = 0 ; $i< $reservation->getSeats(); $i++): ?>
			<tr>
				<td>Nom</td>
				<td><?php echo $_SESSION['reservation']->getNames()[$i];?></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><?php echo $reservation->getAges()[$i];?> </td>
			</tr>
		<?php endfor; ?>
	</table>
	</p>

		<p>
    <input type="submit" name="next_page" value="Confirmer" />
    <input type="submit" name="back" value="Retour a la page precedente" />
		<input type="submit" name="cancel" value="Annuler la reservation" />
    </p>
		<input type='hidden' name = "p" value="3" />
	</form>
</p>
</body>
</html>
