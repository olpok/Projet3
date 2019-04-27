<!--- creation  header--->
<?php ob_start(); ?>
<?php require('view/frontend/headerPage.php');?>
<?php $header = ob_get_clean(); ?>
<!--- end header--->


<?php ob_start();?>

    <section class="sample-text-area">
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


        <h2>Commentaires</h2> <br>

        <?php   while ($comment = $comments->fetch()): ?> 

        

            <?php if ($comment['priority'] != 0):?>

            <div  class="signaled-comments" >  
                <p> <em> <?=  htmlspecialchars($comment['author'])?></em> le <?= $comment['comment_date_fr']?></p>       
                <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
            </div>

            <?php else :?>     
                <p> <em>  <?= htmlspecialchars($comment['author'])?></em> le <?= $comment['comment_date_fr']?></p>    
                <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>

            <?php endif;?>
      
            <p> <a href="index.php?action=deleteC&id=<?= $post['id']; ?>&comment_id=<?php echo $comment['id']?>">Supprimer</a> </p> 


        <?php endwhile ?>


    </div>
    </section>

<?php $content = ob_get_clean()?>
<?php require('view/frontend/template.php')?>
<?php require('view/frontend/footer.php')?>


<script src="public/tinymce/tinymce.min.js"></script>
<script>tinymce.init({       
        selector:'textarea' });
</script>