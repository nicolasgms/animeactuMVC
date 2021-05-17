
<center>
    <h2>Les informations de vos animés préférés</h2>
    <h3>Voici la liste des animés</h3></br></br>

</center>
<div align="right">
    <form action="./?action=search" method="POST">
    <input name='titre' type="search" placeholder="Rechercher">
    <button type="submit">Valider</button>
</div>
    <?php 
        $i=0;
        while($ret[$i]){
    ?>
    <html>
        <div class="anime">
            <element>
            <p>
                <?php echo "<a href='./?action=fiche&code_anime=" . $ret[$i]->getCode() . "'class = 'Titre'>" . $ret[$i]->getTitre()."</br> <img  src=./photo/assets/Anime/".$ret[$i]->getChemin() . ".jpg width='300'/></br></br></br></br></br></a>"; ?>
            </p>
            </element>
        </div>
    </html>
    <?php
        $i++;
        }
    ?>
    </br>
    </br>
    </br>

    <?php 
        $i=0;
        while($unAnime[$i]){
    ?>
    <html>
    <center>
        <div  class="anime">
            <element>
                <p>
                    <?php echo "<a href='./?action=fiche&code_anime=" . $unAnime[$i]->getCode() . "'class = 'Titre'>" . $unAnime[$i]->getTitre()."</br> <img  src=./photo/assets/Anime/".$unAnime[$i]->getChemin() . ".jpg width='300'/></br></br></br></br></br></a>"; ?>
                </p>
            </element>
        </div>
        </center>
    </html>
    <?php
        $i++;
        }
    ?>



