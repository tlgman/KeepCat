<?php
session_start();
require_once 'Model/m_main.php';
require_once 'View/sections/header.php';
$db = connect_db();
    
if(!isset($_GET['page'])){
    require_once 'View/start.php';
}
else{
    switch($_GET['page']){
        case 'accueil': require_once 'Controller/c_home.php'; break;
        case 'connexion': require_once 'Controller/c_connection.php'; break;
        case 'profil': require_once 'Controller/c_profil.php'; break;
            case 'animaux': require_once 'Controller/c_animals.php'; break;
            case 'avis': require_once 'Controller/c_opinions.php'; break;
        case 'carte': require_once 'Controller/c_carte.php'; break;
        // Peremet de voir sa liste des contacts dans chat roulette
        case 'contact':  require_once 'Controller/c_contact.php'; break;
            case 'chatroulette': require_once 'Controller/c_chatroulette.php'; break;
        case 'snapchat': require_once 'Controller/c_snapchat.php'; break;
        case 'rechercher': require_once 'Controller/c_search.php'; break;
        case 'proposer': require_once 'Controller/c_propose.php'; break;
    
        
        case 'deconnexion':
            session_destroy();
            header('Location: index.php?page=connexion');
        break;
    }
}

