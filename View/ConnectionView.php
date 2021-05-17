<link rel="stylesheet" type="text/css" href="./CSS/authentification.css"/>


<body class="connexion">

<div id="connexion">

<div class="logo">
    <img src="photo/assets/logo/logoAc.jpg" width="200">
</div>

 <div class="description">
    <h2>
        Retrouvez l'actualité mangas et animés sur Animactu !
    </h2>
  <h4>
        Animactu vous propose toutes l'actualité sur vos mangas et animés préféré! Vous retrouverez 
        tous vos genres favoris comme les shônen, shôjo, seinen et bien plus encore. Conectez-vous ou 
        rejoignez notre communauté gratuitement pour accéder à tout notre contenue!
    </h4>

</div>

<div class="form">
<center>
    <center><img src="photo/assets/logo/logo.jpg" width="150"></center> <br/>
    <p2>
        Se connecter à Animeactu
    </p2> <br/><br/>
    <form action="./?action=connexion" method="POST">

        <div class="input-form">
            <input type="text" name="pseudo" id="pseudo" placeholder=" " />
            <label for="text">Pseudo</label>
        </div>

        <div class="input-form">
            <input type="password" name="mdp" id="mdp" placeholder=" " />
            <label for="password">Mot de passe</label>
        </div>

        <div class="submit-form">
            <button type="submit">Connexion</button>
        </div>

    </form>
    
<a href="./?action=inscription">Créer un compte Animactu !</a>
</center>
</div>
</div>
</br></br>

</body>