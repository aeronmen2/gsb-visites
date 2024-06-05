<!DOCTYPE html>
<html lang="en">

<head>
        <title>GSB - Gestion des visites</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="icon" href="./images/logo2.ico">
        <script src="https://kit.fontawesome.com/c003989092.js" crossorigin="anonymous"></script>
</head>

<body>
        <div id="formlogin">
                <div id="loginchild">
                        <a href="./?action=connexion"><img src="./images/logo.png" id="logoform" width=150px;></a>
                        <form action="./?action=connexion" method="post" id="formloginpage">
                                <a>Identifiant</a>
                                <input type="text" name="login" autofocus placeholder="Identifiant" required /><br />
                                <a>Mot de passe</a>
                                <p>
                                <input type="password" name="mdp" autofocus placeholder="Mot de passe" required id="myInput" /> <br />
                                </p>
                                <input type="submit" value="Connexion">

                        </form>
                </div>
        </div>
</body>