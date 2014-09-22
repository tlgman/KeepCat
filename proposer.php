<?php include_once './head.html'; ?>

<body>
    <header>
        <a href="accueil.php"><img src="resources/icones/back.png" id="iconeHeaderGauche"/></a>
        <p id="titre">Se proposer</p>
        <a href="#"><img src="resources/icones/settings.png"  id="iconeHeaderDroit"/></a>
    </header>

    <p id="disponible">
        Se rendre disponible
        <input type="checkbox" checked/>
    </p>
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
    
    <button id="validerDisponibilite">Valider</button>
</body>