<?php
echo validation_errors('<span class="error">', '</span>');
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
                <input type="text" name="titre" placeholder="Titre">
                <textarea name="description" placeholder="Description"></textarea>
                <select name="niveau" style="color: black; width: 265px">
                    <!--changer BDD int formation_niv-->
                    <option value="CAP/BEP">CAP/BEP</option>
                    <option value="BAC">BAC</option>
                    <option value="+2">+2</option>
                    <option value="+3">+3</option>
                    <option value="+4">+4</option>
                    <option value="+5">+5</option>
                </select>
                <input type="date" name="debutFormation" placeholder="debut">
                <input type="date" name="finFormation" placeholder="fin">
                <select name="domaines" style="color: black; width: 265px">
                    <!--foreach domaines-->
                    <?php
                    foreach ($domaines as $domaine){
                        echo '<option value="' .$domaine['domaines_id']. '">' .$domaine['domaines_nom']. '</option>';
                    }
                    ?>
                </select>

                <input type="button" onclick="myFunction()" name="next" class="action-button" value="Suivant" >
                <input type="button" name="next" class="next action-button" value="Suivant" >
            </fieldset>
            <fieldset class="test2">
                <h2 class="fs-title">Experiences</h2>
                <h3 class="fs-subtitle">Vos experiences significatives</h3>
                <input type="text" name="titre2" placeholder="titre" />
                <textarea name="description2" placeholder="Description"></textarea>
                <input type="text" name="anciennete" placeholder="anciennete" />
                </select>
                <input type="date" name="debutExperience" placeholder="debut">
                <input type="date" name="finExperience" placeholder="fin">
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
                <select name="niveau2" style="color: black; width: 265px">
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
