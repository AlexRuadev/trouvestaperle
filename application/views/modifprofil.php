<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$données = $this->db->get_where('ttp_utilisateurs', array('utilisateurs_id' => $_SESSION['utilisateurs_id']))->result_array();
foreach ($données as $donnée) { ?>

<div class="container">
	<form class="modifprofil" action="<?php echo base_url(); ?>Utilisateurs/modifProfil/<?php echo $_SESSION['utilisateurs_id'] ?>" method="post">


        <div class="form-group row">
        <label for="staticNom" class="col-sm-2 col-form-label">Nom:</label>
		<input type="text" name="nom" id="nom" value="<?php echo $donnée['utilisateurs_nom'] ?>">
		<?php echo form_error('nom') ?>
        </div>

        <div class="form-group row">
        <label for="staticPrénom" class="col-sm-2 col-form-label">Prénom:</label>
		<input type="text" name="prenom" id="prenom" value="<?php echo $donnée['utilisateurs_prenom'] ?>">
		<?php echo form_error('prenom') ?>
        </div>

        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email:</label>
		<input type="email" name="mail" id="mail" value="<?php echo $donnée['utilisateurs_mail'] ?>">
		<?php echo form_error('mail') ?>
        </div>

        <div class="form-group row">
            <label for="staticPhone" class="col-sm-2 col-form-label">Téléphone:</label>
		<input type="text" name="téléphone" id="téléphone" value="<?php echo $donnée['utilisateurs_num'] ?>">
		<?php echo form_error('telephone') ?>
        </div>

        <div class="form-group row">
            <label for="staticDateDeNaissance" class="col-sm-2 col-form-label">Date de Naissance:</label>
		<input type="date" name="naissance" id="naissance" value="<?php echo $donnée['utilisateurs_naissance'] ?>">
		<?php echo form_error('naissance') ?>
        </div>

        <div class="form-group row">
            <label for="staticCodePostal" class="col-sm-2 col-form-label">Code Postal:</label>
		<input type="text" name="codepostal" id="codepostal" value="<?php echo $donnée['utilisateurs_codepostal'] ?>">
		<?php echo form_error('codepostal') ?>
        </div>

        <div class="form-group row">
            <label for="staticPermis" class="col-sm-2 col-form-label">Permis obtenu:</label>
		<input type="text" name="permis" id="permis" value="<?php echo $donnée['utilisateurs_permis'] ?>">
		<?php echo form_error('permis') ?>
        </div>


		<br><input type="submit" class="buttonmodifier" name="submitedit" value="Enregistrer">
	</form>
</div>
	<?php
}
?>
