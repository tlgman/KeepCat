<?php include_once './head.html'; ?>

<body>
    <header>
        <a href="accueil.php"><img src="resources/icones/back.png" id="iconeHeaderGauche"/></a>
        <p id="titre">Carte</p>
        <a href="#"><img src="resources/icones/settings.png"  id="iconeHeaderDroit"/></a>
    </header>
    <img src="resources/map.png"/>
    <div id="localiserLieu">
        <img src="resources/icones/location.png"/>
        <input type="text" placeholder="Villeurbanne, 69100"/>
        <div id="geolocalisation">
            <img src="resources/icones/define_location.png"/>
        </div>
    </div>
</body>