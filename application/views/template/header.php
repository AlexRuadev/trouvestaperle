<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

</head>
<body>

<header>
    <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top">
        <div class="container navbar-container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                    <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>img/logosansnom.png" alt="logo"></a>

            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url(); ?>">Accueil</a></li>
					<!--Ne s'affiche que si une session est ouverte-->
					<?php if (isset($_SESSION['utilisateurs_prenom'])) {
						echo '<li><a href="' . base_url('cv/Formcv') . '">Ajouter un Cv</a></li>';
					}
    				?>
					<li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                    </li>
                </ul>
            </div>
            <div class="top-social">
                <ul id="top-social-menu">
                    <li><a href="#"><i class="fa fa-google"></i></a></li>

                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<!--Ne s'affiche que si une session est ouverte-->
							<?php if (isset($_SESSION['utilisateurs_prenom'])) {
								echo '
					<li>Bonjour ' . $_SESSION['utilisateurs_prenom'] . '</li>
                    <li><a href="' . base_url('Utilisateurs/deconnexionUser') . '">Deconnexion</a></li>';
								}
							?>
                </ul>
            </div>
        </div>
    </nav>


</header>


