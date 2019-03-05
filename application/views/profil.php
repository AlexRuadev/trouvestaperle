<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$données = $this->db->get_where('ttp_utilisateurs', array('utilisateurs_id' => $_SESSION['utilisateurs_id']))->result_array();
foreach ($données as $donnée) { ?>

	<div class="contain">
        <div class="modifprofil">

        <div class="form-group row">
        <label for="staticNom" class="col-sm-2 col-form-label">Nom:</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticNom" value="<?php echo $donnée['utilisateurs_nom'] ?>">
            </div>
        </div>

        <div class="form-group row">
        <label for="staticPrénom" class="col-sm-2 col-form-label">Prénom:</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticPrénom" value="<?php echo $donnée['utilisateurs_prenom'] ?>">
            </div>
		</div>

        <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $donnée['utilisateurs_mail'] ?>">
            </div>
        </div>

        <div class="form-group row">
        <label for="staticPhone" class="col-sm-2 col-form-label">Téléphone:</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticPhone" value="<?php echo $donnée['utilisateurs_num'] ?>">
            </div>
        </div>

        <div class="form-group row">
        <label for="staticDateDeNaissance" class="col-sm-2 col-form-label">Date de Naissance:</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticDateDeNaissance" value="<?php echo strftime('%d/%m/%Y',strtotime($donnée['utilisateurs_naissance'])) ?>">
            </div>
        </div>


        <div class="form-group row">
        <label for="staticPermis" class="col-sm-2 col-form-label">Permis:</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticPermis" value="<?php echo $donnée['utilisateurs_permis'] ?>">
            </div>
        </div>


        <div class="form-group row">
        <label for="staticCodePostal" class="col-sm-2 col-form-label">Code Postal:</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticCodePostal" value="<?php echo$donnée['utilisateurs_codepostal'] ?>">
            </div>
        </div>


	<a href="<?php echo base_url(); ?>Utilisateurs/modifProfil/<?php echo $_SESSION['utilisateurs_id'] ?>"><button class="buttonmodifier">Modifier</button></a>
        </div>

    <?php
}
?>
