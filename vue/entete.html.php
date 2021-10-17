<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Untitled</title>
        <link rel="stylesheet" href="css/style.css">
	</head>

	<body>
				<header class="header">
                        <nav>
                            <ul>
                               
                        <?php if(visiteurDAO::isloggedon()){?>
                            <li><a href="" class="cool">Accueil</a></li>
                         <a href="./?action=deconnexion">se deconnecter</a>
                         <?php } ?>
                            </ul>
                         </nav>
                </header>
		</nav>

