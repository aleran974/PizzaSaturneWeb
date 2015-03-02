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
        <section id="titre">
            <h1><u>Nos Pizzas Personnalisées</u></h1>
        </section>
           <section id="tabproduit">
            <?php
                $SQLQuery ='select rec_nom,rec_tarifpetite,rec_tarifgrande from recette inner join type on recette.rec_typ_id = type.typ_id where typ_libelle = "pizza" and rec_nom like \'%ingredients\'';
                $SQLResult=mysqli_query($idconn,$SQLQuery);
                
                $Script='<table>'.'<tr><th>'.'pizza'.'</th>'.'<th>'.' Petite 25cm'.'</th>'.'<th>'.'Grande 30cm'.'</th></tr>';
                    while ($SQLRow = mysqli_fetch_array($SQLResult)){
                    $Script.= '<tr><td>'.utf8_encode($SQLRow['rec_nom']).'</td>'.'<td>'.$SQLRow['rec_tarifpetite'].'€'.'<td>'.$SQLRow['rec_tarifgrande'].'€'.'</td></tr>'; 
                    }
                    $Script.= '</table>';
                    print($Script);
            
            ?>
           </section>
        <section id="ingredient">
            <h3 id="titreing"><u>Voici la liste des Ingredients disponibles</u></h3>
            <article class="viande">
                  <?php
                    $SQLQuery ='select ing_nom from ingredient inner join typing on ingredient.ing_typing_id = typing.typing_id where ing_id !=38 and ing_typing_id =1';
                    $SQLResult=mysqli_query($idconn,$SQLQuery);

                    $Script='<table>'.'<tr><th>'.'Viande'.'</th></tr>';
                        while ($SQLRow = mysqli_fetch_array($SQLResult)){
                        $Script.= '<tr><td>'.utf8_encode($SQLRow['ing_nom']).'</td></tr>'; 
                        }
                        $Script.= '</table>';
                        print($Script);

                ?>
            </article>
            <article class="legume">
                <?php
                    $SQLQuery ='select ing_nom from ingredient inner join typing on ingredient.ing_typing_id = typing.typing_id where ing_typing_id =2';
                    $SQLResult=mysqli_query($idconn,$SQLQuery);

                    $Script='<table>'.'<tr><th>'.'Legumes'.'</th></tr>';
                        while ($SQLRow = mysqli_fetch_array($SQLResult)){
                        $Script.= '<tr><td>'.utf8_encode($SQLRow['ing_nom']).'</td></tr>'; 
                        }
                        $Script.= '</table>';
                        print($Script);

                ?>
            </article>
            <article class="fruit">
                 <?php
                    $SQLQuery ='select ing_nom from ingredient inner join typing on ingredient.ing_typing_id = typing.typing_id where ing_typing_id =3';
                    $SQLResult=mysqli_query($idconn,$SQLQuery);

                    $Script='<table>'.'<tr><th>'.'Fruits'.'</th></tr>';
                        while ($SQLRow = mysqli_fetch_array($SQLResult)){
                        $Script.= '<tr><td>'.utf8_encode($SQLRow['ing_nom']).'</td></tr>'; 
                        }
                        $Script.= '</table>';
                        print($Script);

                ?>
            </article>
            <article class="laitier">
                 <?php
                    $SQLQuery ='select ing_nom from ingredient inner join typing on ingredient.ing_typing_id = typing.typing_id where ing_typing_id =4';
                    $SQLResult=mysqli_query($idconn,$SQLQuery);

                    $Script='<table>'.'<tr><th>'.'Produits Laitiers'.'</th></tr>';
                        while ($SQLRow = mysqli_fetch_array($SQLResult)){
                        $Script.= '<tr><td>'.utf8_encode($SQLRow['ing_nom']).'</td></tr>'; 
                        }
                        $Script.= '</table>';
                        print($Script);

                ?>
            </article>
            <article class="autres">
                 <?php
                    $SQLQuery ='select ing_nom from ingredient inner join typing on ingredient.ing_typing_id = typing.typing_id where ing_typing_id =5';
                    $SQLResult=mysqli_query($idconn,$SQLQuery);

                    $Script='<table>'.'<tr><th>'.'Autres'.'</th></tr>';
                        while ($SQLRow = mysqli_fetch_array($SQLResult)){
                        $Script.= '<tr><td>'.utf8_encode($SQLRow['ing_nom']).'</td></tr>'; 
                        }
                        $Script.= '</table>';
                        print($Script);

                ?>
            </article>
            <article class="base">
                 <?php
                    $SQLQuery ='select ing_nom from ingredient inner join typing on ingredient.ing_typing_id = typing.typing_id where ing_typing_id =6';
                    $SQLResult=mysqli_query($idconn,$SQLQuery);

                    $Script='<table>'.'<tr><th>'.'Base '.'</th></tr>';
                        while ($SQLRow = mysqli_fetch_array($SQLResult)){
                        $Script.= '<tr><td>'.utf8_encode($SQLRow['ing_nom']).'</td></tr>'; 
                        }
                        $Script.= '</table>';
                        print($Script);

                ?>
            </article>
            <article class="poisson">
                 <?php
                    $SQLQuery ='select ing_nom from ingredient inner join typing on ingredient.ing_typing_id = typing.typing_id where ing_typing_id =7';
                    $SQLResult=mysqli_query($idconn,$SQLQuery);

                    $Script='<table>'.'<tr><th>'.'Poissons'.'</th></tr>';
                        while ($SQLRow = mysqli_fetch_array($SQLResult)){
                        $Script.= '<tr><td>'.utf8_encode($SQLRow['ing_nom']).'</td></tr>'; 
                        }
                        $Script.= '</table>';
                        print($Script);

                ?>
            </article>
                        <article class="epices">
                 <?php
                    $SQLQuery ='select ing_nom from ingredient inner join typing on ingredient.ing_typing_id = typing.typing_id where ing_typing_id =8';
                    $SQLResult=mysqli_query($idconn,$SQLQuery);

                    $Script='<table>'.'<tr><th>'.'Epices'.'</th></tr>';
                        while ($SQLRow = mysqli_fetch_array($SQLResult)){
                        $Script.= '<tr><td>'.utf8_encode($SQLRow['ing_nom']).'</td></tr>'; 
                        }
                        $Script.= '</table>';
                        print($Script);

                ?>
            </article>
        </section>

        
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
<?php
    mysqli_free_result($SQLResult);
    mysqli_close($idconn);
?>
</html>