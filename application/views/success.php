<?php

?>
<div class="vide"></div>
<div class="conf-modal center success">
    <div class="title-icon">
        <img src="http://jimy.co/res/icon-success.jpg">
    </div>
    <div class="title-text"><h1>BRAVO!</h1></div>
    <p>Un Email vous à été envoyé pour comfirmer l'ajout de votre CV.</p>
    <div class="modal-footer">
        <a href="<?php echo base_url('Utilisateurs/viewProfil/') . $_SESSION['utilisateurs_id'] ?>"><div class="conf-but green">Ok</div></a>
    </div>
</div>