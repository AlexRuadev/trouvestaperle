<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$données = $this->db->get_where('ttp_utilisateurs', array('utilisateurs_id' => $_SESSION['utilisateurs_id']))->result_array();
foreach ($données as $donnée) { ?>

	<form action="<?php echo base_url(); ?>Utilisateurs/modifProfil/<?php echo $_SESSION['utilisateurs_id'] ?>" method="post">
		<label for="nom">Nom: </label>
		<input type="text" name="nom" id="nom" value="<?php echo $donnée['utilisateurs_nom'] ?>">
		<?php echo form_error('nom') ?>

		<br><label for="prenom">Prénom: </label>
		<input type="text" name="prenom" id="prenom" value="<?php echo $donnée['utilisateurs_prenom'] ?>">
		<?php echo form_error('prenom') ?>

		<br><label for="mail">Email: </label>
		<input type="email" name="mail" id="mail" value="<?php echo $donnée['utilisateurs_mail'] ?>">
		<?php echo form_error('mail') ?>

		<br><label for="telephone">Téléphone: </label>
		<input type="text" name="telephone" id="telephone" value="<?php echo $donnée['utilisateurs_num'] ?>">
		<?php echo form_error('telephone') ?>

		<br><label for="naissance">Date de naissance: </label>
		<input type="date" name="naissance" id="naissance" value="<?php echo $donnée['utilisateurs_naissance'] ?>">
		<?php echo form_error('naissance') ?>

		<br><label for="codepostal">Code Postal: </label>
		<input type="text" name="codepostal" id="codepostal" value="<?php echo $donnée['utilisateurs_codepostal'] ?>">
		<?php echo form_error('codepostal') ?>

		<br><label for="permis">Permis Obtenu: </label>
		<input type="text" name="permis" id="permis" value="<?php echo $donnée['utilisateurs_permis'] ?>">
		<?php echo form_error('permis') ?>

		<br><input type="submit" name="submitedit" value="Enregistrer">
	</form>

	<?php
}
?>
