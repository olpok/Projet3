  <!-- Start Header Area -->
            <header class="default-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                          <a class="navbar-brand" href="index.php">
                            <img src="public/img/logo.png" alt="">
                          </a>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>

                          <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                            <ul class="navbar-nav scrollable-menu">

                              <li><a href="index.php?action=home">Home</a></li>
                                <?php if(isset($_SESSION['authentification']) && $_SESSION['role'] = 'admin') : ?>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="index.php?action=login" id="navbardrop" data-toggle="dropdown">Admin</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="index.php?action=login">Articles</a> 
                                            <a class="dropdown-item" href="index.php?action=formAddPost">Ajouter article</a>
                                            <a class="dropdown-item" href="index.php?action=listSignaledComments">Commentaires</a>
                                            <a class="dropdown-item" href="index.php?action=logout">Déconnexion</a>
                                        </div>
                                    </li>
                                <?php endif;?>

                                <li><a href="index.php?action=aPropos">A propos</a></li>
                                <li><a href="index.php?action=contact">Contact</a></li>
                                                         
                            </ul>
                          </div>                        
                    </div>
                </nav>
            </header>



            <!-- Start top-section Area -->
            <section class="top-section-area section-gap">
                <div class="container">
                    <div class="row justify-content-between align-items-center d-flex">
                        <div class="col-lg-8 top-left">
                            <h1 class="text-white mb-20">Billet simple pour l'Alaska</h1>
                        </div>
                    </div>
                </div>  
            </section>
            <!-- End top-section Area -->

<!-- Start banner Area -->