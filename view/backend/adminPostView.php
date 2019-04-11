
<?php //$title = 'Blog de Jean Forteroche'; ?>
<?php ob_start();?>

    <div class="container">

  
        <h1>Mon super blog !</h1> 

        <p><a href="index.php?action=login">Retour à la liste des articles</a></p>



        <h2>Article</h2>



        <form action="index.php?action=updateP&amp; id=<?= $_GET['id']?>" method="post">
        <div>
            <label for="title">Titre</label><br />
            <input type="text" id="title" name="title" value = "<?php echo $post['title'];?>" />
        </div>
        <div>
            <label for="content">Contenu</label><br />
            <textarea id="content" name="content" rows="40"><?= $post['content'] ?> </textarea>
        </div>
        <div>
            <input type="submit" value="Modifier"/>
        </div>
        </form>



        <h2>Commentaires</h2>

        <?php  while ($comment = $comments->fetch()): ?>
             <p><span class="author"><?= htmlspecialchars($comment['author'])?></span> le <?= $comment['comment_date_fr']?></p>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
            <p> <a href="index.php?action=deleteC&id=<?= $post['id']; ?>&comment_id=<?php echo $comment['id']?>">Supprimer</a> </p> 

        <?php endwhile ?>


    </div>

<?php $content = ob_get_clean()?>
<?php require('view/frontend/template.php')?>
<?php require('view/frontend/footer.php')?>


<script src="public/tinymce/tinymce.min.js"></script>
<script>tinymce.init({       
        selector:'textarea' });
</script>