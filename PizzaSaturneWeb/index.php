<?php
    include'script/dbconnexion.php';
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style/pizz.css" />
        <title>Pizza Saturne</title>
    </head>

    <body>
        <header>

            <div id="cadre1">
                <p class="infos1"> Ouvert du </br>
                    Mardi au Samedi</br>
                    de 11h à 22h</p>

            </div>
            <div id="logo1">
                <img alt="logo" src="image/logo.png" height="150px" width ="150px">
            </div>
            <div id="cadre2">
                <p class="infos2"><u><span class="nom">Pizza Saturne</span></u><br/>
                Tel: 05 56 46 08 59</br>
                Pâte à Pizza fraîche et Maison</p>
            </div>
            <div id="logo2">
                <img alt="logo" src="image/logo.png" height="150px" width ="150px">
            </div>
            <div id="cadre3">
                <p class="infos1"> Ouvert le </br>
                    Dimanche</br>
                    de 18h à 22h</p>
            </div>
        </header>
        <nav id="monmenu">
            <ul class="niveau1">
                <li>
                    <ul class="niveau2">
                        <li class="accueil"><a href="index.php">Accueil</a></li>
                        <li id="pizza"><a href="#">Pizza</a>
                            <ul class="niveau3">
                                <li><a href="basetomate.php">Base Tomate</a></li>
                                <li><a href="basecreme.php">Base Crème</a></li>
                                <li><a href="poisson.php">Poissons</a></li>
                                <li><a href="alacarte.php">A la carte</a></li>
                            </ul>
                        </li>
                        <li><a href="bruchettas.php">Bruchettas</a></li>
                        <li><a href="panini.php">Panini</a></li>
                        <li><a href="pates.php">Pâte</a></li>
                        <li><a href="snack.php">Snack</a></li>
                        <li><a href="dessert.php">Dessert</a></li>
                        <li><a href="boissons.php">Boissons</a></li>
                        <li><a href="formule.php">Nos Menus</a></li>
                        <li><a href="livredor.php">Livre d'or</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </li>
            </ul>	
        </nav>
        <div id="annonce">
            <div class ="platdujour">
                <h2><u>Plat du Jour</u></h2>
                <p>lundi : magret de canard</p>
            </div>	
            <div class="offredumoment">
                <h2><u>Offre du Moment</u></h2>
                <p>Pizza Raclette</p>
            </div>
        </div>
        <div id="promotion">
            <div class="emporter">
                <h3><u>A Emporter</u></h3>
                <p> 3 grandes pizzas = la moins Chères offertes<br/>
                    ou<br/>
                    2 grandes pizzas = 17 €<p>
            </div>
            <p id="ou"> ou </p>
            <div class="livraison">
                <h3><u>En Livraison</u></h3>
                <p> 2 grandes pizzas = 19 €</p>
                    
            </div>
        </div>
        <div id="facebook_accueil">
            <a href="https://www.facebook.com/saturne.pessac?fref=ts"target="_blank"><img src="image/facebook_accueil.png" alt="html5" /></a> 
        </div>
        
        <footer>
            <a href="https://www.google.fr/maps/place/Pizza+Saturne/@44.807163,-0.627164,17z/data=!3m1!4b1!4m2!3m1!1s0xd54d8f6d0df81ff:0x51e401f95faf96" target="_blank">Plan d'accès</a>
            <p> Copyright 2015 Pizza Saturne
                <?php
                $date = date("d/m/Y");
		$heure = date("H:i");
		print ($date.'-'.$heure);
                ?>
            </p>
        </footer>
    </body>

</html>