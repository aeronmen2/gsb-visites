

<!-- <img class="wave" src="images/wave.png"> -->
<!-- <div class="container">
    <div class="img">
    <img class="vague" src="images/illustration/<?php echo rand(1,11)?>.png">
</div> -->


<div id="container">

    <form action="./?action=connexion" method="post" class="form" id="login">

        <h1 class="form__title">Connexion GSB</h1>
        <div class="form__message form__message--error"></div>
        <div class="form__input-group">
        <input type="text" class ="form__input" name="login"  autofocus placeholder="Identifiant" required/><br />
        <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">
        <input type="password" class="form__input" name="mdp" autofocus placeholder="Mot de passe" required/><br />
        <div class="form__input-error-message"></div>
        </div>

        <button class="form__button" type="submit"> Connexion </button>

    </form>
</div>