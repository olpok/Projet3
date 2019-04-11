
<?php //$title = 'Blog de Jean Forteroche'; ?>
<?php ob_start();?>

<div class="container">

  
        <h1>Mon super blog !</h1> 
        <p><a href="index.php">Retour à la liste des billets</a></p>

        <h2>Commentaires</h2>

        <?php $comment = $comments->fetch() ?>

        <form action="index.php?action=updateC&amp; id=<?= $comment['post_id']?>" method="post">
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


</div>

<?php $content = ob_get_clean()?>

<?php require('template.php')?>
<?php require('footer.php'); ?>