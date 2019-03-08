<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

	<div class="contain">
        <div class="modifprofil">

            <div class="table-users">

                <div class="header">Profil</div>

                <table cellspacing="0">

                    <tr>
                        <td>Nom :</td>
                        <td class="usercolor"><?php echo $donnée['utilisateurs_nom'] ?></td>
                    </tr>

                    <tr>
                        <td>Prénom :</td>
                        <td class="usercolor"><?php echo $donnée['utilisateurs_prenom'] ?></td>

                    </tr>

                    <tr>
                        <td>Email :</td>
                        <td class="usercolor"><?php echo $donnée['utilisateurs_mail'] ?></td>
                    </tr>

                    <tr>
                        <td>Téléphone :</td>
                        <td class="usercolor"><?php if(isset($donnée['utilisateurs_num'])){ echo $donnée['utilisateurs_num']; }else{
                                echo "Champ non renseigné";} ?>
                        </td>

                    </tr>

                    <tr>
                        <td>Date de Naissance:</td>
                        <td class="usercolor"><?php echo strftime('%d/%m/%Y',strtotime($donnée['utilisateurs_naissance']))?></td>
                    </tr>
                    <tr>
                        <td>Code postal :</td>
                        <td class="usercolor"><?php if(isset($donnée['utilisateurs_codepostal'])) { echo $donnée['utilisateurs_codepostal'];}
                        else { echo "Champ non renseigné";} ?></td>
                    </tr>
                    <tr>
                        <td>Permis :</td>
                        <td class="usercolor"><?php if(isset($donnée['utilisateurs_num'])){ echo $donnée['utilisateurs_permis'];}else{
                            echo "Champ non renseigné";} ?></td>
                    </tr>
                </table>
                <div class="modifbutton"><a class="block-center" href="<?php echo base_url(); ?>Utilisateurs/modifProfil/<?php echo $_SESSION['utilisateurs_id'] ?>"><button              class="buttonmodifier ">Modifier</button></a></div>

            </div>

        </div>
