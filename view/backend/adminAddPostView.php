<?php //$title = 'Mon blog'; ?> 



<?php ob_start(); ?>

<div class="container">

    <h2>Billet simple pour l'Alaska</h2> </br> 

        <h3>Ajouter</h3>

        <form action="index.php?action=addPost" method="post">
        <div>
            <label for="title">Titre</label><br />
            <input type="text" id="title" name="title" />
        </div>
        <div>
            <label for="content">Contenu</label><br />        
            <textarea id="content" name="content" rows="40" ></textarea> 
        </div>
        <div>
            <input type="submit" />
        </div>
        </form>


</div>

<?php $content = ob_get_clean(); ?> 
<?php require('view/frontend/template.php'); ?>
<?php require('view/frontend/footer.php'); ?>


<script src="public/tinymce/tinymce.min.js"></script>

<script>tinymce.init({        

 selector:'textarea'
  });</script>