<html><link rel="stylesheet" a href="./CSS/authentification.css" />

<div id="inscription">

    <div class="logo">
        <img src="photo/assets/logo/logoAc.jpg" width="200">
    </div>
    <center>
        <div class="formI">
            <center><img src="photo/assets/logo/logo.jpg" width="150"></center> <br/>
            <p2>
                Inscription à Animeactu
            </p2> <br/><br/>
            <form action="./?action=inscription" method="POST">
            <div class="input-form">
                <input type="text" name="pseudo" id="pseudo" placeholder=" " />
                <label for="pseudo">Pseudo</label>
            </div>

            <div class="input-form">
                <input type="text" name="last_name" id="last_name" placeholder=" " />
                <label for="last_name">Nom</label>
            </div>

            <div class="input-form">
                <input type="text" name="first_name" id="first_name" placeholder=" " />
                <label for="first_name">Prénom</label>
            </div>

            <div class="input-form">
                <input type="password" name="mdp" id="mdp" placeholder=" " />
                <label for="mdp">Mot de passe</label>
            </div>
            <p3>
                En cliquant sur s'inscrire, vous acceptez les conditions générales d'utilisations.
            </p3> <br/><br/>

            <div class="submit-form">
                <button type="submit">S'inscrire</button>
            </div>
            </form>
        </div>
    </center>
</div>
</html>