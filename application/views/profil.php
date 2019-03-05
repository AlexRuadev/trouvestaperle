<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$données = $this->db->get_where('ttp_utilisateurs', array('utilisateurs_id' => $_SESSION['utilisateurs_id']))->result_array();
foreach ($données as $donnée) { ?>

	<div class="contain">
		<div>
			<h4>Nom: </h4>
			<p><?php echo $donnée['utilisateurs_nom'] ?></p>
		</div>
		<div>
			<h4>Prénom: </h4>
			<p><?php echo $donnée['utilisateurs_prenom'] ?></p>
		</div>
		<div>
			<h4>Email: </h4>
			<p><?php echo $donnée['utilisateurs_mail'] ?></p>
		</div>
		<div>
			<h4>Téléphone: </h4>
			<p><?php echo $donnée['utilisateurs_num'] ?></p>
		</div>
		<div>
			<h4>Date de Naissance: </h4>
			<p><?php echo strftime('%d/%m/%Y',strtotime($donnée['utilisateurs_naissance'])) ?></p>
		</div>
		<div>
			<h4>Permis: </h4>
			<p><?php echo $donnée['utilisateurs_permis'] ?></p>
		</div>
		<div>
			<h4>Code Postal: </h4>
			<p><?php echo$donnée['utilisateurs_codepostal'] ?></p>
		</div>
	</div>
	<a href="<?php echo base_url(); ?>Utilisateurs/modifProfil/<?php echo $_SESSION['utilisateurs_id'] ?>"><button>Modifier</button></a>
	<?php
}
?>
