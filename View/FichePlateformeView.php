<h1>Les animés de notre liste disponible sur <?php echo $plateforme->getNomPlateforme();?></h1>

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
