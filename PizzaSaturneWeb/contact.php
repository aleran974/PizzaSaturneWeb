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
        <section id="titre">
            <h1><u>Informations</u></h1>
        </section>
        
        <section id="infos">
            <h2>Pizza Saturne</h2>
            <p>42 avenue jean Jaurès</p>
            <p>33600 Pessac</p>
            <p>tel: 05 56 46 08 59</p>
             
            <h4> Heure d'ouverture</h4>
            <p> Du Mardi au Samedi : 11h à 22h</p>
            <p> Le Dimanche : 18h à 22h</p>
        </section>
        <section id="facebook">
            
            <a href="https://www.facebook.com/saturne.pessac?fref=ts" target="_blank"><img src="image/facebook.png" alt="html5"/></a> 
        </section>
        <section id="plan">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2830.7068313598365!2d-0.6271639999999999!3d44.807162999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd54d8f6d0df81ff%3A0x51e401f95faf96!2sPizza+Saturne!5e0!3m2!1sfr!2sfr!4v1424863602285" width="400" height="200" frameborder="0" style="border:0"></iframe>
        </section>
        <footer>
            <p>Copyright 2015 Pizza Saturne
                <?php
                $date = date("d/m/Y");
		$heure = date("H:i");
		print ($date.'-'.$heure);
                ?>
            </p>
        </footer>
    </body>

</html>