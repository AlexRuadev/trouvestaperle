<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="full-width-img">
    <div class="margeform">
        <form id="msform" method="post" action="formCv">
            <!-- progressbar -->
            <ul id="progressbar" class="progressbar">
                <li class="active">Diplomes/Formations</li>
                <li>Experiences</li>
                <li>Competences</li>
            </ul>
            <!-- fieldsets -->
            <fieldset id="test" class="test">
                <h2 class="fs-title">Diplomes/Formations</h2>
                <h3 class="fs-subtitle">Etape 1</h3>
                <input type="text" name="titre" placeholder="<?php if (isset($_POST['submit'])){ echo form_error('titre', '', ''); }else{echo 'Nom du diplome/formation';} ?>">
                <textarea name="description" placeholder="<?php if (isset($_POST['submit'])){ echo form_error('description', '', ''); }else{echo 'Description';} ?>"></textarea>
                <label class="niveau">Niveau</label>
                <select name="niveau" class="select">
                    <!--changer BDD int formation_niv-->
                    <option value="CAP/BEP">CAP/BEP</option>
                    <option value="BAC">BAC</option>
                    <option value="+2">+2</option>
                    <option value="+3">+3</option>
                    <option value="+4">+4</option>
                    <option value="+5">+5</option>
                </select>
                <label for="debutFormation" class="debut"><i class="fa fa-calendar"></i>Début</label>
                <input type="date" name="debutFormation">
                <label for="finFormation" class="fin"><i class="fa fa-calendar"></i>Fin</label>
                <input type="date" name="finFormation">
                <label for="domaines" class="Domaines">Domaines</label>
                <select name="domaines" style="color: black; width: 265px">
                    <!--foreach domaines-->
                    <?php
                    foreach ($domaines as $domaine){
                        echo '<option value="' .$domaine['domaines_id']. '">' .$domaine['domaines_nom']. '</option>';
                    }
                    ?>
                </select>
                <input type="button" name="next" class="next action-button" value="Suivant" >
            </fieldset>
            <fieldset class="test2">
                <h2 class="fs-title">Experiences</h2>
                <h3 class="fs-subtitle">Vos experiences significatives</h3>
                <input type="text" name="titre2" placeholder="<?php if (isset($_POST['submit'])){ echo form_error('titre2', '', ''); }else{echo 'Nom du poste';} ?>" />
                <textarea name="description2" placeholder="<?php if (isset($_POST['submit'])){ echo form_error('description', '', ''); }else{echo 'Description';} ?>"></textarea>
                <label class="anciennete">Ancienneté</label>
                <select name="anciennete">
                    <option>Moins d'1 an</option>
                    <option>1 an</option>
                    <option>2 ans</option>
                    <option>3 ans</option>
                    <option>4 ans</option>
                    <option>5 ans</option>
                    <option>Plus de 5 ans</option>
                </select>
                <label for="debutExperience" class="debut"><i class="fa fa-calendar"></i>Début</label>
                <input type="date" name="debutExperience" placeholder="debut">
                <label for="finExperience" class="fin"><i class="fa fa-calendar"></i>Fin</label>
                <input type="date" name="finExperience" placeholder="fin">
                <label for="domaines" class="Domaines">Domaines</label>
                <select name="domaines2" style="color: black; width: 265px">
                    <!--foreach domaines-->
                    <?php
                    foreach ($domaines as $domaine){
                        echo '<option value="' .$domaine['domaines_id']. '">' .$domaine['domaines_nom']. '</option>';
                    }
                    ?>
                </select>

                <input type="button" name="previous" class="previous action-button" value="Precedent" />
                <input type="button" name="next" class="next action-button" value="Suivant" />
            </fieldset>
            <fieldset class="test3">
                <h2 class="fs-title">Competences</h2>
                <select name="competences" id="competences" style="color: black; width: 265px">
                    <?php
                    foreach ($competences as $competence){
                        echo '<option value="' .$competence['competences_id']. '">' .$competence['competences_name']. '</option>';
                    }
                    ?>
                </select>
                <label class="niveau">Niveau /10</label>
                <select name="niveau2">
                    <!--changer BDD int formation_niv-->
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>

                </select>
                <input type="button" name="previous" class="previous action-button" value="Precedent" />
                <input type="submit" name="submit" class="action-button" value="Confirmer" >
            </fieldset>
        </form>
    </div>
</section>
