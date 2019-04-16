<?php //$title = 'Mon blog'; ?> 
<?php ob_start(); ?>

<section class="sample-text-area">
<div class="container">

    <br />
    <br />
    <br />
    <br />

    <form action="index.php?action=signing" method="post">
        <p>
        <div class="col-md-4 mt-sm-30">
          <input type="text" name="identifiant" id="identifiant" placeholder="identifiant" onfocus="this.placeholder = ''" onblur="this.placeholder = 'identifiant'" required class="single-input"/>
        </div>     
        <br />
        <div class="col-md-4">
          <input type="password" name="pass" id="pass" placeholder="Mot de passe" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mot de passe'" required class="single-input"/>
        </div>
        <br />
        <div class="col-md-4">
          <input type="submit" value="Valider" class="genric-btn primary-border e-large"/>
        </div>
        </p>
    </form>

    <br />
    <br />
    <br />
    <br />


</div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
<?php require('footer.php'); ?>
