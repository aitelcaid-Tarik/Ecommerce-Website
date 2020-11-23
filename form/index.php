<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style_form.css">
</head>
<body>

	<div class="container col-md-6 main" >

		<h2 class="text-center"> MON COMPTE LET'S GO </h2>
		
		<form action="" method="post">
			
			<div class="form-group">
				<label> ID </label>
				<input class="form-control" name="id" placeholder="ID">
			</div>

			<div class="form-group">
				<label> Mot de passe </label>
				<input class="form-control" name="mot_de_passe" placeholder="Mot de passe" type="password">
			</div>

			<div class="form-group"></div>
				<input type="submit" name="connecter" class="btn btn-primary" value="CONNECTER">
				<span class="text-danger"> OU <a href="registre.php" class="text-success"> créer un compte </a></span>
		</form>

	</div>
	<?php 
		session_start();

		if(isset($_SESSION['id'])) {
			header("Location:../index.php?error=you are already logged in");
		}

		$basi = mysqli_connect('localhost','root','root','gestionclients');

			if(isset($_POST["connecter"])){
				$id= $_POST["id"];
				$mot_de_passe= $_POST["mot_de_passe"];

				if ($basi){
					
					$sql = "SELECT id, admin FROM `client` WHERE id='$id' AND mot_de_passe='$mot_de_passe'";

					$result=mysqli_query($basi,$sql);

					if($rep = mysqli_fetch_assoc($result)){
						$_SESSION['id'] = $rep['id'];
						$_SESSION['admin'] = $rep['admin'];
						$_SESSION['panier'] = array();
					}

					mysqli_close($basi);

					if(isset($_SESSION['admin'])) {
						$location = ($_SESSION['admin'] == 1) ? "../admin" : "../";
					}
					else {
						$location = "index.php?error=usernotfound";
					}



					header('Location:'.$location);
				}
			}
	?>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html> 