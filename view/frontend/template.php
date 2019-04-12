<!DOCTYPE html>
<html>

        

<html lang="zxx" class="no-js"> 
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="public/img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">

		<title>Projet 3</title>

        <!--  <title><?= $title ?></title>
        <?php $title = 'Blog de Jean Forteroche'; ?> -->
        

     <!--    <link href="public/css/style.css" rel="stylesheet" /> -->


	

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="public/css/linearicons.css">
		<link rel="stylesheet" href="public/css/font-awesome.min.css">
		<link rel="stylesheet" href="public/css/bootstrap.css">
		<link rel="stylesheet" href="public/css/owl.carousel.css">
		<link rel="stylesheet" href="public/css/main.css">

	</head>



        
    <body>

			<!-- Start banner Area -->
			<section class="generic-banner relative">
			<!-- Start Header Area -->
			<header class="default-header">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						  <a class="navbar-brand" href="index.html">
						  	<img src="public/img/logo.png" alt="">
						  </a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>

						  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
						    <ul class="navbar-nav">
								<li><a href="index.php?action=home">Home</a></li>
								<?php if(isset($_SESSION['authentification']) && $_SESSION['role'] = 'admin') : ?>
									<li class="dropdown">
										<a href="index.php?action=login">Admin</a>
										<div class="dropdown-menu">
									    	<!--  <a class="dropdown-item" href="index.php?action=login">Articles</a> --> 
									        <a class="dropdown-item" href="index.php?action=formAddPost">Ajouter article</a>
									        <a class="dropdown-item" href="index.php?action=listSignaledComments">Commentaires</a>
									        <a class="dropdown-item" href="index.php?action=logout">Déconnexion</a>
									    </div>
									</li>
								<?php endif;?>
								 
								<li><a href="index.php?action=aPropos">A propos</a></li>
								<li><a href="index.php?action=contact">Contact</a></li>

								<!-- Dropdown -
							    <li class="dropdown">
							      <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
							        Pages
							      </a>
							      <div class="dropdown-menu">
							        <a class="dropdown-item" href="single.html">Single</a>
							        <a class="dropdown-item" href="search.html">Search</a>
							        <a class="dropdown-item" href="archive.html">Archive</a>
							        <a class="dropdown-item" href="generic.html">Generic</a>
							        <a class="dropdown-item" href="elements.html">Elements</a>
							      </div>-->
							    </li>								
						    </ul>
						  </div>						
					</div>
				</nav>
			</header>
			<!-- End Header Area -->




		<!-- End Header Area 	-->				
				<div class="container">
					<div class="row height align-items-center justify-content-center">
						<div class="col-lg-10">
							<div class="generic-banner-content">
								<h2 class="text-white text-center">Billet simple pour l'Alaska</h2>
								<p class="text-white">It won’t be a bigger problem to find one video game lover in your <br> neighbor. Since the introduction of Virtual Game.</p>
							</div>							
						</div>
					</div>
				</div>
			</section>		
			<!-- End banner Area -->

		 		
			<?php if(isset($_SESSION['flashMessage'])):?>
	            <div style="padding: 10px; border-radius: 10px; border: 1px solid red; background-color: pink; color: blue">
	                <?= $_SESSION['flashMessage'];?>
	                <?php unset($_SESSION['flashMessage']);?>
	            </div>
	        <?php endif;?>


        <?= $content ?>
            
    </body>
</html>

