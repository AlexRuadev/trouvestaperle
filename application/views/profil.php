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
                        <td><?php echo $donnée['utilisateurs_nom'] ?></td>
                    </tr>

                    <tr>
                        <td>Prénom :</td>
                        <td><?php echo $donnée['utilisateurs_prenom'] ?></td>

                    </tr>

                    <tr>
                        <td>Email :</td>
                        <td><?php echo $donnée['utilisateurs_mail'] ?></td>
                    </tr>

                    <tr>
                        <td>Téléphone :</td>
                        <td><?php echo $donnée['utilisateurs_num'] ?></td>

                    </tr>

                    <tr>
                        <td>Date de Naissance:</td>
                        <td><?php echo strftime('%d/%m/%Y',strtotime($donnée['utilisateurs_naissance']))?></td>
                    </tr>
                    <tr>
                        <td>Code postal :</td>
                        <td><?php echo $donnée['utilisateurs_codepostal'] ?></td>
                    </tr>
                    <tr>
                        <td>Permis :</td>
                        <td><?php echo $donnée['utilisateurs_permis'];?></td>
                    </tr>
                </table>
                <div class="modifbutton"><a class="block-center" href="<?php echo base_url(); ?>Utilisateurs/modifProfil/<?php echo $_SESSION['utilisateurs_id'] ?>"><button              class="buttonmodifier ">Modifier</button></a></div>

            </div>

        </div>
