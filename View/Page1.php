<html>
<head>
	<title> RESERVATION </title>
</head>
<body>

	<h1> RESERVATION </h1>

	<p> Le prix de la place est de 12 euros jusqu'a 12 ans et ensuite de 15 euros. <br>
	    Le prix de l'assurance annulation est de 20 euros quel que soit le nombre de voyageurs. </p>
	<p>
	<form method="post" action="../Controller/control.php">
		<input type="hidden" name="page1" />
		<p> Destination : <input type="text" name="destination"/> </p>
		<p> Nombre de places : <input type="text" name="places"/> </p>
		<p> Assurance annulation <input type="checkbox" name="insurance" value="off" /> </p>
		<p> <input type="submit" name="next_page" value="Etape suivante" />
		<input type="submit" name="cancel" value="Annuler la reservation" /> </p>

	</p>
</body>
</html>