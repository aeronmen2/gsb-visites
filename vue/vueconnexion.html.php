<!DOCTYPE html>
<html lang="en">
	<head>
		<title>GSB - Gestion des visites</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="icon" href="./images/logo2.ico">
</head>
    
<!-- <img class="wave" src="images/wave.png"> -->
<!-- <div class="container">
    <div class="img">
    <img class="vague" src="images/illustration/<?php echo rand(1,11)?>.png">
</div> -->


<section class="login">
<h1>Connexion GSB</h1>
<div class="login-image">
<a href="./?action=connexion" ><img src="./images/logo.png" class="logo" width=150px;></a>
</div>
<div class="containerlogin">
    <form action="./?action=connexion" method="post" class="form" id="login">
        <input type="text" class ="form__input" name="login"  autofocus placeholder="Identifiant" required/><br />
        </div>
        <input type="password" class="form__input" name="mdp" autofocus placeholder="Mot de passe" required/><br />
        </div>
        <button class="form__button" type="submit"> Connexion </button>
    </form>
</div>
</section>
