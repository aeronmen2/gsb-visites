<!DOCTYPE html>
<html lang="fr">

<head>
    <title>GSB - Gestion des visites</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="./images/logo2.ico">

    <script src="https://kit.fontawesome.com/c003989092.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>


</head>

<body>
    <section class="bloc">
        <div class="container">
            <header>

                <a href="./?action=accueilvisiteur"><img src="./images/logo.png" class="logo"></a>
                <ul>
                    <?php if (visiteurDAO::isloggedon()) { ?>
                        <li><a data-tilt data-tilt-scale="1.112" href="./?action=rapport">Rapports</a></li>
                        <li><a data-tilt data-tilt-scale="1.112" href="./?action=medecin">Médecins</a></li>
                        <li><a data-tilt data-tilt-scale="1.112" href="./?action=deconnexion">Déconnexion</a></li>
                    <?php } ?>
                </ul>
            </header>

            <div class="loader-wrapper">
                <span class="loader"><span class="loader-inner"></span></span>
            </div>

            <script>
                $(window).on("load", function() {
                    $(".loader-wrapper").fadeOut("slow");
                });
            </script>