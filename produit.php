<!DOCTYPE html>
<html>

<head>
	<title></title>

	<meta charset="utf-8">
	<meta name="Keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style_prod.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:900" rel="stylesheet"> 
	
</head>


<body>

<section >
	
		<br>
		
		<h2 class="text-center font-weight-bold hspace">  compléter votre commande   </h2>
		<hr class="hr1">
		<br>
		<div class="container">
<?php
	
		$basi = mysqli_connect('localhost','root','root','gestionclients');
		$query = "SELECT * FROM produit WHERE reference=".$_GET['reference']."";
		$res=mysqli_query($basi,$query);

		while($prod=mysqli_fetch_assoc($res)){
	
		echo '
			<div class="row">
			<div class="col-lg-6 row1">
				<img src="images/produit/' .$prod['reference'].'.jpg" width="80%" height="100%">
			</div>
			<div class="col-lg-6">
				<h5><br>
					'.$prod['designation'].'
				</h5><br>

				
	<form action="" method="post">
		
		<div class="form-group">
			<label> Référence : </label>
			<input class="form-control" type="text" name="reference" value=" '.$prod['reference'].' " readonly>
		</div>

		<div class="form-group">
			<label> Qunatité : </label>
			<input class="form-control" type="number" name="quantite"  value="1" min="1">
		</div> 

		<div class="form-group">
			<label> Prix : '.$prod['prix'].' DHs </label>	
		</div> 


		<div class="form-group"></div>
			<input type="submit" name="ajouter_au_panier" class="btn btn-primary" value="Ajouter au panier">
	
	</form>
			</div>
			</div>		
		';
	}

	if(isset($_POST['ajouter_au_panier'])) {

		$reference = $_POST['reference'];
		$quantite = $_POST['quantite'];
		session_start();
		
		if(!isset($_SESSION['id'])) {
			header('Location:form/index.php?error=you should log in first');
		}

		$_SESSION['panier'][$reference] = $quantite;
		//header('Location:panier.php');

	}


	mysqli_close($basi);
	
?>	
		
		
	</div>

</section>

<a href="index.php"> <input type="submit" value="Retour" class="btn btn-success" style="margin-left: 1130px;
		margin-bottom: 30px; padding-left: 25px; padding-right: 25px;"> </a>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
</body>
</html>