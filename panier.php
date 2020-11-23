<!DOCTYPE html>
<html>
<head>
	<title>panier</title>
		<link rel="stylesheet" href="style_panier.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Roboto:900" rel="stylesheet"> 

</head>
<body>

	<div id="panier">
		<?php
			session_start();
					if(!isset($_SESSION['id'])) {
			header('Location:index.php');
			}
	
			if(isset($_POST['continuer'])) {
				$basi = mysqli_connect('localhost','root','root','gestionclients');
				$res=mysqli_query($basi,"INSERT INTO commande SET Numclt = ".$_SESSION['id']);
				
				$cmd_id = mysqli_insert_id($basi);

				foreach ($_SESSION['panier'] as $reference => $quantite) {
					$res=mysqli_query($basi,"INSERT INTO lignedecommande SET Refprod = ".$reference.",quantite = ".$quantite." ,Numcmd = ".$cmd_id);
				}
				mysqli_close($basi);
				$_SESSION['panier'] = array();
				header('Location:index.php');
			}
		?>

		<?php

			foreach ($_SESSION['panier'] as $reference => $quantite) {
				echo '
					<div class="container">
					<div class="row">
						<h2>Référence : '.$reference.'  </h2> <h2> ===> </h2>
						<h2 style="margin-left:20px;">Quantité : '.$quantite.'  </h2>
						<hr>
					</div>
					</div>
				';
			}
		?>
		<form method="POST" action="">
			
		<input type="submit" name="continuer" value="continuer" class="btn btn-success" style="
			margin-top: 50px; margin-left: 140px; padding-left: 25px; padding-right: 25px;"> 

		</form>

	</div>

</body>
</html>