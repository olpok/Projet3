
<?php //$title = 'Blog de Jean Forteroche'; ?>
<?php ob_start();?>

    <div class="container">

  
        <h1>Mon super blog !</h1> 

        <p><a href="index.php?action=login">Retour à la liste des articles</a></p>


        <h2>Commentaires signalés</h2>

        <?php  while ($comment = $signaledComments->fetch()): ?>

             <p> <b> article <?= $comment['post_id']?> </b> </p>
             <p> <span class="author"><?= htmlspecialchars($comment['author'])?></span> le <?= $comment['comment_date_fr']?></p>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>

        <?php endwhile ?>

   </div>

<?php $content = ob_get_clean()?>
<?php require('view/frontend/template.php')?>
<?php require('view/frontend/footer.php')?>