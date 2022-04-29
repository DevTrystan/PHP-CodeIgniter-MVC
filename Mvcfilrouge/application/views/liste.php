<div class="row" id="produits">
    <h1>Liste des produits</h1>
        <div class="col-12">    
                <a href="<?= site_url("scriptajout/ajouter"); ?>" class="btn btn-primary mb-3"> Ajouter un produit</a>
            <table>
                <tr style='border:2px solid black; background-color: teal'>
                        
                    <td style='border:2px solid black;text-align:center; color: white'>PHOTO</td>
                    <td style='border:2px solid black;text-align:center; color: white'>ID</td>
                    <td style='border:2px solid black;text-align:center; color: white'>LIBELLE</td>
                    <td style='border:2px solid black;text-align:center; color: white'>DESCRIPTION</td>

                    <td style='border:2px solid black;text-align:center; color: white'>PRIX HT</td>
                    <td style='border:2px solid black; text-align:center;color: white'>Quantité</td>
                    <td style='border:2px solid black;text-align:center; color: white'>Quantité alert</td>
                </tr>
        <?php 
        foreach ($liste_produits as $row) 
        {
        ?>
            <tr>
                <td style='border:2px solid black;'><img src="<?= $row->pro_photo?>"></td>
                <td style='border:2px solid black;text-align:center;'><?= $row->pro_id ?></td>
                <td style="border:2px solid black;text-align:center;"><a href="<?= site_url("scriptmodif/modif").'/'.$row->pro_id?>" title="<?= $row->pro_name ?>"><?= $row->pro_name ?></a></td> 
                <td style='border:2px solid black;text-align:center;'><?= $row->pro_description ?></td>
                <td style='border:2px solid black;text-align:center;'><?= $row->pro_prix_ht ?></td>
                <td style='border:2px solid black;text-align:center;'><?= $row->pro_qtite ?></td>
                <td style='border:2px solid black;text-align:center;'><?=$row->pro_qtit_ale ?></td>
            </tr>
        <?php
            }
        ?>
    </table>

</div>
</div>
</body>
</html>