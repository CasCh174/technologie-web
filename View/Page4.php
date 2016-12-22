<html>
<link rel="stylesheet" type="text/css" href="Style/format.css">
<head>
	<title> RESERVATION </title>
</head>
<body>
	<h1> CONFIRMATION DES RESERVATIONS </h1>
	<p>
	   <form action="index.php?page=4" method="POST">
	      <p> Votre demande a bien ete enregistree. </p>
	      <p>Merci de bien vouloir verser la somme de
					<?php
						$price = 0;
						foreach ($reservation->getAges() as $age) {
								if ($age <= 12){
									$price += 10;
								}
								else{
									$price += 15;
								}
						}
						if ($reservation->getInsurance()=='on'){
								$price += 20;
						}
						echo $price;
					?>
					euros sur le compte 000-000000-00.
			 	</p>
	    	<p><input type="submit" name="home" value="Retour a la page d acceuil" /> </p>
				<input type='hidden' name = "p" value="4" />
  	</form>
  </p>
</body>
</html>
