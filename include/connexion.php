<?php

date_default_timezone_set('Europe/Paris');
mb_internal_encoding("ISO-8859-1");
global $link;

function erreur($message) {
    $info = getenv("PATH_INFO");
    echo 'desole une erreure est survenue LOL : ' . $message . ' ' . $info;
    echo "FILS DE PUTE!";
    exit;
}

// emplacement des donnees de connexion
require 'connexion.conf.php';

// connexion au serveur de donnees
$link = mysqli_connect($mysqlserver, $mysqlloggin, $mysqlpassword)
        or erreur('Connexion au serveur de donnees impossible');

if (mysqli_set_charset($link,"latin1") == false) {
    echo "BITE"; 
}

// Selection de la base de donnees
mysqli_select_db($link,$mysqlmaindb)
        or erreur('Selection de la base de donnee impossible');

// fonction pour faire des requetes
function requete($requete) {
    global $link;
    if ($resultat = mysqli_query($link,$requete))
        return $resultat;
    erreur("Erreur dans la requete : $requete
		" . mysqli_error($link));
}

?>
 