
<?php
include_once('Connexion.php');
class LoginBDManager
{
    function checkLogin($username)
    {
        $result = null;
        $requete = "SELECT password from T_Utilisateur where login = :username";
        $params = array('username' => $username);
        $data = Connexion::getInstance()->selectSingleQuery($requete, $params);
        if (count($data) > 0) {
            $result = $data;
        }
        return $result;
    }
}
