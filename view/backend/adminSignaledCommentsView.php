
<?php //$title = 'Blog de Jean Forteroche'; ?>
<?php ob_start();?>

    <section class="sample-text-area">
    <div class="container">

  
        <h1>Mon super blog !</h1> 

        <p><a href="index.php?action=login">Retour à la liste des articles</a></p>


        <h2>Commentaires signalés</h2>

        <?php  while ($comment = $signaledComments->fetch()): ?>

            <a href="./index.php?action=editPost&id=<?= $comment['post_id'] ?>"> <p> <b> article <?= htmlspecialchars($comment['post_id']) ?> </b> </p> </a>
            <p> <span class="author"><?= htmlspecialchars($comment['author'])?></span> le <?= $comment['comment_date_fr']?></p>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>

        <?php endwhile ?>

   </div>
   </section>

<?php $content = ob_get_clean()?>
<?php require('view/frontend/template.php')?>
<?php require('view/frontend/footer.php')?>