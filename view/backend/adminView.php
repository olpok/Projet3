<!--- creation  header--->
<?php ob_start(); ?>
<?php require('view/frontend/headerPage.php');?>
<?php $header = ob_get_clean(); ?>
<!--- end header--->



<?php ob_start(); ?>

<section class="sample-text-area">
<div class="container">


  <h1>Billet simple pour l'Alaska</h1>
  <p>Derniers articles du blog :</p>


  <?php while ($data = $posts->fetch()):?>

      <div >
        
          <h3> 
              <a href="./index.php?action=editPost&id=<?= $data['id'] ?>"> <?= htmlspecialchars($data['title']) ?>
              <em>le <?= $data['creation_date_fr'] ?></em></a>
          </h3>
   
          <p>
              <?= $data['content'] ?>
              <p> <a href="./index.php?action=deleteP&id=<?= $data['id'] ?>">Supprimer</a> </p>
          </p>

      </div>

  <?php endwhile;?>
  <?php $posts->closeCursor(); ?>


</div>
</section>

<?php $content = ob_get_clean(); ?>     
<?php require('view/frontend/template.php'); ?>
<?php require('view/frontend/footer.php'); ?>