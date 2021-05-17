
<center> 
    <h1>Mon Profil</h1>
    <img src="photo/assets/logo/logo.jpg" width="300">
</center>
</br>

<html>
    <center>
        <p>Bienvenue sur ton profil
        <b> 
            <?php echo AuthentificationDAO::getFirstNLoggedOn();?>
            <?php echo AuthentificationDAO::getLastNLoggedOn()?>  
        </b>retrouve toutes les infos sur tes animés préférés dans notre site Animeactu
        </p>
    </center>
</html>
</br></br></br>
<center>
    <p>
        
        <a href="./?action=deconnexion" class="Titre">Deconnexion</a></br>
        <?php echo "<a href='./?action=deleteU&pseudo=".$_SESSION["pseudo"]."'class='Titre''>"?>Supprimer mon compte</a></br>
        <?php echo "<a href='./?action=updatePSWD&pseudo=".$_SESSION["pseudo"]."'class='Titre''>"?>Changer mon mot de passe</a>
    </p>
    
</center>