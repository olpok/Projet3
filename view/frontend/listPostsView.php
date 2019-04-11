
<?php //$title = 'Blog de Jean Forteroche'; ?>

<?php ob_start(); ?>

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
            <?= wordwrap($data['content'],20) ?>
            <em><a href="./index.php?action=post&id=<?= $data['id'] ?>">Commentaires</a></em>
        </p>

    </div>
    <?php endwhile;?>
    <?php $posts->closeCursor(); ?>

</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
<?php require('footer.php'); ?>
