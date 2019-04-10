<?php $title = 'Mon blog'; ?> 



<?php ob_start(); ?>

<div class="container">

<a href="index.php?action=logout">Deconnexion</a>



<h1>Billet simple pour l'Alaska</h1>
<p>Derniers articles du blog :</p>

           <p> <a href="./index.php?action=formAddPost">Ajouter</a> </p>

           <!--        <a class="dropdown-item" href="index.php?action=formAddPost">Ajouter article</a>-->
<!-- ... 
    <div>

<h2>AJOUTER</h2>

<form action="index.php?action=addPost" method="post">
    <div>
        <label for="title">Titre</label><br />
        <input type="text" id="title" name="title" />
    </div>
    <div>
        <label for="content">Contenu</label><br />        
      <textarea id="content" name="content"></textarea> 
            
    </div>
    <div>
        <input type="submit" />
    </div>
</form>

    </div>
 ... -->


<?php while ($data = $posts->fetch()):?>
    <div >
        
        <h3>
          <!--    <?= htmlspecialchars($data['title']) ?> --> 

            <a href="./index.php?action=editPost&id=<?= $data['id'] ?>"> <?= htmlspecialchars($data['title']) ?>

                       <!--       <a href="#">Addiction When Gambling
                  Becomes A Problem</a>-->

            <em>le <?= $data['creation_date_fr'] ?></em></a>
        </h3>
   
        <p>
            <?= $data['content'] ?>
        <!--     <br />
           <em><a href="./index.php?action=post&id=<?= $data['id'] ?>">Commentaires</a></em> -->

       <!--     <p> <em><a href="./index.php?action=editPost&id=<?= $data['id'] ?>">Détails</a></em> </p> -->

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


