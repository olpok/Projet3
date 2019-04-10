
<?php $title = 'Blog de Jean Forteroche'; ?>
<?php ob_start();?>

<div class="container">

  
        <h1>Mon super blog !</h1> 
        <p><a href="index.php">Retour à la liste des billets</a></p>

  <h2>Commentaires</h2>

<?php $comment = $comments->fetch() ?>


       <form action="index.php?action=updateC&amp; id=<?= $comment['post_id']?>" method="post">

            <input type="hidden" name="id" value="<?php echo $comment['id'];?>"/>

            <div>
                <label for="author">Auteur</label><br />
                <input type="text" id="author" name="author" value="<?php echo $comment['author'];?>"/>
            </div>
            <div>
                <label for="comment">Commentaire</label><br />
                <textarea id="comment" name="comment"><?= $comment['comment'] ?></textarea>

            </div>
            <div>
                <input type="submit" value="Modifier" />
            </div>
        </form>

<!-- 
<?php  while ($comment = $comments->fetch()):?>

            <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
            <a href="index.php?action=post&id=<?php echo $comment['id']?>">Valider</a>

<?php endwhile;?> -->


</div>

<?php $content = ob_get_clean()?>

<?php require('template.php')?>


<!-- start footer Area -->      
            <footer class="footer-area section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3  col-md-12">
                            <div class="single-footer-widget">
                                <h6>MÉTA</h6>
                                <ul class="footer-nav">
                                    <li><a href="index.php?action=login">Administration</a></li>
                                    <li><a href="index.php?action=logout">Deconnexion</a></li>
                                    <li><a href="#">Mentions legales</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6  col-md-12">
                            <div class="single-footer-widget newsletter">
                                <h6>Newsletter</h6>
                                <p>You can trust us. we only send promo offers, not a single spam.</p>
                                <div id="mc_embed_signup">
                                    <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

                                        <div class="form-group row" style="width: 100%">
                                            <div class="col-lg-8 col-md-12">
                                                <input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                                                <div style="position: absolute; left: -5000px;">
                                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                                </div>
                                            </div> 
                                        
                                            <div class="col-lg-4 col-md-12">
                                                <button class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
                                            </div> 
                                        </div>      
                                        <div class="info"></div>
                                    </form>
                                </div>      
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-12">



                        </div>                      
                    </div>

                    <div class="row footer-bottom d-flex justify-content-between">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="col-lg-8 col-sm-12 footer-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="col-lg-4 col-sm-12 footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End footer Area -->            
