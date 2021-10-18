<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Untitled</title>
        <link rel="stylesheet" href="css/style.css">
	</head>

	<body>
            <section>
				<div class="container">
                    <header>
                            <ul>
                        <?php if(visiteurDAO::isloggedon()){?>
                            <li><a href="" class="cool">Accueil</a></li>
                            <li><a href="./?action=deconnexion">se deconnecter</a></li>
                            <li><a href="" class="cool">Accueil</a></li>
                            <li><a href="" class="cool">Accueil</a></li>
                         <?php } ?>
                            </ul>
                    </header>
                        </div>
            </section>


