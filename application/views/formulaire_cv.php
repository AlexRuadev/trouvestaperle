<?php
$competences = $this->db->query("SELECT competences_name FROM ttp_competences")->result_array();
?>
<section class="full-width-img">
    <div class="margeform">
        <form id="msform" method="post" action="formCv">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Diplomes/Formations</li>
                <li>Experiences</li>
                <li>Competences</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Diplomes/Formations</h2>
                <h3 class="fs-subtitle">Etape 1</h3>
                <input type="text" name="titre" placeholder="Titre">
                <textarea name="description" placeholder="Description"></textarea>
                <select>
                    <!--changer BDD int formation_niv-->
                    <option>CAP/BEP</option>
                    <option>BAC</option>
                    <option>+2</option>
                    <option>+3</option>
                    <option>+4</option>
                    <option>+5</option>
                </select>
                <input type="date" name="debutFormation" placeholder="debut">
                <input type="date" name="finFormation" placeholder="fin">
                <select>
                    <!--foreach domaines-->
                    <option></option>
                    <option></option>
                    <option></option>
                </select>
                <input type="button" name="next" class="next action-button" value="Suivant" >
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Experiences</h2>
                <h3 class="fs-subtitle">Vos experiences significatives</h3>
                <input type="text" name="titre" placeholder="titre" />
                <textarea name="description" placeholder="Description"></textarea>
                <input type="text" name="anciennete" placeholder="anciennete" />
                </select>
                <input type="date" name="debutExperience" placeholder="debut">
                <input type="date" name="finExperience" placeholder="fin">
                <select>
                    <!--foreach domaines-->
                    <option></option>
                    <option></option>
                    <option></option>
                </select>

                <input type="button" name="previous" class="previous action-button" value="Precedent" />
                <input type="button" name="next" class="next action-button" value="Suivant" />
            </fieldset>
            <fieldset>
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
                <input type="submit" name="submit" class="action-button" value="Confirmer" >
            </fieldset>
        </form>
    </div>
</section>
