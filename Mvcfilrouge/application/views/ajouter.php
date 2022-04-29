<?php echo form_open(); ?>


<div class="containerform">

<div class="form-group">
   
   <input type="hidden" name="pro_id" id="pro_id" class="form-control">

</div> 

<div class="form-group">
   <label for="pro_name">Quel est le nom de votre produit ?</label>
   <input type="text" name="pro_name" id="pro_name" class="form-control">
   <?php echo form_error('pro_name','<div class="alert alert-danger">','</div>'); ?>
</div> 

<div class="form-group">
   <label for="pro_description">Donner une déscription à votre produit</label>
   <textarea type="text" name="pro_description" id="pro_description" class="form-control"></textarea>
   <?php echo form_error('pro_description','<div class="alert alert-danger">','</div>'); ?>
</div> 

<div class="form-group">
   <label for="pro_prix_ht"> Quel est le prix HT</label>
   <input type="text" name="pro_prix_ht" id="pro_prix_ht" class="form-control">
   <?php echo form_error('pro_prix_ht','<div class="alert alert-danger">','</div>'); ?>
</div> 

<div class="form-group">
   <label for="pro_qtite">Quel quantité souhaitez vous ajouter ?</label>
   <input type="text" name="pro_qtite" id="pro_qtite" class="form-control">
   <?php echo form_error('pro_qtite','<div class="alert alert-danger">','</div>'); ?>
</div> 

<div class="form-group">
   <label for="pro_qtit_ale">A partir de quel quantité souhaiter vous réaprovisionner vôtre stock  ?</label>
   <input type="text" name="pro_qtit_ale" id="pro_qtit_ale" class="form-control">
   <?php echo form_error('pro_qtit_ale','<div class="alert alert-danger">','</div>'); ?>
</div> 

<div class="form-group">
   <label for="pro_photo">Ajouter le chemin de votre image ! exemple :("http://localhost/mvcfilrouge/assets/images/guitare1.png)</label>
   <input type="text" name="pro_photo" id="pro_photo" class="form-control">
   <?php echo form_error('pro_photo','<div class="alert alert-danger">','</div>'); ?>
</div> 

<div class="form-group">
   <label for="cat_id">A quel categorie appartient votre produit?</label>
   <select name="cat_id"> 
      <?php
     foreach($liste_categorie as $row ) 
     {?>
      <option value="<?= $row->cat_id ?>"><?= $row->cat_nom ?></option>
      
   <?php  }
    ?>
</select>  
   
   <?php echo form_error('cat_id','<div class="alert alert-danger">','</div>'); ?>
</div>

<button type="submit" class="btn btn-dark mt-3">Ajouter</button>    
</form>
</div>

