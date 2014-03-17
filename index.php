<!DOCTYPE html>
<html>
	<head>
	    <link rel="icon" href="favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/styleR.css">
        <link rel="stylesheet" href="css/responsive-nav.css">
    	<link rel="stylesheet" href="css/style-nav.css">
   		<script type="text/javascript" src="css/js/responsive-nav.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="initial-scale=1.0"><!-- le navigateur des appareils mobiles comprendra qu'il ne doit pas simuler de largeur d'écran plus grande et votre site s'affichera correctement. -->
        <meta name="Keywords" content="élico, helico, hélo, hélico, hélicoptère, chopper, AS 355, AS 341, helicopteres, pilote, photos, Helifrance, helicap, ecureuil, Robinson, Notar, Bell, Textron, Dauphin, EC 130, EC 135, EC 155, sécurite civile, sauvetage, rotor, voilure tournante, giraviation, aviation, avions, eleve pilote, simulation, simulateur, hugues 300, schweizer, passion, pilote, pilotage, hélitreuillage, aérien, aéronef, hugues, sar, huey, bell, liens, helico, avion, brevet, licence, tth, pph, ppl,cockpit, rotor, pale, turbine, vol, décollage, hélisurface, atterrissage, rotation, autorotation, flare, aix, Aix, Aix les milles, aérodrome, LFMA, lfma, hébert, HEBERT, hebert, anticouple, philippe, capiaumont, nicolas, philippe capiaumont, philippe">
		<title>Rotor Club Aixois</title>
	</head>
	<body>
    	<div id="header">
        	<img src="images/headerRotor.jpg" alt="bannière">
        </div>
        <div id="menu">
        	<nav class="nav-collapse">
              <ul>
                <li><a href="index.php"><img src="images/menu/home.png" alt="index"></a></li>
                <li><a href="club.html"><img src="images/menu/club.png" alt="club"></a></li>
                <li><a href="helico.html"><img src="images/menu/helico.png" alt="helico"></a></li>
                <li><a href="http://rotorclub.openflyers.fr/" target="_blank"><img src="images/menu/reservation.png" alt="reservation"></a></li>
                <li><a href="navigation.html"><img src="images/menu/nav.png" alt="navigation"></a></li>
                <li><a href="media.html"><img src="images/menu/media.png" alt="media"></a></li>
                <li><a href="liens.html"><img src="images/menu/liens.png" alt="liens"></a></li>
                <li><a href="restaurant.html"><img src="images/menu/resto.png" alt="restaurant"></a></li>
                <li><a href="contact.php"><img src="images/menu/contact.png" alt="contact"></a></li>
              </ul>
    		</nav>
        </div>
        <div id="page">
        	<div id="facebook" class="fb-like" data-href="https://www.facebook.com/rotorclubaixois" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
        	<div id="contenu">
				<div id="contenuTexte">
                	<h1>Welcome aboard</h1>
                	<p>Le Rotor Club Aixois vous souhaite la bienvenue à bord de son site internet. Accrochez vos ceintures, sortez la check-list et partagez avec nous le plaisir de piloter un hélicoptère…</p>
                	<h2>ECOLE</h2>
                	<p>Créé en 2000, le Rotor Club Aixois est une association loi de 1901 à but non lucratif, dont l’objet est de rapprocher tous les passionnés de voilures tournantes. Un agrément délivré par la DGAC, nous autorise à former des pilotes privés sur hélicoptère. Cette licence (PPL-H) permettra au titulaire de piloter tous les hélicoptères sur lesquels il est qualifié, sans limitation de distance, tout en emmenant des passagers avec qui, il pourra partager les frais.</p>
                	<br />
                	<h2>VOL D’INITIATION</h2>
                	<p>Une formidable idée cadeau qui à coup sûr rendra heureux le bénéficiaire…</p>
                	<p>Pour vous permettre d’accéder à ce plaisir inégalé, et pourquoi pas vous décider à rejoindre notre école de pilotage, nous vous proposons des vols d’initiation avec un instructeur expérimenté. Après un briefing explicatif, vous piloterez notre hélicoptère pour un vol inoubliable ! Plaisir intense, dépaysement total, sensations garanties, voici le menu qui vous attend.</p>
            	</div>
            	<div id="imageAccueil">
            	    <img class="img-deco" src="images/media/h300/137_3701.JPG" width="500" alt="h300">
            	</div>
				<div class="fin"></div>
            </div>
         	<div id="footer">
                    <img src="images/responsiveWeb.png" id="imageFooter" alt="footer">
        	</div>
        	<div id="subfooter">
            	<p>✈ © 2014 Rotor Club Aixois | Tous droits réservés | <a href="mention.html">Mentions légales</a>
      		</div>
            <div id="bottomPage">
            </div>
            <div id="btn_up">
				<img alt="Retour en haut" title="Retour en haut" src="images/scrollup.png" />
			</div>
        </div>
        <script type="text/javascript">
			var navigation = responsiveNav(".nav-collapse", {
				animate: true,                    // Boolean: Use CSS3 transitions, true or false
				transition: 284,                  // Integer: Speed of the transition, in milliseconds
				label: "Menu",                    // String: Label for the navigation toggle
				insert: "after",                  // String: Insert the toggle before or after the navigation
				customToggle: "",                 // Selector: Specify the ID of a custom toggle
				closeOnNavClick: false,           // Boolean: Close the navigation when one of the links are clicked
				openPos: "relative",              // String: Position of the opened nav, relative or static
				navClass: "nav-collapse",         // String: Default CSS class. If changed, you need to edit the CSS too!
				navActiveClass: "js-nav-active",  // String: Class that is added to <html> element when nav is active
				jsClass: "js",                    // String: 'JS enabled' class which is added to <html> element
				init: function(){},               // Function: Init callback
				open: function(){},               // Function: Open callback
				close: function(){}               // Function: Close callback
			});
		</script>
		<script type="text/javascript" src="css/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript">
        //fonction qui permet de remonter en haut de page avec la fleche
			$(function(){
				$('#btn_up').click(function() {
					$('html,body').animate({scrollTop: 0}, 'slow');
				});
				$(window).scroll(function(){
					if($(window).scrollTop()<150){
						$('#btn_up').fadeOut();
					}else{
						$('#btn_up').fadeIn();
					}
				});
			});
        </script>
        <div id="fb-root"></div>
		<script type="text/javascript">
			(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
	</body>
</html>