<html>
<head>
	<title> RESERVATION </title>
</head>
<body>

	<h1> DETAIL DES RESERVATION </h1>

	<form method="post" action="../Controller/control.php">

	/*
	<?php
	foreach(reservation.getSeats()){
	pb: il doit envoyer les infos avant de les ecraser par des nouvelles
	}
	?>
	*/


	for ($i = 1; $i <= $reservation->seats(); $i++) {
    	<p> Nom : <input type="text" name="names" /> </p>
		}

		<p> Destination : <input type="text" name="names"/> </p>
		<p> Nombre de places : <input type="text" name="places"/> </p>
		<p> Assurance annulation <input type="checkbox" name="insurance" value="off" /> </p>
		<p> <input type="submit" name="next_page" value="Etape suivante" />
		<input type="submit" name="cancel" value="Annuler la reservation" /> </p>
	</p>
</body>
</html>



