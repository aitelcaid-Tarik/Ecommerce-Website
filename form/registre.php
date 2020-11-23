<!DOCTYPE html>
<html>
<head>
<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="style_form.css">
</head>
<body>

<div class="container main" >

	<h2 class="text-center"> Créer Mon Compte </h2>
	
	
		<form method="post" action="" enctype="multipart/form-data">
		<div class="row">
		
		<div class="form-group col-md-6"> 
			<input type="text" class="form-control" name="prenom" placeholder="Prénom">
		</div>

		<div class="form-group col-md-6">
			<input type="text" class="form-control" name="nom" placeholder="Nom de famille">
		</div>
		</div>
		

		<div class="row">
		
		<div class="form-group col-md-6"> 
			<input type="password" class="form-control" name="mot_de_passe" placeholder="Mot de passe">
		</div>

		<div class="form-group col-md-6">
			<input type="password" class="form-control" name="c_mot_de_passe" placeholder="Confirmer votre mot de passe">
		</div>
		</div>

		<div class="row">
		
		<div class="form-group col-md-6"> 
			<input type="file" class="form-control" name="image" >
		</div>

		<div class="form-group col-md-6">
			<input type="email" class="form-control" name="email" placeholder="Exemple : aitelcaid*****@gmail.com">
		</div>
		</div>
		
		<input type="submit" name="valider" value="VALIDER" class="btn btn-success" >

		</div>
</form>

<?php
	
	session_start();

	if(isset($_SESSION['id'])) {
		header("Location:../index.php?error=you are already logged in");
	}
	

	$basi = mysqli_connect('localhost','root','root','gestionclients');

	//prenom - nom - mot_de_passe -c_mot_de_passe - image - email
	
	if(isset($_POST["valider"])){

	$prenom = $_POST['prenom'];	
	$nom = $_POST['nom'];
	$mot_de_passe = $_POST['mot_de_passe'];
	$c_mot_de_passe = $_POST['c_mot_de_passe'];
	$email = $_POST['email'];

	if (!$prenom)  $error['prenom']="SVP insérez votre prénom";

	else if ( strlen($prenom) > 20)  $error['prenom']="trop grand prénom";


	if (!$nom)  $error['nom_de_famille']="SVP insérez votre nom";

	else if (strlen($nom)>20)  $error['nom_de_famille']="trop grand";
	

	if (! $mot_de_passe || ! $c_mot_de_passe)  $error['mot_de_passe']="SVP insérez votre mot de passe et confirmer lui";
	else if ($mot_de_passe != $c_mot_de_passe)  $error['mot_de_passe']="mot de passe invalide";

	else if (strlen($mot_de_passe)>12)  $error['mot_de_passe']="trop grand mot de passe";


	if(!filter_var($email,FILTER_VALIDATE_EMAIL))  $error['email']="SVP insérez votre adresse email";


	if ($_FILES['image']['name']=="")  $error['image']="SVP insérez votre image";



	if (empty($error)){
		$img_name=$_FILES['image']['name'];
		$img_size=$_FILES['image']['size'];
		$img_tmp=['image']['tmp_name'];
		$img_ext=strtolower(end(explode('.', $img_name)));
		$avl=array('jpg','png','jpeg');
		if($img_size>524288) $error['image']="la taille de l'image est très grande";
		else if(!in_array($img_ext,$avl)) $error['image']="extension invalide";
		if (empty($error['$image'])){
			$time=microtime(true)*1000;
			$img=$time. "." .img_ext;
			move_uploaded_file($img_tmp,$img);
		}
	}


	if(empty($error)){
		$sql="INSERT INTO client (prenom,nom,mot_de_passe,image,email) VALUES
		 ('$prenom','$nom','$mot_de_passe','$img','$email')";

		 if(mysqli_query($basi,$sql)) echo "enregistrement complète et votre ID est  ". mysqli_insert_id($basi). "<a href='index.php'>cliquer pour l'entrée </a>";

		 else echo mysqli_error($basi);
	
	}

	else{

	foreach ($error as $e) {
		echo $e. "<br>";
	}
	}

	}

	mysqli_close($basi);

?>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html> 