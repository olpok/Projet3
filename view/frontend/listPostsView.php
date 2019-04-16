<?php ob_start(); ?>


<section class="sample-text-area">
<div class="container">

    <h1>Billet simple pour l'Alaska</h1>
    <p>Derniers billets du blog :</p>


    <?php while ($data = $posts->fetch()):?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($data['title']) ?>
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h3>
        
        <p>
            <?= substr($data['content'], 0,100) ?>
            <em><a href="./index.php?action=post&id=<?= $data['id'] ?>">Commentaires</a></em>
        </p>

    </div>
    <?php endwhile;?>
    <?php $posts->closeCursor(); ?>
</div>


</section>
<?php $content = ob_get_clean(); ?>

<!--- creation du footer--->
<?php ob_start();?>
include('footer.php');
<?php $footer = ob_get_clean(); ?>


<?php require('template.php'); ?>
