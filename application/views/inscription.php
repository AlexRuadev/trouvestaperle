

<?php echo validation_errors(); ?>

<?php echo form_open('Utilisateurs/create'); ?>


<label for="nom">Title</label>
<input type="input" name="nom" /><br />
<label for="prenom">prenom</label>
<input type="input" name="prenom" /><br />

<label for="mail">mail</label>
<input type="input" name="mail" /><br />



<label for="motdepasse">motdepasse</label>
<input type="input" name="motdepasse" /><br />



<input type="submit" name="submit" value="Create news item" />

</form>
