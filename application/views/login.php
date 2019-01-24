

<?php echo validation_errors(); ?>

<?php echo form_open('Utilisateurs/login'); ?>



<label for="mail">mail</label>
<input type="email" name="mail" /><br />


<?php echo form_error('motdepasse'); ?>
<label for="motdepasse">motdepasse</label>
<input type="password" name="motdepasse" /><br />



<input type="submit" name="submitted" value="Create news item" />

</form>
