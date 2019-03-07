<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<div class="contain">
    <form class="modifprofil" action="<?php echo base_url(); ?>Utilisateurs/modifProfil/<?php echo $_SESSION['utilisateurs_id'] ?>"  method="post">
    <div class="modifprofil">

        <div class="table-users">

            <div class="header">Profil</div>

            <table cellspacing="0">

                <tr>
                    <td>Nom :</td>
                    <td>
                        <input type="text" name="nom" class="profilInput" id="nom" value="<?php echo $donnée['utilisateurs_nom'] ?>">
                        <?php echo form_error('nom') ?>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        </td>
                </tr>

                <tr>
                    <td>Prénom :</td>
                    <td>
                        <input type="text" name="prenom" class="profilInput" id="nom" value="<?php echo $donnée['utilisateurs_prenom'] ?>">
                        <?php echo form_error('prenom') ?>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                    </td>
                </tr>

                <tr>
                    <td>Email :</td>
                    <td>
                        <input type="text" name="mail" class="profilInput" id="nom" value="<?php echo $donnée['utilisateurs_mail'] ?>">
                        <?php echo form_error('mail') ?>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                    </td>
                </tr>

                <tr>
                    <td>Téléphone :</td>
                    <td>
                        <input type="text" name="telephone" class="profilInput" id="nom" value="<?php echo $donnée['utilisateurs_num'] ?>">
                        <?php echo form_error('telephone') ?>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                    </td>
                </tr>
                <tr>
                    <td>Date de Naissance:</td>
                    <td>
                        <input type="date" name="naissance" class="profilInput" id="nom" value="<?php echo $donnée['utilisateurs_naissance'] ?>">
                        <?php echo form_error('naissance') ?>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                    </td>
                </tr>
                <tr>
                    <td>Code postal :</td>
                    <td>
                        <input type="text" name="codepostal" class="profilInput" id="nom" value="<?php echo $donnée['utilisateurs_codepostal'] ?>">
                        <?php echo form_error('codepostal') ?>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                    </td>
                </tr>
                <tr>
                    <td>Permis :</td>
                    <td>
                        <input type="text" name="permis" class="profilInput" id="nom" value="<?php echo $donnée['utilisateurs_permis'] ?>">
                        <?php echo form_error('permis') ?>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                    </td>
                </tr>
            </table>
            </form>
            <div class="modifbutton"><input type="submit" class="buttonmodifier " name="submitedit" value="Enregistrer"></div>

        </div>

    </div>


