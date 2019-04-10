<?php $title = 'Mon blog'; ?> 
<?php ob_start(); ?>

<div class="container">

<!--ancien formulaire
<form action="index.php?action=signing" method="post" >
   <p>
       <div>
       		<label for="identifiant">Votre identifiant :</label>
       		<input type="text" name="identifiant" id="identifiant" />
       </div>     
              <br />
       <div>
       		<label for="pass">Votre mot de passe :</label>
       		<input type="password" name="pass" id="pass" />
   	   </div>
	   <div class="button-group-area mt-40">
       		<input type="submit" value="Valider" class="genric-btn primary-border e-large"/>
       </div>
   </p>
</form>
-->       <br />
          <br />
          <br />
          <br />


<form action="index.php?action=signing" method="post" >
   <p>
       <div class="col-md-4 mt-sm-30">


          <input type="text" name="identifiant" id="identifiant" placeholder="identifiant" onfocus="this.placeholder = ''" onblur="this.placeholder = 'identifiant'" required class="single-input"/>
       </div>     
         <br />
       <div class="col-md-4">
          <input type="password" name="pass" id="pass" placeholder="Mot de passe" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mot de passe'" required class="single-input"/>
       </div>
         <br />
     <div class="col-md-4">
          <input type="submit" value="Valider" class="genric-btn primary-border e-large"/>
       </div>
   </p>
</form>


          <br />
          <br />
          <br />
          <br />
<!--

       <div class="row justify-content-center">

<form action="index.php?action=signing" method="post" >
   <p>
       <div class="mt-10">
          <input type="text" name="identifiant" id="identifiant" placeholder="identifiant" onfocus="this.placeholder = ''" onblur="this.placeholder = 'identifiant'" required class="single-input"/>
       </div>     
       <div class="mt-10">
          <input type="password" name="pass" id="pass" placeholder="Mot de passe" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mot de passe'" required class="single-input"/>
       </div>
              <br />
     <div class="col-md-4">
          <input type="submit" value="Valider" class="genric-btn primary-border e-large"/>
       </div>
   </p>
</form>
 </div>-->
<!--
                    <form method="post" action="#">
                    <div class="mt-10">
                      <input type="text" name="first_name" placeholder="Prénom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Prénom'" required class="single-input">
                    </div>
                    <div class="mt-10">
                      <input type="text" name="last_name" placeholder="Nom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nom'" required class="single-input">
                    </div>
                    <div class="mt-10">
                      <input type="email" name="EMAIL" placeholder="Adresse email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adresse email'" required class="single-input">
                    </div>
                    <div class="mt-10">
                      <textarea class="single-textarea" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required></textarea>
                    </div>
                    <div class="button-group-area mt-40">
                      <input type="submit" value="Send Message" class="genric-btn primary-border e-large" />
                    </div>
                      <p> </p>
                    <form/>

-->


</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
<?php require('footer.php'); ?>
