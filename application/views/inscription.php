
<?php echo validation_errors(); ?>

<?php echo form_open('Utilisateurs/create'); ?>
<?php echo form_open('Utilisateurs/login'); ?>

<label for="nom">Nom</label>
<input type="text" name="nom" /><br />

<label for="prenom">Prenom</label>
<input type="text" name="prenom" /><br />

<label for="mail">Email</label>
<input type="email" name="mail" /><br />

<label for="motdepasse">motdepasse</label>
<input type="password" name="motdepasse" /><br />

<input type="submit" name="submit" value="Create news item" />

</form>
