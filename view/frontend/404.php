<?php $title = 'Mon blog'; ?> 
<?php ob_start(); ?>


<!-- Start Sample Area -->
      <section class="sample-text-area">
        <div class="container">
   
          <p class="sample-text">

            <h3 class="mb-30">A propos</h3>

            Erreur 404


          </p>       
         
               
        </div>
         

     
      </section>
      <!-- End Sample Area -->


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
<?php require('footer.php'); ?>