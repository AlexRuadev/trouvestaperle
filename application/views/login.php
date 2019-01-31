

<?php  echo validation_errors(); ?>

<?php echo form_open('Utilisateurs/login'); ?>


<label for="mail">Email</label>
<input type="email" name="mail" /><br />



<label for="motdepasse">Mot de passe</label>
<input type="password" name="motdepasse" /><br />
<?php


if (isset($error)){
    echo $error;
}?>



<input type="submit" name="submitted" value="Connexion" />

</form>
