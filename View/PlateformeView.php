
    <center>
        <h2>Les informations de vos animés préférés</h2>
        <p>Voici la liste des plateformes proposant des animés. </br>
        Cliquez sur l'une d'entres elles pour connaitre les animés de notre liste que la plateforme propose:</p></br></br></br></br>
    </center>
    <?php 
        $i=0;
        while($ret[$i]){
        ?>
        <html>
        <center>
    <div class="anime">
            <element>
            <p><?php echo "<a href='./?action=ficheP&id_plateforme=" .$ret[$i]->getId(). "'class = 'Titre'>"."</br></br> <img  src=./photo/assets/Plateforme/".$ret[$i]->getPhoto() . ".png width='173'/></br></br></br></br></br>
            </a>"; ?></p>
    </div>
        </center>
        </html>
        <?php
        $i++;
    }
    ?>

