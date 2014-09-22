<?php
 
// step == verif : on en est à l'étape de vérification
if(isset($_GET['step']) and $_GET['step'] == 'verif'){
    require_once 'Model/m_users.php';
    if(isset($_POST['mail']) and isset($_POST['pass'])){
        $res = check_logins(strip_tags($_POST['mail']), strip_tags($_POST['pass']));
        if($res === 'mail')
            $error['mail'] = 'Mail incorrect';
        else if($res === 'pass')
            $error['pass'] = 'Mot de passe inccorrect';
        else{
            $user = get_user_infos($res); // res est le numéro utilisateur
            $_SESSION['num'] = $user->num;
            $_SESSION['mail'] = $user->mail;
            $_SESSION['name'] = $user->name;
            $_SESSION['first_name'] = $user->first_name;
            header('Location: index.php?page=accueil');
        }
        
        
    }
    require_once 'View/connexion.php';
}
else{
    require_once 'View/connexion.php';
}
    
    