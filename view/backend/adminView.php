<?php $title = 'Mon blog'; ?> 



<?php ob_start(); ?>

<div class="container">



<h1>Billet simple pour l'Alaska</h1>
<p>Derniers articles du blog :</p>

           <p> <a href="./index.php?action=formAddPost">Ajouter</a> </p>

<?php while ($data = $posts->fetch()):?>
    <div >
        
        <h3>
          <!--    <?= htmlspecialchars($data['title']) ?> --> 

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

<?php $content = ob_get_clean(); ?>

      
<?php require('view/frontend/template.php'); ?>
<?php require('view/frontend/footer.php'); ?>




<script src="public/tinymce/tinymce.min.js"></script>

<script>tinymce.init({        

 selector:'#content'
  });</script>


