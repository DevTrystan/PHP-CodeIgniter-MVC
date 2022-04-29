



<div class="formmodif">


<?php echo form_open(); ?>

<input type="hidden" name="pro_id" value="<?php echo set_value('pro_id',$produit->pro_id); ?>"> 

<div class="form-group">
   <label for="pro_name">Libellé</label>
   <input type="text" name="pro_name" id="pro_name" class="form-control" value="<?php echo set_value('pro_name', $produit->pro_name); ?>">
   
</div> 

<div class="form-group">
   <label for="pro_description">Description</label>
   <input type="text" name="pro_description" id="pro_description" class="form-control" value="<?php echo set_value('pro_description', $produit->pro_description); ?>">
  
</div> 

<div class="form-group">
   <label for="pro_prix_ht">Prix HT</label>
   <input type="text" name="pro_prix_ht" id="pro_prix_ht" class="form-control" value="<?php echo set_value('pro_prix_ht', $produit->pro_prix_ht); ?>">
</div> 

<div class="form-group">
   <label for="pro_qtite">Quantité</label>
   <input type="text" name="pro_qtite" id="pro_qtite" class="form-control" value="<?php echo set_value('pro_qtite', $produit->pro_qtite); ?>">
</div> 

<div class="form-group">
   <label for="pro_qtit_ale">Quantité Alert</label>
   <input type="text" name="pro_qtit_ale" id="pro_qtit_ale" class="form-control" value="<?php echo set_value('pro_qtit_ale', $produit->pro_qtit_ale); ?>">
</div> 

<div class="form-group">
   <label for="pro_photo">Modifier votre photo avec le chemin exemple : ("http://localhost/mvcfilrouge/assets/images/guitare1.png)</label>
   <input type="text" name="pro_photo" id="pro_photo" class="form-control" value="<?php echo set_value('pro_photo', $produit->pro_photo); ?>">
</div> 

<button type="submit" class="btn btn-dark mt-3">Modifier</button> 
</form>    
</div>
  