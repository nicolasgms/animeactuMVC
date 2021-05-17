<!--<center>
    <h1>Rechercher un Anime</h1>
    <form action="./?action=search" method="POST">
    <input name='titre' type="search">
    <button type="submit">rechercher</button>
</center>

    <?php 
        $i=0;
        while($ret[$i]){
    ?>
    <html>
        <center>
        <div  class="anime">
            <element>
            <p><?php echo "<a href='./?action=fiche&code_anime=" . $ret[$i]->getCode() . "'class = 'Titre'>" . $ret[$i]->getTitre()."</br> <img  src=./photo/assets/Anime/".$ret[$i]->getChemin() . ".jpg width='300'/></C></br></br></br></br></br>
                "; ?></p>
            </element>
        </div>
        </center>
    </html>
    <?php
        $i++;
        }
    ?>
