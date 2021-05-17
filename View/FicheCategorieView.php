<h1>Les animés de la catégorie <?php echo $categorie->getnomCat();?></h1>

<?php
$i=0;
while($anime[$i]){

?>
<div  class="anime">
    <element>
        <center>
            <p>
                <?php echo "<a href='./?action=fiche&code_anime=" . $anime[$i]->getCode() . "'class = 'Titre'>" . $anime[$i]->getTitre()."</br> <img  src=./photo/assets/Anime/".$anime[$i]->getChemin() . ".jpg width='300'/></br></br></br></br></br></a>"; ?>
            </p>
        </center>
    </element>
</div>

<?php
$i++;
}
?>