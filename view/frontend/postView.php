<?php $title = 'Mon blog'; ?> 
<?php ob_start(); ?>

    <div class="container">



        <h1>Mon super blog !</h1>
        <p><a href="index.php">Retour à la liste des billets</a></p>

        <div class="news">
            <h3>
                <?= htmlspecialchars($post['title']) ?>
                <em>le <?= $post['creation_date_fr'] ?></em>
            </h3>
            
            <p>
                <?= $post['content'] ?>
            </p>
        </div>

        <h2>Commentaires</h2>


       <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
            <div>
                <label for="author">Auteur</label><br />
                <input type="text" id="author" name="author" />
            </div>
            <div>
                <label for="comment">Commentaire</label><br />
                <textarea id="comment" name="comment"></textarea>
            </div><br />
            <div>              
                <input type="submit" />
            </div>
        </form>


        <?php  while ($comment = $comments->fetch()): ?>
             <p><span class="author"><?= htmlspecialchars($comment['author'])?></span> le <?= $comment['comment_date_fr']?></p>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>

            <div class="button-group-area mt-10">
                        <a href="index.php?action=signal&amp;idP=<?=$post['id'] ?>&amp;idC=<?php echo $comment['id']?>" class="genric-btn default-border">Signaler</a>
                      <!--  <a href="index.php?action=signalForm" class="genric-btn link-border">Signaler</a>-->
            </div>

            
<!--
            <a href="index.php?action=edit&id=<?php echo $comment['id']?>">Modifier</a>
            <p> <a href="index.php?action=deleteC&id=<?= $post['id']; ?>&comment_id=<?php echo $comment['id']?>">Supprimer</a> </p>
-->


        <?php endwhile ?>

       </div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
<?php require('footer.php'); ?>
