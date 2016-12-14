<html>
<link rel="stylesheet" type="text/css" href="../Style/format.css">
<head>
	<title> RESERVATION </title>
</head>
<body>

	<h1> RESERVATION </h1>

	<div class="cadre"> Le prix de la place est de 12 euros jusqu'a 12 ans et ensuite de 15 euros. <br>
	    Le prix de l'assurance annulation est de 20 euros quel que soit le nombre de voyageurs. </div>
	<p>
	<form method="POST" action="../Controller/control.php">
		<input type="hidden" name="page1" />
		<!-- on ne peut pas mettre id où on veut: si je le met apres value l'id s affiche sur la page -->
		<p> <label for="destination"> Destination : </label> <input autofocus type="text" name="destination" id = "destination" value=<?php echo $reservation->getDestination();?>  > </p>
		<p> <label for="seats"> Nombre de places : </label> <input type="text" name="seats" id = "seats" value=<?php echo $reservation->getSeats();?>  > </p>
		<p> Assurance annulation <input type="checkbox" name="insurance" value="on" /> </p>
		<p>
		<button type="submit" name="next" value="second"> Etape suivante </button>
		<button type="submit" name="back" value="Annuler la reservation"> Annuler la reservation </button>
		</p>
		<input type='hidden' name = "p" value="1" />
	</form>
	</p>
</body>
</html>
