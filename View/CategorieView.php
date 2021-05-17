
<center>
    <h2>Les informations de vos animés préférés</h2>
    Voici la liste des catégories. </br>
    Cliquez sur l'une d'entres elles pour connaitre les animés de cette categorie</br></br></br></br>
</center>
<?php 
    $i=0;
    while($ret[$i]){
?>
<html>
<center>
    <element>
        <button class="categorie">
            <?php echo "<a href='./?action=ficheC&id_categorie=" .$ret[$i]->getIdC(). "'class = 'ac2'>"."</br></br>".$ret[$i]->getNomCat()."</br></br></br></br></br></br></a>"; ?>
        </button>
    </element>
</center>
</html>
<?php
    $i++;
    }
?>