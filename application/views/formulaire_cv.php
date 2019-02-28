<?php
$competences = $this->db->query("SELECT competences_name FROM ttp_competences")->result_array();
?>
<section class="full-width-img">
    <div class="margeform">
        <form id="msform" method="post" action="formCv">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Informations personnelles</li>
                <li>Experiences & competences</li>
                <li>Diplômes</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Informations personnelles</h2>
                <h3 class="fs-subtitle">Etape 1</h3>
                <input type="text" name="nom" value="<?php echo $this->session->userdata('utilisateurs_nom'); ?>">
                <input type="text" name="prenom" value="<?php echo $this->session->userdata('utilisateurs_prenom'); ?>">
                <abbr title="Date de naissance">
                <input type="date" name="ddn" placeholder="Date de naissance" value="<?php echo $this->session->userdata('utilisateurs_naissance'); ?>">
                </abbr>
                <input type="text" name="phone" placeholder="Telephone" value="<?php echo $this->session->userdata('utilisateurs_num'); ?>">
                <?php if (isset($_POST['submit'])){ echo form_error('phone'); }else{} ?>
                <input type="text" name="postal" placeholder="Code postal">
                <input type="button" name="next" class="next action-button" value="Suivant" >
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Experiences</h2>
                <h3 class="fs-subtitle">Vos experiences significatives</h3>
                <input type="text" name="experience1" placeholder="Experience1" />
                <input type="text" name="experience2" placeholder="Experience2" />
				<h2 class="fs-title">Competences</h2>
				<select name="competences" id="competences" style="color: black; width: 265px">
					<?php
					foreach ($competences as $competence){
					echo '<option value="' .$competence['competences_name']. '">' .$competence['competences_name']. '</option>';
					}
					?>
				</select>
				<select name="competences" id="competences" style="color: black; width: 265px">
					<?php
					foreach ($competences as $competence){
						echo '<option value="' .$competence['competences_name']. '">' .$competence['competences_name']. '</option>';
					}
					?>
				</select>
				<select name="competences" id="competences" style="color: black; width: 265px">
					<?php
					foreach ($competences as $competence){
						echo '<option value="' .$competence['competences_name']. '">' .$competence['competences_name']. '</option>';
					}
					?>
				</select>
				<select name="competences" id="competences" style="color: black; width: 265px">
					<?php
					foreach ($competences as $competence){
						echo '<option value="' .$competence['competences_name']. '">' .$competence['competences_name']. '</option>';
					}
					?>
				</select>
                <input type="button" name="previous" class="previous action-button" value="Precedent" />
                <input type="button" name="next" class="next action-button" value="Suivant" />
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Domaines</h2>
                <h3 class="fs-subtitle">Domaines et formations obtenus</h3>
                <input type="text" name="fname" placeholder="Nom du domaine" />
                <input type="text" name="lname" placeholder="Nom de la formation" />

                <input type="button" name="previous" class="previous action-button" value="Precedent" />
                <input type="submit" name="submit" class="action-button" value="Confirmer" >
            </fieldset>
        </form>
    </div>
</section>
