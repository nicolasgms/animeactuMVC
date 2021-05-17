<center><h1><?= $unAnime->getTitre();?></h1></center>
<div id="Fiche">
<div id="fichePhoto">
    <img src="./photo/assets/Anime/<?=$unAnime->getChemin();?>.jpg" width="330"/>
</div>
<div id="ficheInfo">
<p class="fiche"><b><?=  $unAnime->getTitre();?></b> est un manga écrit par <?=$unAnime->getMangaka();?></br></br></br>
Année de production:</br></br> <?=$unAnime->getAnnee();?></br></br></br>
Nombre d'épisodes:</br></br> <?=$unAnime->getNbEp();?></br></br></br>
Synopsis:</br></br><?= $unAnime->getSynopsis();?></br></br></br>
</div>
