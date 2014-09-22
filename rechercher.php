<?php include_once './head.html'; ?>

<body>
    <header>
        <a href="profil.php"><img src="resources/icones/profil.png" id="iconeHeaderGauche"/></a>
        <p id="titre">Rechercher</p>
        <a href="#"><img src="resources/icones/settings.png"  id="iconeHeaderDroit"/></a>
    </header>

    <div id="rechercheParNom">
        <img src="resources/icones/search_black.png" id="loupe"/>
        <input type="text" placeholder="Chercher..."/>
        <img src="resources/icones/delete_black.png" id="croix"/>        
        <button>Annuler</button>
    </div>

    <div id="rechercheParDate">
        <img src="resources/icones/clock.png"/>
        D&eacute;but<input type="text" placeholder="01/01/2015 12:00"/>
        Fin&emsp;&nbsp;&thinsp;&thinsp;<input type="text" placeholder="20/01/2015 20:00"/>
    </div>
    
    <div id="rechercheParLieu">
        <img src="resources/icones/location.png"/>
        Lieu<input type="text" placeholder="Villeurbanne, 69001"/>
        <div id="geolocalisation">
            <img src="resources/icones/define_location.png"/>
        </div>
    </div>

    <div class="personneCherchee">
        XXX
    </div>
    <div class="personneCherchee">
        YYY
    </div>
    <div class="personneCherchee">
        XXX
    </div>
    <div class="personneCherchee">
        YYY
    </div>
    <div class="personneCherchee">
        XXX
    </div>
    <div class="personneCherchee">
        YYY
    </div>

    <footer>
        <a href="accueil.php"><span class="boutonMenuBas"><img src="resources/icones/home.png"/>Accueil</span></a><!-- WhiteSpace
        --><a href="proposer.php"><span class="boutonMenuBas"><img src="resources/icones/plus.png"/>Se proposer</span></a>
    </footer>
</body>