<?php $title = 'Mon blog'; ?> 



<?php ob_start(); ?>

<div class="container">

<a href="index.php?action=logout">Deconnexion</a>



<h1>Billet simple pour l'Alaska</h1>
<p>Derniers billets du blog :</p>


<!-- ... -->
    <div>

<h2>AJOUTER</h2>

<form action="index.php?action=addPost" method="post">
    <div>
        <label for="title">Titre</label><br />
        <input type="text" id="title" name="title" />
    </div>
    <div>
        <label for="content">Contenu</label><br />        
   <!--     <textarea id="content" name="content"></textarea> -->
      <textarea class="single-textarea" id="content" name="content" placeholder="Contenu" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contenu'" required>      
        </textarea> 
    </div>
    <div>
        <input type="submit" />
    </div>
</form>

    </div>
<!-- ... -->



</div>

<?php $content = ob_get_clean(); ?>

      
<?php require('view/frontend/template.php'); ?>
<?php require('view/frontend/footer.php'); ?>




<script src="public/tinymce/tinymce.min.js"></script>

<script>tinymce.init({        

 selector:'textarea'
  });</script>