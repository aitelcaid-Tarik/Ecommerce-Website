 <!DOCTYPE html>
<html>

<head>


	<title> Let's go </title>
	<meta charset="utf-8">
	<meta name="Keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/font-awesome-4.0.0/css/font-awesome.css">
	
	<link rel="stylesheet" href="style.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Roboto:900" rel="stylesheet"> 


<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<link rel="stylesheet"
	href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">


<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	

	</head>

<body>

<!-- navbar -->


	<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
		<div class="container">
				<a class="navbar-brand classft" href="index.php">
		  Let's go
		</a>

		<button class="navbar-toggler" type="button"
		toggle="collapse" data-target="#cnav">
			<span class="navbar-toggler-icon
		">
			</span>

		</button>

		<div id="cnav" class="collapse navbar-collapse">
			<ul class="navbar-nav ml-auto ulmarg">

				<li class="nav-item "> 
					<a class="n nav-link " href="#homme">
						<i class="fas fa-male spi"></i> HOMME
					</a>
				</li>

				<li class="nav-item"> 
					<a class="n nav-link" href="#femme">
						<i class="fas fa-female"></i>  FEMME </a>
				</li>

				<li class="nav-item"> 
					<a class="n nav-link" href="#enfant">
						<i class="fas fa-child"></i>  ENFANT </a>
				</li>

				<li class="nav-item"> 
					<a class="n nav-link" href="#des_conseils">
					<i class="fas fa-bell"></i>  DES CONSEILS </a>
				</li>

				<li class="nav-item"> 
					<a class="n nav-link" href="#services">
						<i class="fas fa-cogs"></i>  SERVICES </a>
				</li>
				
				<li class="nav-item"> 
					<a class="n nav-link" href="form/index.php">
					<i class="fas fa-user"></i>  MON COMPTE </a>
				</li>

				<li class="nav-item"> 
					<a class="n nav-link" href="panier.php">
					<i class="fas fa-cart-arrow-down"></i>  MON PANIER</a>
				</li>

				<li class="nav-item"> 
					<a class="n nav-link" href="form/logout.php">
					<i class="fas fa-sign-out-alt"></i>  LOG OUT</a>
				</li>

			</ul>

		</div>
	</div>

	</nav>
<!-- end navbar -->


<!-- start slider -->

<section id="slider" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#slider" data-slide-to="0" class="active" >
			</li>
			
			<li data-target="#slider" data-slide-to="1">
			</li>
			
			<li data-target="#slider" data-slide-to="2">
			</li>
			
			<li data-target="#slider" data-slide-to="3">
			</li>
			
			<li data-target="#slider" data-slide-to="4">
			</li>
		</ul>

		<div class="carousel-inner">

			<div class="carousel-item active">
				<img src="images/slide/slide1.jpg" alt="slide1"
				width="100%" height="660 px">
				<div class="carousel-caption">
				</div>
				</div>
			
			<div class="carousel-item  ">
				<img src="images/slide/slide2.jpeg" alt="slide2"
				width="100%" height="660px">
				<div class="carousel-caption">
				</div>
				</div>
			
			<div class="carousel-item ">
				<img src="images/slide/slide3.jpeg" alt="slide3"
				width="100%" height="660px">
				<div class="carousel-caption">
				</div>
				</div>

			<div class="carousel-item ">
				<img src="images/slide/slide4.jpeg" alt="slide4"
				width="100%" height="660px">
				<div class="carousel-caption">
				</div>
				</div>

			<div class="carousel-item ">
				<img src="images/slide/slide5.jpg" alt="slide5"
				width="100%" height="660px">
				<div class="carousel-caption">
				</div>
				</div>

	</div>

	<a class="carousel-control-prev" href="#slider" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>

	<a class="carousel-control-next" href="#slider" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>

	</section>

	<!-- end of slider section -->

	<!-- start homme -->
	
	<section id="homme">
	<div class="space"></div>
	<div class="space"></div>

		<h2 class="text-center font-weight-bold hspace"> HOMME </h2>
		<hr class="hr1">
		<h4 class="text-center "><b> Le sac à dos de randonnée :</b>

			<p class=" small text-center p1">Placer les équipements les plus lourds au milieu, au plus près du dos, pour équilibrer le poids du sac en accord avec ton propre poids
			</p>
		</h4>
		<div class="space"></div>
		
<div class="container1">

	
<?php
	
		$basi = mysqli_connect('localhost','root','root','gestionclients');
		$res=mysqli_query($basi,"SELECT * FROM produit WHERE categorie='sac_a_dos_homme' ");
		
	while($prod=mysqli_fetch_assoc($res)){
	
		echo '

			<a href="produit.php?reference='.$prod['reference'].'">
			<div class="box">

			<div class="imgBox">
				<img src="images/produit/' .$prod['reference']. '.jpg">
			</div>

			<div class="details">
			
			<div class="content">
					<h2> Prix '.$prod['prix'].' DHs </h2>
					<p> '.$prod['designation'].' </p>	
			</div>
			</div>
			</div>
			</a>
	';
	}
	mysqli_close($basi);
	
?>

	
</div>

<div class="space"></div>
<div class="space"></div>


<h4 class="text-center font-weight-bold hspace2"> Les vêtements de randonnée :
			<hr class="hr2">
			<p class=" small text-center p1"> 
				En montagne, les conditions sont souvent changeantes et vous alternez période d’effort et de phases statiques. Il faut donc respecter quelques règles : le concept des 3 couches est un principe de base.
			</p>
			<p class=" small text-center"> vêtement pour le haut du corps : 
			</p>
			<hr class="hr2">
		 </h4>
<div class="space"></div>

	<div class="container1">


<?php
	

		$basi = mysqli_connect('localhost','root','root','gestionclients');
		$res=mysqli_query($basi,"SELECT * FROM produit WHERE categorie='vetements_pour_la_randonnee_haut_homme' ");
		
	while($prod=mysqli_fetch_assoc($res)){
	
		echo '
			<a href="produit.php?reference='.$prod['reference'].'">
			<div class="box">

			<div class="imgBox">
				<img src="images/produit/' .$prod['reference']. '.jpg">
			</div>

			<div class="details">
			
			<div class="content">
					<h2> Prix '.$prod['prix'].' DHs </h2>
					<p> '.$prod['designation'].' </p>	
			</div>
			</div>
			</div>
			</a>
	';
	}
	mysqli_close($basi);
	
?>
</div>

		<h4 class="text-center"><p class=" small text-center hspace"> 
			vêtement pour le bas du corps :</p> 
			<hr class="hr2">
			</h4>
			
<div class="container1">


<?php
	

		$basi = mysqli_connect('localhost','root','root','gestionclients');
		$res=mysqli_query($basi,"SELECT * FROM produit WHERE categorie='vetements_pour_la_randonnee_bas_homme' ");
		
	while($prod=mysqli_fetch_assoc($res)){
	
		echo '
			<a href="produit.php?reference='.$prod['reference'].'">
			<div class="box">

			<div class="imgBox">
				<img src="images/produit/' .$prod['reference']. '.jpg">
			</div>

			<div class="details">
			
			<div class="content">
					<h2> Prix '.$prod['prix'].' DHs </h2>
					<p> '.$prod['designation'].' </p>	
			</div>
			</div>
			</div>
			</a>
	';
	}
	mysqli_close($basi);
	
?>

</div>
		

	<h4 class="text-center hspace"><b> Chaussures de randonnées :</b>
					<hr class="hr2">
			<p class=" small text-center p1">Les chaussures peuvent être ton meilleur ami ou ton pire ennemi en randonnée
			</p>
		</h4>
		<div class="space"></div>
		<div class="container1">

<?php
	

		$basi = mysqli_connect('localhost','root','root','gestionclients');
		$res=mysqli_query($basi,"SELECT * FROM produit WHERE categorie='chaussures_de_randonnees_homme' ");
		
	while($prod=mysqli_fetch_assoc($res)){
	
		echo '
			<a href="produit.php?reference='.$prod['reference'].'">
			<div class="box">

			<div class="imgBox">
				<img src="images/produit/' .$prod['reference']. '.jpg">
			</div>

			<div class="details">
			
			<div class="content">
					<h2> Prix '.$prod['prix'].' DHs </h2>
					<p> '.$prod['designation'].' </p>	
			</div>
			</div>
			</div>
			</a>
	';
	}
	mysqli_close($basi);
	
?>

</div>

		
		<div class="space"></div>

	</section>

<!-- end homme -- >


<!-- start femme -->
	
	<section id="femme">
	<div class="space"></div>
	<div class="space"></div>

		<h2 class="text-center font-weight-bold hspace"> FEMME </h2>
		<hr class="hr1">
		<h4 class="text-center "><b> Le sac à dos de randonnée : </b>

			<p class=" small text-center p1">Placer les équipements les plus lourds au milieu, au plus près du dos, pour équilibrer le poids du sac en accord avec ton propre poids
			</p>
		</h4>
		<div class="space"></div>
		
<div class="container1">


<?php
	

		$basi = mysqli_connect('localhost','root','root','gestionclients');
		$res=mysqli_query($basi,"SELECT * FROM produit WHERE categorie='sac_a_dos_femme' ");
		
	while($prod=mysqli_fetch_assoc($res)){
	
		echo '
			<a href="produit.php?reference='.$prod['reference'].'">
			<div class="box">

			<div class="imgBox">
				<img src="images/produit/' .$prod['reference']. '.jpg">
			</div>

			<div class="details">
			
			<div class="content">
					<h2> Prix '.$prod['prix'].' DHs </h2>
					<p> '.$prod['designation'].' </p>	
			</div>
			</div>
			</div>
			</a>
	';
	}
	mysqli_close($basi);
	
?>


</div>


<h4 class="text-center font-weight-bold hspace2"> Les vêtements de randonnée :
			<hr class="hr2">
			<p class=" small text-center p1"> 
				En montagne, les conditions sont souvent changeantes et vous alternez période d’effort et de phases statiques. Il faut donc respecter quelques règles : le concept des 3 couches est un principe de base. 
			</p>
			<p class=" small text-center"> vêtement pour le haut du corps : 
			</p>
			<hr class="hr2">
		 </h4>
<div class="space"></div>

	<div class="container1">

<?php
	

		$basi = mysqli_connect('localhost','root','root','gestionclients');
		$res=mysqli_query($basi,"SELECT * FROM produit WHERE categorie='vetements_pour_la_randonnee_haut_femme' ");
		
	while($prod=mysqli_fetch_assoc($res)){
	
		echo '
			<a href="produit.php?reference='.$prod['reference'].'">
			<div class="box">

			<div class="imgBox">
				<img src="images/produit/' .$prod['reference']. '.jpg">
			</div>

			<div class="details">
			
			<div class="content">
					<h2> Prix '.$prod['prix'].' DHs </h2>
					<p> '.$prod['designation'].' </p>	
			</div>
			</div>
			</div>
			</a>
	';
	}
	mysqli_close($basi);
	
?>


</div>

		<h4 class="text-center"><p class=" small text-center hspace"> 
			vêtement pour le bas du corps :</p> 
			<hr class="hr2">
			</h4>
			
<div class="container1">


<?php
	

		$basi= mysqli_connect('localhost','root','root','gestionclients');
		$res=mysqli_query($basi,"SELECT * FROM produit WHERE categorie='vetements_pour_la_randonnee_bas_femme' ");
		
	while($prod=mysqli_fetch_assoc($res)){
	
		echo '
			<a href="produit.php?reference='.$prod['reference'].'">
			<div class="box">

			<div class="imgBox">
				<img src="images/produit/' .$prod['reference']. '.jpg">
			</div>

			<div class="details">
			
			<div class="content">
					<h2> Prix '.$prod['prix'].' DHs </h2>
					<p> '.$prod['designation'].' </p>	
			</div>
			</div>
			</div>
			</a>
	';
	}
	mysqli_close($basi);
	
?>


</div>
		

	<h4 class="text-center hspace"><b> Chaussures de randonnées : </b>
					<hr class="hr2">
			<p class=" small text-center p1">Les chaussures peuvent être ton meilleur ami ou ton pire ennemi en randonnée
			</p>
		</h4>
		<div class="space"></div>
		<div class="container1">

	<?php
	

		$basi = mysqli_connect('localhost','root','root','gestionclients');
		$res=mysqli_query($basi,"SELECT * FROM produit WHERE categorie='chaussures_de_randonnees_femme' ");
		
	while($prod=mysqli_fetch_assoc($res)){
	
		echo '
			<a href="produit.php?reference='.$prod['reference'].'">
			<div class="box">

			<div class="imgBox">
				<img src="images/produit/' .$prod['reference']. '.jpg">
			</div>

			<div class="details">
			
			<div class="content">
					<h2> Prix '.$prod['prix'].' DHs </h2>
					<p> '.$prod['designation'].' </p>	
			</div>
			</div>
			</div>
			</a>
	';
	}
	mysqli_close($basi);
	
?>


	

</div>
	<div class="space"></div>

	</section>

<!-- end femme -- >


<!-- start enfant -->
	
	<section id="enfant">
	<div class="space"></div>
	<div class="space"></div>

		<h2 class="text-center font-weight-bold hspace"> ENFANT </h2>
		<hr class="hr1">
		<h4 class="text-center "><b> Le sac à dos de randonnée : </b>

			<p class=" small text-center p1">Placer les équipements les plus lourds au milieu, au plus près du dos, pour équilibrer le poids du sac en accord avec ton propre poids
			</p>
		</h4>
		<div class="space"></div>
		
<div class="container1">

	<?php
	

		$basi = mysqli_connect('localhost','root','root','gestionclients');
		$res=mysqli_query($basi,"SELECT * FROM produit WHERE categorie='sac_a_dos_enfant' ");
		
	while($prod=mysqli_fetch_assoc($res)){
	
		echo '
			<a href="produit.php?reference='.$prod['reference'].'">
			<div class="box">

			<div class="imgBox">
				<img src="images/produit/' .$prod['reference']. '.jpg">
			</div>

			<div class="details">
			
			<div class="content">
					<h2> Prix '.$prod['prix'].' DHs </h2>
					<p> '.$prod['designation'].' </p>	
			</div>
			</div>
			</div>
			</a>
	';
	}
	mysqli_close($basi);
	
?>


</div>


<h4 class="text-center font-weight-bold hspace2"> Les vêtements de randonnée :
			<hr class="hr2">
			<p class=" small text-center p1"> 
				En montagne, les conditions sont souvent changeantes et vous alternez période d’effort et de phases statiques. Il faut donc respecter quelques règles : le concept des 3 couches est un principe de base.
			</p>
			<p class=" small text-center"> vêtement pour le haut du corps : 
			</p>
			<hr class="hr2">
		 </h4>
<div class="space"></div>

	<div class="container1">

<?php
	

		$basi = mysqli_connect('localhost','root','root','gestionclients');
		$res=mysqli_query($basi,"SELECT * FROM produit WHERE categorie='vetements_pour_la_randonnee_haut_enfant' ");
		
	while($prod=mysqli_fetch_assoc($res)){
	
		echo '
			<a href="produit.php?reference='.$prod['reference'].'">
			<div class="box">

			<div class="imgBox">
				<img src="images/produit/' .$prod['reference']. '.jpg">
			</div>

			<div class="details">
			
			<div class="content">
					<h2> Prix '.$prod['prix'].' DHs </h2>
					<p> '.$prod['designation'].' </p>	
			</div>
			</div>
			</div>
			</a>
	';
	}
	mysqli_close($basi);
	
?>

</div>

		<h4 class="text-center"><p class=" small text-center hspace"> 
			vêtement pour le bas du corps :</p> 
			<hr class="hr2">
			</h4>
			
<div class="container1">

	<?php
	

		$basi = mysqli_connect('localhost','root','root','gestionclients');
		$res=mysqli_query($basi,"SELECT * FROM produit WHERE categorie='vetements_pour_la_randonnee_bas_enfant' ");
		
	while($prod=mysqli_fetch_assoc($res)){
	
		echo '
			<a href="produit.php?reference='.$prod['reference'].'">
			<div class="box">

			<div class="imgBox">
				<img src="images/produit/' .$prod['reference']. '.jpg">
			</div>

			<div class="details">
			
			<div class="content">
					<h2> Prix '.$prod['prix'].' DHs </h2>
					<p> '.$prod['designation'].' </p>	
			</div>
			</div>
			</div>
			</a>
	';
	}
	mysqli_close($basi);
	
?>

		

</div>
		

	<h4 class="text-center hspace"><b> Chaussures de randonnées : </b>
					<hr class="hr2">
			<p class=" small text-center p1">Les chaussures peuvent être ton meilleur ami ou ton pire ennemi en randonnée
			</p>
		</h4>
		<div class="space"></div>
		<div class="container1">
<?php
	

		$basi = mysqli_connect('localhost','root','root','gestionclients');
		$res=mysqli_query($basi,"SELECT * FROM produit WHERE categorie='chaussures_de_randonnees_enfant' ");
		
	while($prod=mysqli_fetch_assoc($res)){
	
		echo '
			<a href="produit.php?reference='.$prod['reference'].'">
			<div class="box">

			<div class="imgBox">
				<img src="images/produit/' .$prod['reference']. '.jpg">
			</div>

			<div class="details">
			
			<div class="content">
					<h2> Prix '.$prod['prix'].' DHs </h2>
					<p> '.$prod['designation'].' </p>	
			</div>
			</div>
			</div>
			</a>
	';
	}
	mysqli_close($basi);
	
?>

</div>

		
		<div class="space"></div>

	</section>

<!-- end enfant -- >


<!-- start des conseils -->

<section id="des_conseils">
	
	<div class="space"></div>
	<div class="space"></div>

		<h2 class="text-center font-weight-bold hspace"> DES CONSEILS </h2>
		<hr class="hr1">	
		
		<h3 class="text-center "> Astuces des expertes : Détails à considérer avant l’achat d’un sac à dos
		</h3>
		<hr class="hr3">
		<div class="container">
		<div class="row">
		<div class="col-lg-6">
			<img src="images/conseils/1.jpg" alt=""
			width="100%" height="100%">
		</div>
		<div class="col-lg-6">
			<h5 class="hsize">
		
			Avant d’opter pour un sac de randonnée, s’assurer qu’il contienne :<br><br><br>

    1. Une poche à eau ou un rangement extérieur pour sa bouteille d’eau : pour ne pas devoir déposer son<br><br><br>
    
    2. Des compartiments de rangements qui facilitent l’accès aux accessoires les plus utilisé : GPS, carte, appareil photo, couteau, etc…<br><br><br>
    
    3. Des renforts pour le dos et sangles ventrales : pour assurer un minimum de maintien et d’équilibre<br><br><br>
    
    4. Système de ventilation adéquat : pour évacuer la transpiration du dos et au niveau des épaules.
		
		</h5>
		</div>
		</div>
	</div>
		
		
		<h3 class="text-center hspace"> Comment s’habiller en randonnée 
		</h3>
		<hr class="hr3">
		<div class="container">
		<div class="row">
		<div class="col-lg-6">
			<img src="images/conseils/2.jpg" alt=""
			width="100%" height="100%">
		</div>
		<div class="col-lg-6">
			<h5>
		
		
		En randonnée il est conseillé de s’habiller en système de 3 couches :<br><br><br>

    	1. Une couche respirante : composée de fibres « hydrophobes », c’est la couche qui permet de rester au sec en évacuant 			votre transpiration vers les autres couches.<br><br><br>
    	2. Une couche isolante : celle-ci isole du froid. Le choix de cette deuxième couche (pulls, doudounes, polaires) se fait 		en fonction de la température extérieure mais aussi de l’intensité de l’effort.<br><br><br>
    	3. Une couche protectrice : c’est le rôle du coupe-vent ou de l’imperméable pour te protéger des éléments extérieurs.<br>		<br><br><br>

		Conseil important : Évite les vêtements en coton pour te préserver de l’hypothermie. Une fois mouillés, les vêtements en 		coton ne respirent plus peuvent se refroidir brusquement à l’arrêt de l’effort.

		</h5>
		</div>
		</div>



	</div>
		
		
		<h3 class="text-center hspace"> Chaussures de randonnées : Comment les choisir 
		</h3>
		<hr class="hr3">
		<div class="container">
		<div class="row">
		<div class="col-lg-6">
			<img src="images/conseils/3.jpg" alt=""
			width="100%" height="100%">
		</div>
		<div class="col-lg-6">
			<h5 class="hsize">


		1. Tenir compte du terrain et de la durée de la randonnée : Un terrain très caillouteux ou bien glissant nécessiterait des 			chaussures montantes avec grands crampons. Une randonnée en bordure de lac ou dans une région pluvieuses 				 demanderait des chaussures de randonnées imperméables.<br><br><br>

		2. Une pointure de plus, c’est essentiel : Avec de la marche surtout en altitude les pieds ont tendance à gonfler. Il faut 			donc prévoir une pointure de plus. Certains auraient besoin de deux pointures selon la nature du corps et des 			 pieds, mais pour commencer une pointure est une bonne mesure de sécurité. Il faut prendre également en 				 considération le volume des chaussettes qu’on aurait choisi.<br><br><br>

		3. Bien “roder” ses chaussures de randonnée : Ne jamais partir en randonnée avec des chaussures toutes neuves. C’est un 		 grand risque d’ampoules et d’inconvénients de tout genre : chaussures glissantes, maintient inadéquat, problème 		  de respiration,… Il faut les utiliser souvent pour marcher en ville ou faire un tour de quartier, plusieurs fois!
		</h5>
		</div>
		</div>
	</div>

</section>

<!-- end des conseils-->


<!-- start sercices -->
	<section id="services" class="container">
		<div class="space"></div>
		<div class="space"></div>


		<h2 class="text-center font-weight-bold hspace"> NOS SERVICES </h2>
		<hr class="hr1">
	<div class="row">
		<article class="col-lg-3  text-center">
			<i class="fas fa-cogs"></i>
			<h5><b> ASSISTANCE SAV </b></h5>
			<p class="small">
				Un problème/une question après vente sur votre produit ? Nous vous accompagnons.
			</article>

			<article class="col-lg-3 text-center">
			<i class="fas fa-user"></i>
			<h5><b> COMPTE LET'S GO </b></h5>
			<p class="small">
				avec le compte let's go, entrez dans le sport
			</article>

			<article class="col-lg-3 text-center">
			<i class="fas fa-truck"></i>
			<h5><b> MODES DE LIVRAISON </b></h5>
			<p class="small">
				A domicile, dans un point de livraison, au travail ou gratuitement en magasin.
			</p>
			</article>

			<article class="col-lg-3 text-center">
			<i class="fas fa-tshirt"></i>
			<h5><b> TEST PRODUIT </b></h5>
			<p class="small">
				Et si vous pouviez tester nos produits avant d'acheter ?
			</p>
			</article>


		</div> 
	</section>
	<!--end of services -->

	<!-- start team members -->
<section id="team">
		<h2 class="text-center font-weight-bold"> 
				RENCONTRER L'EQUIPE
		</h2>
		<hr class="hr1">
		
	
		<div class="container ">

			<div class="row dspace">
			<div class="col-lg-9 text-center">
				<img src="images/equipe/1.jpg" height="150"
				width="150">
				<h5><b> Founder / CEO </b></h5>
					<span><b>  AIT ELCAID Tarik   </b></span>
					</p>

			</div>	

			
		</div>
		</div>
</section>
	<!-- end team members -->


	<!-- start contact us -->

<section id="contactez-nous">

		<h2 class="text-center font-weight-bold "> 
			CONTACTEZ NOUS
		</h2>
		<hr class="hr1">
		<p class="text-center">
			Contactez-nous dès à présent, le LET'S GO se fera un plaisir de vous répondre dans les plus brefs délais.
		</p>
	<div class="container">


	<div class="row text-center">
		<div class="col-lg-4 text-center">
			<i class="fas fa-map-marker-alt"></i>
			<p>  Hay Karima SALE، SALE 11020 </p>
		</div>


		<div class="col-lg-4 text-center">
			<i class="far fa-envelope"></i>
			<p>  aitelcaid.tarik@gmail.com </p>
		</div>


		<div class="col-lg-4 text-center">
			<i class="fas fa-phone"></i>
			<p> +212 6 30 96 36 36 </p>
		</div>

	</div>

	<form action="" method="post">
		<div class="row">
		<div class="form-group col-lg-6">
			<input class="form-control" type="text" placeholder="Name">
		</div>
		<div class="form-group col-lg-6">
			<input class="form-control" type="email" placeholder="Email">
		</div>
		</div>
		<div class="form-group">
			<textarea class="form-control" rows="3" placeholder="message"></textarea> 
		
		</div>

		<div class="form-group">
			<button class="btn btn-success" type="submit" >
				Envoyer
			</button>
		</div>
	</form>
	</div>
	</section>
	<div class="clearfix"></div>
	<!--end contact us-->

<!-- start footer -->
	<footer class="text-center">
		
		<a href="https://www.instagram.com/tarik_ait_elcaid/">
			<i class="fab fa-instagram"></i>
		</a>

		<a href="https://www.facebook.com/tarik.aitelcaid">
		<i class="fab fa-facebook-f"></i>
		</a>

		<a href="https://www.youtube.com/">
		<i class="fab fa-youtube"></i>
		</a>

		<i class="fab fa-twitter"></i>
		<i class="fab fa-pinterest"></i>
		
	</footer>
	<!-- end footer -->


	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>

</body>
</html>