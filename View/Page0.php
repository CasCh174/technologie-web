<!-- //afficher toutes les données de PHPMyAdmin
//inclure des inputs pour modifier une ligne
// -->
<html>
<?php include_once(dirname(__DIR__)."../Functions/functions.php"); ?>
<!-- <link rel="stylesheet" type="text/css" href="Style/format.css"> -->
<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
<head>
	<title> Database </title>
</head>

<body>
	<div class = "container">
	<h1> DATABASE </h1>

	<div class="cadre"> Toutes les donnees de la database "booking" et de la table "t_reservation" se trouvent ici</div>
	<p>
		<form method="post" action="index.php?page=0">
			<input type="hidden" name="page0" />
				<button type="submit" name="retour" value="acceuil" > Retour acceuil </button>
				<table>
					<tr>
						<td>id</td>
						<td>reservation number</td>
						<td>name</td>
						<td>age</td>
						<td>destination</td>
						<td>insurance</td>
					</tr>
					<?php
					$rows = get_data();
					$i = 0;
					for ($i; $i<count($rows); $i++):?>
					<tr>
						<td><?php echo $rows[$i]['t_id'];?> </td>
						<td><?php echo $rows[$i]['t_res_num']?></td>
						<td><?php echo $rows[$i]['t_name']?></td>
						<td><?php echo $rows[$i]['t_age']?></td>
						<td><?php echo $rows[$i]['t_destination']?></td>
						<td><?php echo $rows[$i]['t_insurance']?></td>
						<td><button type="submit" name="modif" value="<?php echo $i ?>" > Modifier </button></td>
					</tr>
					<br>
				<?php endfor; ?>
				</table>



        <!--
        <input type="submit" name="modif" value= />
        <button class="btn btn-primary btn-block" type="submit" name="next" value="second"> Etape suivante </button>
        <button type="submit" name="mod" value="third"> Modifier </button>
        <input type="submit" name="next_page" value="Confirmer" /> -->
			</p>
			<input type='hidden' name = "p" value="0" />
		</form>
</div>
</body>
</html>
