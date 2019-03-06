<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="full-width-img">

        <div class="box">
            <ul class="subheading-text">
                <li>Un Avenir</li>
                <li>Un CV</li>
                <li>TROUVESTAPERLE.COM</li>
            </ul>
			<?php
				if (!isset($_SESSION['utilisateurs_prenom'])){
					echo '<button id="modalBtn" class="buttonmodal">Commencer</button>';
				}
			?>
        </div>


    <div id="simpleModal" class="modal">
                <div class="login-wrap">
                    <div class="login-html">
                        <span class="closeBtn">&times;</span>
                        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Connexion</label>
                        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Inscription</label>
                        <div class="login-form">
                            <div class="sign-in-htm">
								<form action="connexion" method="post" onsubmit="noclosemodal()">
								<div class="group">
                                    <label for="user" class="label marge">Adresse email</label>
                                    <input id="user" type="text" class="input" name="mail">
									<?php if (isset($_POST['btnsignin'])){ $error['mail'] = form_error('mail'); echo '<p id="fake" class="testp">'.$error['mail'].'</p>';}else{} ?>
                                </div>
                                <div class="group">
                                    <label for="password" class="label">Mot de passe</label>
                                    <input id="password" type="password" class="input" data-type="password" name="password">
									<?php if (isset($_POST['btnsignin'])){ $error['password'] = form_error('password'); echo '<p id="fake" class="testp">'.$error['password'].'</p>';}else{} ?>
                                </div>
                                <div class="group">
                                    <input type="submit" class="button" value="Me connecter" name="btnsignin">
                                </div>
                                <div class="hr"></div>
								</form>
                            </div>

                            <div class="sign-up-htm">
								<form action="inscription" method="post">
                                <div class="group">
                                    <label for="nom" class="label">Nom</label>
                                    <input id="nom" type="text" class="input" name="nom">
									<?php if (isset($_POST['btnsignup'])){ echo '<p id="fake" class="testp">'.form_error('nom').'</p>'; }else{} ?>
                                </div>
                                <div class="group">
                                    <label for="prenom" class="label">Prénom</label>
                                    <input id="prenom" type="text" class="input" name="prenom">
									<?php if (isset($_POST['btnsignup'])){ echo '<p id="fake" class="testp">'.form_error('prenom').'</p>'; }else{} ?>
                                </div>
                                <div class="group">
                                    <label for="mail" class="label">Adresse email</label>
                                    <input id="mail" type="text" class="input" name="mail">
									<?php if (isset($_POST['btnsignup'])){ echo '<p id="fake" class="testp">'.form_error('mail').'</p>'; }else{} ?>
                                </div>
                                <div class="group">
                                     <label for="passwordup" class="label">Mot de Passe</label>
                                     <input id="passwordup" type="password" class="input" name="password">
                                     <?php if (isset($_POST['btnsignup'])){ echo '<p id="fake" class="testp">'.form_error('password').'</p>'; }else{} ?>
                                </div>
                                <div class="group">
                                    <label for="passwordup" class="label">Comfirmation Mot de Passe</label>
                                    <input id="passwordup" type="password" class="input" name="password1">
                                    <?php if (isset($_POST['btnsignup'])){ echo '<p id="fake" class="testp">'.form_error('password1').'</p>'; }else{} ?>
                                </div>
                                <div class="group">
                                    <input type="submit" class="button" value="M'inscrire" name="btnsignup">
                                </div>

                                <div class="foot-lnk">



								</form>
                            </div>
                        </div>
                    </div>
                </div>

	</div>

</section>

<div class="container" id="contact">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <h2>Contact</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3">
            <form id="contact-form" class="form" action="email" method="POST" role="form">
                <div class="form-group">
                    <label class="form-label" for="name">Votre Nom: </label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Votre Nom" tabindex="1">
					<?php if (isset($_POST['envoyer'])){ echo form_error('name'); }else{} ?>
				</div>
                <div class="form-group">
                    <label class="form-label" for="email">Votre Email: </label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Votre Email" tabindex="2">
					<?php if (isset($_POST['envoyer'])){ echo form_error('email'); }else{} ?>
				</div>
                <div class="form-group">
                    <label class="form-label" for="subject">Objet: </label>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Objet" tabindex="3">
					<?php if (isset($_POST['envoyer'])){ echo form_error('subject'); }else{} ?>
				</div>
                <div class="form-group">
                    <label class="form-label" for="message">Votre Message: </label>
                    <textarea rows="5" cols="50" name="message" class="form-control" id="message" placeholder="Votre Message..." tabindex="4"></textarea>
					<?php if (isset($_POST['envoyer'])){ echo form_error('message'); }else{} ?>
				</div>
                <div class="text-center">
                    <button type="submit" class="btn btn-start-order" name="envoyer">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>


</body>
</html>
