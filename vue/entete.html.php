<!DOCTYPE html>
<html lang="en">
	<head>
		<title>GSB - Gestion des visites</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="./images/logo2.ico">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script>
</head>

	<body>


            <section class="bloc">
				<div class="container">
                    <header>

                    <span data-tilt>
                    <a href="./?action=connexion" ><img src="./images/logo.png" class="logo" width=150px;></a>
                    </span>
                            <ul>
                        <?php if(visiteurDAO::isloggedon()){?>
                            <li><a href="" class="cool">Rapports</a></li>
                            <li><a href="" class="cool">Médecins</a></li>
                            <li><a href="./?action=deconnexion">Déconnexion</a></li>
                         <?php } ?>
                            </ul>
                    </header>
                </div>


