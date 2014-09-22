<?php
/*
 * Retourne le numéro de l'utilisateur si celui-ci est trouvé
 * Retourne 'mail' si le @mail n'est pas trouvée et retourne 'pass' si les mot de passe n'est pas trouvé
 * @param mail: L'adresse mail de l'utilisateur
 * @param pass: le mot de passe de l'utilisateur
*/
function check_logins($mail, $pass){
    global $db;
    $quer = $db->prepare("SELECT num FROM user WHERE mail = :mail");
    $quer->execute(array(':mail' => $mail));
    if($quer->fetch() === false){
        return 'mail';
    }
    $quer = $db->prepare("SELECT num FROM user WHERE pass = :pass");
    $quer->execute(array(':pass' => $pass));
    if($quer->fetch() === false){
        return 'pass';
    }
    return true;
}

/*
    Retourne les informations d'un utilisateur en fonction de son numéro (Sous forme d'objet anonyme)
 * @param num : le numéro de l'utilisateur
*/
function get_user_infos($num){
    global $db;
    $quer = $db->prepare("SELECT * FROM user WHERE num = :num");
    $quer->execute(array(':num' => $num));
    return $quer->fetch(PDO::FETCH_OBJ);
}
