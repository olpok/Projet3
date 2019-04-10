<?php $title = 'Mon blog'; ?> 
<?php ob_start(); ?>


<!-- Start Sample Area -->
      <section class="sample-text-area">
        <div class="container">


                <h3 class="mb-30">Nous contacter</h3>
   
          <p class="sample-text">

            Every avid independent filmmaker has <b>Bold</b> about making that <i>Italic</i> interest documentary, or short film to show off their creative prowess. Many have great ideas and want to “wow” the<sup>Superscript</sup> scene, or video renters with their big project.  But once you have the<sub>Subscript</sub> “in the can” (no easy feat), how do you move from a <del>Strike</del> through of master DVDs with the <u>“Underline”</u> marked hand-written title inside a secondhand CD case, to a pile of cardboard boxes full of shiny new, retail-ready DVDs, with UPC barcodes and polywrap sitting on your doorstep?  You need to create eye-popping artwork and have your project replicated. Using a reputable full service DVD Replication company like PacificDisc, Inc. to partner with is certainly a helpful option to ensure a professional end result, but to help with your DVD replication project, here are 4 easy steps to follow for good DVD replication results: 
          </p>       
         
            <!--    <h3 class="mb-30">Nous contacter</h3> -->
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
        </div>
         

     
      </section>
      <!-- End Sample Area -->
    


    <?php /*

$to = 'demo@spondonit.com'; // replace this mail with yours
$firstname = $_POST["fname"];
$email= $_POST["email"];
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $email . "\r\n"; // Sender's E-mail
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
$message ='<table style="width:100%">
    <tbody><tr>
        <td>'.$firstname.'  '.$laststname.'</td>
    </tr>
    <tr><td>Email: '.$email.'</td></tr>
</tbody></table>';
 
if (@mail($to, $email, $message, $headers))
{
    echo 'The message has been sent.';
}else{
    echo 'failed';
}

  */  ?> 



<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
<?php require('footer.php'); ?>
 