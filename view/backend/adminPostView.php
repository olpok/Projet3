
<?php $title = 'Blog de Jean Forteroche'; ?>
<?php ob_start();?>

    <div class="container">

  
        <h1>Mon super blog !</h1> 
        <p><a href="index.php">Retour à la liste des billets</a></p>

        <p><a href="index.php?action=adminView">Retour</a></p>



<h2>Billet</h2>



<form action="index.php?action=updateP&amp; id=<?= $_GET['id']?>" method="post">
    <div>
        <label for="title">Titre</label><br />
        <input type="text" id="title" name="title" value = "<?php echo $post['title'];?>" />
    </div>
    <div>
        <label for="content">Contenu</label><br />
        <textarea id="content" name="content"><?= $post['content'] ?> </textarea>
    </div>
    <div>
        <input type="submit" value="Modifier"/>
    </div>
</form>



  <h2>Commentaires</h2>

        <?php  while ($comment = $comments->fetch()): ?>
             <p><span class="author"><?= htmlspecialchars($comment['author'])?></span> le <?= $comment['comment_date_fr']?></p>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>

    <!--        <a href="index.php?action=edit&id=<?php echo $comment['id']?>">Modifier</a>-->
            <p> <a href="index.php?action=deleteC&id=<?= $post['id']; ?>&comment_id=<?php echo $comment['id']?>">Supprimer</a> </p> 

        <?php endwhile ?>

 <!-- 

<?php $comment = $comments->fetch() ?>


       <form action="index.php?action=updateC?>" method="post">

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



<?php  while ($comment = $comments->fetch()):?>

            <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
           
      <a href="index.php?action=post&id=<?php echo $comment['id']?>">Valider</a>

<?php endwhile;?>  -->

 </div>

<?php $content = ob_get_clean()?>

<?php require('view/frontend/template.php')?>

<?php require('view/frontend/footer.php')?>


<script src="public/tinymce/tinymce.min.js"></script>
<script>tinymce.init({       
        selector:'textarea' });
</script>