<?php
defined('BASEPATH') OR exit('No direct script access allowed');




?>
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
            <div class="login-html">
                <span class="closeBtn">&times;</span>
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                <div class="login-form">
                    <div class="sign-in-htm">
                        <form action="connexion" method="post"> <!-- onsubmit qui doit appeler une fonction js pour interrompre la validation -->
                            <div class="group">
                                <label for="user" class="label">Adresse Mail</label>
                                <input id="user" type="text" class="input" name="mail">
                                <?php if (isset($_POST['btnsignin'])){echo form_error('mail','<div class="error">', '</div>');}else{} ?>
                            </div>
                            <div class="group">
                                <label for="password" class="label">Mot de passe</label>
                                <input id="password" type="password" class="input" data-type="password" name="password">
                                <?php if (isset($_POST['btnsignin'])){echo form_error('password', '<div class="error">', '</div>'); }else{} ?>
                            </div>
                            <div class="group">
                                <input type="submit" class="button" value="Sign In" name="btnsignin">
                            </div>
                            <div class="hr"></div>
                            <div class="foot-lnk">
                                <a href="#forgot">Forgot Password?</a>
<section class="full-width-img">

        <div class="box">
            <ul class="subheading-text">
                <li>Deux POUFS</li>
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
                        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
                        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                        <div class="login-form">
                            <div class="sign-in-htm">
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
                                    <input type="submit" class="button" value="Sign In" name="btnsignin">
                                </div>
                                <div class="hr"></div>
                                <div class="foot-lnk">
                                    <a href="#forgot">Forgot Password?</a>
                                </div>
								</form>
                            </div>
                        </form>
                    </div>


                    <div class="sign-up-htm">
                        <form action="inscription" method="post">
                            <div class="group">
                                <label for="nom" class="label">Nom</label>
                                <input id="nom" type="text" class="input" name="nom">
                                <?php if (isset($_POST['btnsignup'])){ echo form_error('nom', '<div class="error">', '</div>'); }else{} ?>
                            </div>
                            <div class="group">
                                <label for="prenom" class="label">Prénom</label>
                                <input id="prenom" type="text" class="input" name="prenom">
                                <?php if (isset($_POST['btnsignup'])){ echo form_error('prenom', '<div class="error">', '</div>'); }else{} ?>
                            </div>
                            <div class="group">
                                <label for="mail" class="label">Email Address</label>
                                <input id="mail" type="text" class="input" name="mail">
                                <?php if (isset($_POST['btnsignup'])){ echo form_error('mail', '<div class="error">', '</div>'); }else{} ?>
                            </div>
                            <div class="group">
                                <label for="passwordup" class="label">Mot de Passe</label>
                                <input id="passwordup" type="password" class="input" name="password">
                                <?php if (isset($_POST['btnsignup'])){ echo form_error('password', '<div class="error">', '</div>'); }else{} ?>

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
                                    <input type="submit" class="button" value="Sign Up">
                                </div>
                                <div class="hr"></div>
                                <div class="foot-lnk">
                                    <label for="tab-1">Already Member?</label>

								<div class="group">
									<label for="passwordup" class="label">Mot de Passe</label>
									<input id="passwordup" type="password" class="input" name="password">
									<?php if (isset($_POST['btnsignup'])){ echo form_error('password'); }else{} ?>
								</div>
                                <div class="group">
                                    <input type="submit" class="button" value="Sign Up" name="btnsignup">
                                </div>
								</form>
                            </div>
                            <div class="group">
                                <input type="submit" class="button" value="Sign Up" name="btnsignup">
                            </div>
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
            <form id="contact-form" class="form" action="#" method="POST" role="form">
                <div class="form-group">
                    <label class="form-label" for="name">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nom" tabindex="1" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="email">Your Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" tabindex="2" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet" tabindex="3">
                </div>
                <div class="form-group">
                    <label class="form-label" for="message">Message</label>
                    <textarea rows="5" cols="50" name="message" class="form-control" id="message" placeholder="Message..." tabindex="4" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-start-order">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>


</body>
</html>