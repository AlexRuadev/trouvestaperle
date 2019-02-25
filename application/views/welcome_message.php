<?php
defined('BASEPATH') OR exit('No direct script access allowed');




//print_r($_SESSION);
$error = array();
$error['password1'] = 'Le mot de passe rentré est faux!';
$error['mail1'] = 'Le mail rentré n\'existe pas!';
?>



<?php print_r($_SESSION) ?>

<section class="full-width-img">

        <div class="box">
            <ul class="subheading-text">
                <li>Deux POUFS</li>
                <li>Un CV</li>
                <li>TROUVESTAPERLE.COM</li>
            </ul>
			<?php
				if (!isset($_SESSION['utilisateurs_prenom'])){
					echo '<button id="modalBtn" class="buttonmodal">Click Here</button>';
				}
			?>
        </div>

    <div id="simpleModal" class="modal">

        <div class="login-wrap">

		<div class="login-wrap">
                    <div class="login-html">
                        <span class="closeBtn">&times;</span>
                        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Connexion</label>
                        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Inscription</label>

                        <div class="login-form">
                            <?php echo form_open('Utilisateurs/create', "sign-in-htm"); ?>
                            <div class="sign-in-htm">
                                <div class="group">
                                    <label for="user" class="label">Username</label>

                                    <input id="user" type="text" class="input">
								<form action="connexion" method="post"> <!-- onsubmit qui doit appeler une fonction js pour interrompre la validation -->
								<div class="group">
                                    <label for="user" class="label">Adresse Mail</label>
                                    <input id="user" type="text" class="input" name="mail">
									<?php if (isset($_POST['btnsignin'])){ $error['mail'] = form_error('mail'); echo $error['mail'];}else{} ?>
                                </div>
                                <div class="group">
                                    <label for="password" class="label">Mot de passe</label>
                                    <input id="password" type="password" class="input" data-type="password" name="password">
									<?php if (isset($_POST['btnsignin'])){ $error['password'] = form_error('password'); echo $error['password'];}else{} ?>
                                </div>
                                <div class="group">
                                    <input type="submit" name="submitted" class="button" value="Sign In">
                                    <input type="submit" class="button" value="Sign In" name="btnsignin">
                                </div>

                                <div class="hr"></div>
                                <div class="foot-lnk">
                                    <a href="#forgot">Forgot Password?</a>
                                </div>
								</form>
                            </div>

                            <?php
                            echo form_close('Utilisateurs/create');
                            ?>


                            <div class="sign-up-htm">
								<form action="inscription" method="post">
                                <div class="group">
                                    <label for="nom" class="label">Nom</label>
                                    <input id="nom" type="text" class="input" name="nom">
									<?php if (isset($_POST['btnsignup'])){ echo form_error('nom'); }else{} ?>
                                </div>
                                <div class="group">
                                    <label for="prenom" class="label">Prénom</label>
                                    <input id="prenom" type="text" class="input" name="prenom">
									<?php if (isset($_POST['btnsignup'])){ echo form_error('prenom'); }else{} ?>
                                </div>
                                <div class="group">
                                    <label for="mail" class="label">Email Address</label>
                                    <input id="mail" type="text" class="input" name="mail">
									<?php if (isset($_POST['btnsignup'])){ echo form_error('mail'); }else{} ?>
                                </div>
								<div class="group">
									<label for="passwordup" class="label">Mot de Passe</label>
									<input id="passwordup" type="password" class="input" name="password">
									<?php if (isset($_POST['btnsignup'])){ echo form_error('password'); }else{} ?>
								</div>
                                <div class="group">
                                    <input type="submit" class="button" value="Sign Up" name="btnsignup">
                                </div>
                                <?php echo form_close('Utilisateurs/login');?>
								</form>
                            </div>
                        </div>
                    </div>
                </div>

	</div>

</section>

</body>
</html>
