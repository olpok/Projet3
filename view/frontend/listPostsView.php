<!--- creation  header--->
<?php ob_start(); ?>
<?php require('headerHome.php');?>
<?php $header = ob_get_clean(); ?>
<!--- end header--->


<?php ob_start(); ?>


<section class="sample-text-area"><div class="container">

    <h1> <span>Blog de Jean Forteroche </span> </h1><br> 
    <p>Derniers billets du blog :</p>


    <?php while ($data = $posts->fetch()):?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($data['title']) ?>
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h3>
        
        <p>
            <?= substr($data['content'], 0,400) ?> <br>
            <em><a  class="genric-btn default-border circle" href="./index.php?action=post&id=<?= $data['id'] ?>">Voir plus</a></em>
        </p>

    </div>
    <?php endwhile;?>
    <?php $posts->closeCursor(); ?>

</div>
</section>

<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>
<?php require('footer.php');?>