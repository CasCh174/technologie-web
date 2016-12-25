<html>
<!-- <link rel="stylesheet" type="text/css" href="Style/format.css"> -->
<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
<head>
	<title> RESERVATION </title>
</head>

<body>
	<div class = "container">
	<h1> RESERVATION </h1>

	<div class="cadre"> Le prix de la place est de 12 euros jusqu'a 12 ans et ensuite de 15 euros. <br>
	    Le prix de l'assurance annulation est de 20 euros quel que soit le nombre de voyageurs. </div>
	<p>
		<form method="post" action="index.php?page=1">
			<input type="hidden" name="page1" />
			<!-- on ne peut pas mettre id où on veut: si je le met apres value l'id s affiche sur la page -->
			<p> <label for="destination"> Destination : </label> <input class = "form-control" autofocus type="text" name="destination" id = "destination" value=<?php echo $_SESSION["reservation"]->getDestination();?>  > </p>
			<p> <label for="seats"> Nombre de places : </label> <input class = "form-control" type="text" name="seats" id = "seats" value=<?php echo $_SESSION["reservation"]->getSeats();?>  > </p>
			<p> Assurance annulation <input type="checkbox" name="insurance" value="true" /> </p>
			<p>
			<button class="btn btn-primary btn-block" type="submit" name="next" value="second"> Etape suivante </button>
			<button class="btn btn-primary btn-block" type="submit" name="back" value="Annuler la reservation"> Annuler la reservation </button>
			</p>
			<input type='hidden' name = "p" value="1" />
		</form>
	</p>
</div>
</body>
</html>
