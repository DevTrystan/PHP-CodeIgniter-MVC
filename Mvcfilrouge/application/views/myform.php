
<div class="center">






<?php echo form_open(); ?>


<h5>Nom</h5>
<input type="text" name="cli_nom" value="<?php echo set_value('cli_nom'); ?>"size="50" />
<?php echo form_error('cli_nom','<div class="alert alert-danger">','</div>'); ?>
<br>

<h5>prenom</h5>
<input type="text" name="cli_prenom" value="<?php echo set_value('cli_prenom'); ?>"size="50" />
<?php echo form_error('cli_prenom','<div class="alert alert-danger">','</div>'); ?>
<br>

<h5>TYPE DE Client (professionnel ou particulier)</h5>
<input type="text" name="cli_type" value="<?php echo set_value('cli_type'); ?>"size="50" />
<?php echo form_error('cli_type','<div class="alert alert-danger">','</div>'); ?>
<br>


<h5>Adresse</h5>
<input type="text" name="cli_adresse" value="<?php echo set_value('cli_adresse'); ?>" size="50" />
<?php echo form_error('u_prenom','<div class="alert alert-danger">','</div>'); ?>

<h5>Code postale</h5>
<input type="text" name="cli_codepostal" value="<?php echo set_value(htmlspecialchars('cli_codepostal')); ?>" size="50" />
<?php echo form_error('cli_codepostal','<div class="alert alert-danger">','</div>'); ?>

<h5>Ville</h5>
<input type="text" name="cli_ville" value="<?php echo set_value(htmlspecialchars('cli_ville')); ?>" size="50" />
<?php echo form_error('cli_ville','<div class="alert alert-danger">','</div>'); ?>

<h5>Mot de passe</h5>
<input type="text" name="cli_password" value="<?php echo set_value('cli_password'); ?>" size="50" />
<?php echo form_error('cli_password"','<div class="alert alert-danger">','</div>'); ?>

<h5>Confirmation de mot de passe</h5>
<input type="text" name="cli_conf_password" value="<?php echo set_value('cli_conf_password'); ?>" size="50" />
<?php echo form_error('cli_conf_password','<div class="alert alert-danger">','</div>'); ?>

<h5>Email</h5>
<input type="text" name="cli_mail" value="<?php echo set_value('cli_mail'); ?>" size="50" />
<?php echo form_error('cli_mail','<div class="alert alert-danger">','</div>'); ?>
<br>

<h5>Commerciaux atitré </h5>
<input type="text" name="commerciaux_id" value="<?php echo set_value('commerciaux_id'); ?>" size="50" />

<div><input type="submit" value="Valider"  /></div>

</form>

</div>