<!DOCTYPE html>
<html>
<head>
<title> PAGE ADMIN </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style_admin.css">
</head>
<body>
	<?php
		session_start();
		if(!isset($_SESSION['id']) || $_SESSION['admin'] != 1) {
			header("Location:../index.php");
		}
	?>
	

<div class="container main" id="produit">

	<h2 class="text-center"> Les produits </h2>
	

<form method="post" action="" enctype="multipart/form-data">
		<div class="row">
		
		<div class="form-group col-md-6"> 
			<input type="text" class="form-control" name="reference" placeholder="Référence">
		</div>

		<div class="form-group col-md-6">
			<input type="text" class="form-control" name="prix" placeholder="Prix">
		</div>
		</div>
		

		<div class="row">
		
		<div class="form-group col-md-6"> 
			<input type="text" class="form-control" name="designation" placeholder="Désignation">
		</div>

		<div class="form-group col-md-6">
			<input type="text" class="form-control" name="categorie" placeholder=" Catégorie">
		</div>
		</div>

		
		<input type="submit" value="Ajouter" class="btn btn-success" name="ajouter" style="margin-left: 393px; margin-right: 15px;">
		<input type="submit" value="Modifier" class="btn btn-success" name="modifier" style=" margin-right: 15px;">
		<input type="submit" value="Supprimer" class="btn btn-success" name="supprimer">

		</form>
	</div>

<pre>
		
	</pre>


<div class="container main" id="client">

	<h2 class="text-center"> Les clients </h2>
	
<form method="post" action="" enctype="multipart/form-data">
		
		<div class="row">
		
		<div class="form-group col-md-6"> 
			<input type="text" class="form-control" name="id" placeholder="ID">
		</div>

		<div class="form-group col-md-6">
			<input type="text" class="form-control" name="admin" placeholder="Admin">
		</div>
		</div>
		

		<div class="row">
		
		<div class="form-group col-md-6"> 
			<input type="text" class="form-control" name="prenom" placeholder="Prénom">
		</div>

		<div class="form-group col-md-6">
			<input type="text" class="form-control" name="nom" placeholder=" Nom de famille">
		</div>
		</div>

		<div class="row">
		
		<div class="form-group col-md-6"> 
			<input type="password" class="form-control" name="mot_de_passe" placeholder="Mot de passe">
		</div>

		<div class="form-group col-md-6">
			<input type="email" class="form-control" name="email" placeholder=" Exemple : aitelcaid*****@gmail.com">
		</div>
		</div>

		
		<input type="submit" value="Ajouter" class="btn btn-success" name="ajouter_client" style="margin-left: 393px; margin-right: 15px;">
		<input type="submit" value="Modifier" class="btn btn-success" name="modifier_client" style=" margin-right: 15px;">
		<input type="submit" value="Supprimer" class="btn btn-success" name="supprimer_client">

</form>
</div>

<a href=".."> <input type="submit" value="Retour" class="btn btn-success" style="margin-left: 170px; margin-bottom: 30px;
padding-left: 15px; padding-right: 15px;"> </a>


<!-- ajouter un produit -->

<?php
$basi = mysqli_connect('localhost','root','root','gestionclients');

if(isset($_POST["ajouter"])){
	$reference= $_POST["reference"];
	$prix= $_POST["prix"];
	$designation= $_POST["designation"];
	$categorie= $_POST["categorie"];


	

	if ($basi){
	
		$sql = "INSERT INTO produit VALUES ('$reference','$prix','$designation','$categorie')";

			mysqli_query ($basi,$sql) or die ('Erreur SQL !'.$sql.'<br/>'.mysqli_error($basi));

			mysqli_close($basi);
	}
}

?>

<!-- modifier un produit -->

<?php

if(isset($_POST["modifier"])){
	$reference= $_POST["reference"];
	$prix= $_POST["prix"];
	$designation= $_POST["designation"];
	$categorie= $_POST["categorie"];

	$basi = mysqli_connect('localhost','root','root','gestionclients');

if ($basi){
	
		$sql = " UPDATE produit SET  prix='$prix', designation='$designation', categorie='$categorie' WHERE reference='$reference' ";

			mysqli_query ($basi,$sql) or die ('Erreur SQL !'.$sql.'<br/>'.mysqli_error($basi));

			mysqli_close($basi);
	}
}
	

?>

<!-- supprimer un produit -->

<?php

if(isset($_POST["supprimer"])){
	$reference= $_POST["reference"];
	$prix= $_POST["prix"];
	$designation= $_POST["designation"];
	$categorie= $_POST["categorie"];

$basi = mysqli_connect('localhost','root','root','gestionclients');

if ($basi){
	
	$sql = "DELETE FROM produit WHERE reference='$reference' ";

		mysqli_query ($basi,$sql) or die ('Erreur SQL !'.$sql.'<br/>'.mysqli_error($basi));

		mysqli_close($basi);
}
}

?>


<!-- ajouter client -->

<?php

if(isset($_POST["ajouter_client"])){
	$id= $_POST["id"];
	$admin= $_POST["admin"];
	$prenom= $_POST["prenom"];
	$nom= $_POST["nom"];
	$mot_de_passe= $_POST["mot_de_passe"];
	$email= $_POST["email"];

	$basi = mysqli_connect('localhost','root','root','gestionclients');

	if ($basi){
		
		$sql = "INSERT INTO client (id,admin,prenom,nom,mot_de_passe,email)VALUES ('$id','$admin','$prenom','$nom','$mot_de_passe','$email')";

			mysqli_query ($basi,$sql) or die ('Erreur SQL !'.$sql.'<br/>'.mysqli_error($basi));

			mysqli_close($basi);
	}
}

?>

<!-- modifier client -->

<?php

if(isset($_POST["modifier_client"])){
	$id= $_POST["id"];
	$admin= $_POST["admin"];
	$prenom= $_POST["prenom"];
	$nom= $_POST["nom"];
	$mot_de_passe= $_POST["mot_de_passe"];
	$email= $_POST["email"];

	$basi = mysqli_connect('localhost','root','root','gestionclients');

if ($basi){
	
		$sql = " UPDATE client SET admin='$admin', prenom='$prenom', nom='$nom', mot_de_passe='$mot_de_passe', email='$email' WHERE id='$id' ";

			mysqli_query ($basi,$sql) or die ('Erreur SQL !'.$sql.'<br/>'.mysqli_error($basi));

			mysqli_close($basi);
	}
}

?>

<!-- supprimer client -->

<?php

if(isset($_POST["supprimer_client"])){
$id= $_POST["id"];
	$admin= $_POST["admin"];
	$prenom= $_POST["prenom"];
	$nom= $_POST["nom"];
	$mot_de_passe= $_POST["mot_de_passe"];
	$email= $_POST["email"];

	$basi = mysqli_connect('localhost','root','root','gestionclients');

if ($basi){
	
	$sql = "DELETE FROM client WHERE id='$id' ";

		mysqli_query ($basi,$sql) or die ('Erreur SQL !'.$sql.'<br/>'.mysqli_error($basi));

		mysqli_close($basi);
}
}
?>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html> 