<?php
    include'script/dbconnexion.php';
 ?>
<?php
                
                
                
                if (!empty($_POST)){
                    extract($_POST);
                    $SQL =  "INSERT INTO article(art_pseudo,art_commentaire)values('".utf8_decode($pseudo)."','".utf8_decode($commentaire)."')";
                    $requete = mysqli_query($idconn,$SQL);
                    header('Location: livredor.php');                   
                }  
                    
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
        <section id="titre">
            <h1><u>Livre d'Or                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       </u></h1>
        </section>
        <section id="form">
            <form id=form" method="post" action="livredor.php"> 
                <div id="formpseudo"><label>Pseudo:</label> <input type="text" name="pseudo" /></div>
                <textarea id="zonecom" name="commentaire" id="commentaire" rows="5" cols="50" placeholder="votre commentaire"></textarea>
                <input type="submit" name="valider" value="envoyer"/>                 
            </form>	
        </section> 
        <section id="affichagelivre">
             <?php
                $SQLQuery ='select art_pseudo , art_commentaire from article;';
                $SQLResult=mysqli_query($idconn,$SQLQuery);
                
                $Script='<table>'.'<tr><th>'.'Pseudo'.'</th>'.'<th>'.'Commentaire'.'</th></tr>';
                    while ($SQLRow = mysqli_fetch_array($SQLResult)){
                    $Script.= '<tr><td>'.  utf8_encode($SQLRow['art_pseudo']).'</td>'.'<td>'.utf8_encode($SQLRow['art_commentaire']).'</td></tr>'; 
                    }
                    $Script.= '</table>';
                    print($Script);
                
                    
            ?>
        </section>
        <footer>
           <a href="https://www.google.fr/maps/place/Pizza+Saturne/@44.807163,-0.627164,17z/data=!3m1!4b1!4m2!3m1!1s0xd54d8f6d0df81ff:0x51e401f95faf96" target="_blank">Plan d'accès</a>
            <p>Copyright 2015 Pizza Saturne
                <?php
                $date = date("d/m/Y");
		$heure = date("H:i");
		print ($date.'-'.$heure);
                ?>
            </p>
        </footer>
    </body>
<?php
    mysqli_free_result($SQLResult);
    mysqli_close($idconn);
?>
</html>