<!DOCTYPE html>

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

 		<?php $title = 'Projet3';  ?>

       <!--   <title><?= $title ?></title>
       <?php //$title = 'Blog de Jean Forteroche'; ?> -->       

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
    	
    		<?= $header ?>
		 		
				<?php if(isset($_SESSION['flashMessage'])):?>
					<div class="genric-btn danger circle arrow" >            	
	                	<?= $_SESSION['flashMessage'];?>
	                	<?php unset($_SESSION['flashMessage']);?>
	            	</div>
	        	<?php endif;?>

        	<?= $content ?>
            
    </body>
</html>

