<!--- creation  header--->
<?php ob_start(); ?>
<?php require('headerPage.php');?>
<?php $header = ob_get_clean(); ?>
<!--- end header--->


<?php ob_start(); ?>

<!-- Start Sample Area -->
      <section class="sample-text-area">

        <div class="container">   

            <h3 class="mb-30">Erreur 404</h3>         
               
        </div>
           
      </section>
 <!-- End Sample Area -->

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
<?php require('footer.php'); ?>