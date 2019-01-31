<section class="full-width-img">
    <div class="margeform">
        <form id="msform">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Informations personnelles</li>
                <li>Experiences & competences</li>
                <li>Personal Details</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Informations personnelles</h2>
                <h3 class="fs-subtitle">Etape 1</h3>
                <input type="text" name="nom" placeholder="Nom" />
                <input type="text" name="prenom" placeholder="Prénom" />
                <abbr title="Date de naissance">
                <input type="date" name="ddn" placeholder="Date de naissance" />
                </abbr>
                <input type="text" name="phone" placeholder="Telephone" />

                <textarea name="address" placeholder="Adresse"></textarea>
                <input type="button" name="next" class="next action-button" value="Suivant" />
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Experiences</h2>
                <h3 class="fs-subtitle">Vos experiences significatives</h3>
                <input type="text" name="twitter" placeholder="Experience1" />
                <input type="text" name="facebook" placeholder="Experience2" />
                <h2 class="fs-title">Competences</h2>
                <input type="text" name="facebook" placeholder="Competence" />
                <input type="text" name="gplus" placeholder="Competence" />
                <input type="button" name="previous" class="previous action-button" value="Precedent" />
                <input type="button" name="next" class="next action-button" value="Suivant" />
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Diplomes</h2>
                <h3 class="fs-subtitle">Diplomes et formations obtenus</h3>
                <input type="text" name="fname" placeholder="Nom du diplome" />
                <input type="text" name="lname" placeholder="Nom de la formation" />

                <input type="button" name="previous" class="previous action-button" value="Precedent" />
                <input type="submit" name="submit" class="submit action-button" value="Convirmer" />
            </fieldset>
        </form>
    </div>
</section>
