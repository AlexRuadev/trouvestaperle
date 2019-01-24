

<?php echo validation_errors(); ?>

<?php echo form_open('Utilisateurs/create'); ?>


<label for="nom">Nom</label>
<input type="text" name="nom" /><br />
<label for="prenom">prenom</label>
<input type="text" name="prenom" /><br />

<label for="mail">mail</label>
<input type="email" name="mail" /><br />



<label for="motdepasse">motdepasse</label>
<input type="password" name="motdepasse" /><br />



<input type="submit" name="submit" value="Create news item" />

</form>
