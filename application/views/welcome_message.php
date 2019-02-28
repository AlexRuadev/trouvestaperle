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

</body>
</html>