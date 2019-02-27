<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="full-width-img">

        <div class="box">
            <ul class="subheading-text">
                <li>Deux POUFS</li>
                <li>Un CV</li>
                <li>TROUVETAPERLE.COM</li>
            </ul>
            <button id="modalBtn" class="buttonmodal">Click Here</button>
        </div>

    <div id="simpleModal" class="modal">
                <div class="login-wrap">
                    <div class="login-html">
                        <span class="closeBtn">&times;</span>
                        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
                        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                        <div class="login-form">
                            <div class="sign-in-htm">
                                <div class="group">
                                    <label for="user" class="label">Username</label>
                                    <input id="user" type="text" class="input">
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Password</label>
                                    <input id="pass" type="password" class="input" data-type="password">
                                </div>
                                <div class="group">
                                    <input type="submit" class="button" value="Sign In">
                                </div>
                                <div class="hr"></div>
                                <div class="foot-lnk">
                                    <a href="#forgot">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="sign-up-htm">
                                <div class="group">
                                    <label for="pass" class="label">Password</label>
                                    <input id="pass" type="password" class="input" data-type="password">
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Repeat Password</label>
                                    <input id="pass" type="password" class="input" data-type="password">
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Email Address</label>
                                    <input id="pass" type="text" class="input">
                                </div>
                                <div class="group">
                                    <input type="submit" class="button" value="Sign Up">
                                </div>
                                <div class="hr"></div>
                                <div class="foot-lnk">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

</section>

<div class="container">
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
