<!--- creation  header--->
<?php ob_start(); ?>
<?php require('headerPage.php');?>
<?php $header = ob_get_clean(); ?>
<!--- end header--->


<?php ob_start(); ?>


<!-- Start Sample Area -->
      <section class="sample-text-area">
        <div class="container">
   
          <p class="sample-text">

            <h3 class="mb-30">A propos</h3>
      
            <b> BLOG DE JEAN FORTEROCHE </b>. Un blog, anglicisme pouvant être francisé en blogue1,2, carnet Web2, <b>cybercarnet2</b> ou bloc-notes3, est un type de site web — ou une partie d'un site web — utilisé pour la ublication périodique et régulière d'articles personnels, généralement succincts, rendant compte d'une actualité autour d'un sujet donné ou d'une profession. <br> À la manière d'un journal intime, ces articles ou <i>« billets »</i>i> sont typiquement datés, signés et présentés dans un ordre antéchronologique, c'est-à-dire du plus récent au plus ancien.
            <br><br>
            Au printemps 2011, on dénombrait au moins 156 millions de blogs et pas moins d'un million de nouveaux articles de blog publiés chaque jour4. On recensait, en 2012, 31 millions de blogs aux <sup>États-Unis</sup> alors que dans le monde on estime à trois millions le nombre de blogs qui naissent chaque mois6. Toutefois, le nombre de blogs inactifs demeure élevé. Rares sont en effet ceux qui affichent une grande longévité et la majorité d'entre eux est abandonnée par leurs auteurs. 
            <br><br>
            Le terme « blog » recouvre beaucoup de notions : les œuvres d'un dessinateur, les nouvelles activités d'une association, un journal intime anonyme, des poèmes, l'opinion d'une journaliste, le carnet de bord d'un <sub>photographe</sub>, des satires d'hommes politiques, les vidéos d'une classe de collège, un <del>roman</del> en construction, les anecdotes quotidiennes d'une mère de famille... La liste est sans fin et surprend par sa diversité. Tout un vocabulaire désigne ses différentes utilisations : « vlog », ou « vidéoblog », (blog vidéo), « bdblog » ou webcomic (blog BD), « photoblog » (blog photo), audioblog (blog audio)...
            <br><br>
            Le concept <b>« blog »</b> est assez englobant pour <u>autoriser</u> toutes ces acceptions. Le phénomène connaît son succès grâce à la facilité de publication proposée par des logiciels automatisés de publication, la liberté éditoriale (il n'y a généralement pas de contrôleur chargé avant publication de la relecture d'un billet) et la grande capacité d'interaction en temps réel avec le lectorat (via les commentaires et le courrier électronique).
          </p>       
             
        </div>
     
      </section>
<!-- End Sample Area -->


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
<?php require('footer.php'); ?>