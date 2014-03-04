<?php $listeExtensions=array( "pdf", "xls", "zip" ); ?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- utf8 -->
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <!-- le navigateur des appareils mobiles comprendra qu'il ne doit pas simuler de largeur d'écran plus grande et votre site s'affichera correctement. -->
    <META NAME="Keywords" CONTENT="élico, helico, hélo, hélico, hélicoptère, chopper, AS 355, AS 341, helicopteres, pilote, photos, Helifrance, helicap, ecureuil, Robinson, Notar, Bell, Textron, Dauphin, EC 130, EC 135, EC 155, sécurite civile, sauvetage, rotor, voilure tournante, giraviation, aviation, avions, eleve pilote, simulation, simulateur, hugues 300, schweizer, passion, pilote, pilotage, hélitreuillage, aérien, aéronef, hugues, s&r, sar, huey, bell, liens, helico, avion, brevet, licence, tth, pph, ppl,cockpit, rotor, pale, turbine, vol, décollage, hélisurface, atterrissage, rotation, autorotation, flare, aix, Aix, Aix les milles, aérodrome, LFMA, lfma, hébert, HEBERT, hebert, anticouple, philippe, capiaumont, nicolas">
    <title>Rotor Club Aixois</title>
    <link href="css/style.css" rel="stylesheet" media="all" type="text/css">
    <!-- lien entre le CSS et le HTML -->
</head>

<body>
    <div id="header">
        <img src="images/header.jpg" />
        <!-- Insertion de la bannière -->
    </div>
    <!-- **************************************************MENU**************************************************************** -->
    <div id="menu">
        <!-- début de la div MENU -->
        <p>

                <a href="index.php">
                    <img src="images/menu/home.png" />
                </a>

                <a href="club.html">
                    <img src="images/menu/club.png" />
                </a>

                <a href="helico.html">
                    <img src="images/menu/helico.png" />
                </a>

                <a href="http://rotorclub.openflyers.fr/" target="_blank">
                    <img src="images/menu/reservation.png" />
                </a>

                <a href="navigation.html" target="_blank">
                    <img src="images/menu/menuNav.gif" />
                </a>

                <a href="media.html">
                    <img src="images/menu/media.png" />
                </a>

                <a href="liens.html">
                    <img src="images/menu/liens.png" />
                </a>

                <a href="restaurant.html">
                    <img src="images/menu/menuResto.gif" />
                </a>

                <a href="contact.php">
                    <img src="images/menu/contact.png" />
                </a>

        </p>
    </div>
    <!-- Fin de la div MENU -->
    <!-- **************************************************FIN_MENU**************************************************************** -->
    <div id="page">
        <!-- Début de la div PAGE -->
        <div id="contenu">
            <!-- début de la div CONTENU -->
            <div id="contenuTexte">
                <center>
                    <h1>Welcome aboard</h1>
                </center>
                <p>Le Rotor Club Aixois vous souhaite la bienvenue à bord de son site internet. Accrochez vos ceintures, sortez la check-list et partagez avec nous le plaisir de piloter un hélicoptère…</p>
                <h2>ECOLE</h2>
                <p>Créé en 2000, le Rotor Club Aixois est une association loi de 1901 à but non lucratif, dont l’objet est de rapprocher tous les passionnés de voilures tournantes. Un agrément délivré par la DGAC, nous autorise à former des pilotes privés
                    sur hélicoptère. Cette licence (PPL-H) permettra au titulaire de piloter tous les hélicoptères sur lesquels il est qualifié, sans limitation de distance, tout en emmenant des passagers avec qui, il pourra partager les frais.</p>
                <br />
                <h2>VOL D’INITIATION</h2>
                <p>Une formidable idée cadeau qui à coup sûr rendra heureux le bénéficiaire…</p>
                <p>Pour vous permettre d’accéder à ce plaisir inégalé, et pourquoi pas vous décider à rejoindre notre école de pilotage, nous vous proposons des vols d’initiation avec un instructeur expérimenté. Après un briefing explicatif, vous piloterez
                    notre hélicoptère pour un vol inoubliable ! Plaisir intense, dépaysement total, sensations garanties, voici le menu qui vous attend.</p>
            </div>
            <div class="rss">
                <!-- Debut div flux rss -->
                <br />
                <?php require_once( "feedparser.php"); ?>
                <table border="0.5" width=420px>
                    <?php include "filRSS.php"; $col=-1; foreach($fil as $quelFil=>$contenuFil) { $col=($col+1)%3; if ($col==0) echo "
                    <tr>";?>
                        <td class="cadre">
                            <b><center><?=$quelFil;?></center></b>
                            <br/>
                            <marquee behavior="scroll" direction="up" scrollamount="1" scrolldelay="1" loop="x" onmouseover="this.stop()" onmouseout="this.start()">
                                <?php echo FeedParser( "$contenuFil",10); ?>
                            </marquee>
                        </td>
                        <?php if ($col==2)echo "</tr>"; } ?>
                </table>
            </div>
            <!-- Fin flux rss -->
            <div id="imageAccueil">
                <img src="images/028.JPG" />
            </div>
            <div class="fin"></div>
        </div>
        <!-- Fin de la div CONTENU -->
    </div>
    <!-- Fin de la div PAGE -->
    <div id="footer">
        <!-- Début de la div FOOTER -->
        <img src="images/responsiveWeb.png" id="imageFooter" />
    </div>
    <!-- Fin de la div FOOTER -->
    <div id="subfooter">
        <!-- Début de la div SUBFOOTER -->
        <p>✈ © 2014 Rotor Club Aixois | Tous droits réservés | <a href="mention.html">Mentions légales</a>
        </p>
    </div>
    <!-- Fin de la div SUBFOOTER -->
    <div id="bas-page"></div>
</body>

</html>