<?php
$perso1 = $perso2 = $perso3 = $perso4 = $hapen = $fapen = $opt1 = $opt2 = $opt3 = null;
$life = $sex = $karma = $frakass = $money = null;
$opt3 = $go = $entree = $entree2 = $m1 = $m2 = $m3 = $m4 = $m5 = $ids = $fplace = null;
$skin1 = $skin2 = $skin3 = $skin4 = $password = $password2 = null;
$bonus1 = $bonus12 = $bonus22 = $bonus2 = null;
$malus1 = $malus12 = $malus22 = $malus2 = null;
$debugg = $requetecomplete1 = $hiliscore = $hililife = $hilimoney = $hilisex = $hilifrakass = $hilikarma = null;



$start_time = microtime(true);

mb_internal_encoding("ISO-8859-1");

function is_utf8($string) {

// From http://w3.org/International/questio...utf-8.html
    return preg_match('%^(?:
[\x09\x0A\x0D\x20-\x7E] # ASCII
| [\xC2-\xDF][\x80-\xBF] # non-overlong 2-byte
| \xE0[\xA0-\xBF][\x80-\xBF] # excluding overlongs
| [\xE1-\xEC\xEE\xEF][\x80-\xBF]{2} # straight 3-byte
| \xED[\x80-\x9F][\x80-\xBF] # excluding surrogates
| \xF0[\x90-\xBF][\x80-\xBF]{2} # planes 1-3
| [\xF1-\xF3][\x80-\xBF]{3} # planes 4-15
| \xF4[\x80-\x8F][\x80-\xBF]{2} # plane 16
)*$%xs', $string);
}

// function is_utf8

function check_log($id_player) {
    if (!$id_player)
        erreur('check log NO ID');
    $what = mysqli_fetch_assoc(requete('SELECT objet FROM `log` WHERE id_player = "' . $id_player . '" ORDER BY id DESC LIMIT 0 , 1'));
    $what = $what['objet'];
    $what = $what;
    return($what);
}

function get_time($nom) {
    $verif = 'SELECT time FROM players WHERE nom="' . $nom . '";';
    $req = requete($verif);
    $data = mysqli_fetch_assoc($req);
    $time = $data['time'];
    return($time);
}

function get_id($nom) {
    $data = mysqli_fetch_assoc(requete('SELECT id FROM players WHERE nom="' . $nom . '";'));
    $id = $data['id'];
    return($id);
}

function get_nom($id) {
    $data = mysqli_fetch_assoc(requete('SELECT nom FROM players WHERE id="' . $id . '";'));
    $nom = $data['nom'];
    return($nom);
}

function get_time_id($id) {
    $verif = 'SELECT time FROM players WHERE id="' . $id . '";';
    $req = requete($verif);
    $data = mysqli_fetch_assoc($req);
    $time = $data['time'];
    return($time);
}

function get_time_log($nom, $objet) {
    $verif = 'SELECT time FROM log WHERE nom="' . $nom . '" AND objet="' . $objet . '";';
    $req = requete($verif);
    $data = mysqli_fetch_assoc($req);
    $time = $data['time'];
    return($time);
}

function check_point($id, $objet) {
    $tablo = mysqli_fetch_assoc(requete('SELECT count(id) FROM checkpoint WHERE id_player="' . $id . '" AND objet="' . $objet . '";'));
    $point = $tablo['count(id)'];
    return($point);
}

function no_point($id, $objet) {
    requete('DELETE FROM checkpoint WHERE id_player=' . $id . ' AND objet="' . $objet . '";');
}

function in_point($id, $objet) {
    $time = get_time_id($id);
    $deja = check_point($id, $objet);
    if (!$deja) {
        requete('INSERT INTO checkpoint VALUES (NULL,"' . $id . '","' . $objet . '",' . $time . ');');
    } else {
        no_point($id, $objet);
        requete('INSERT INTO checkpoint VALUES (NULL,"' . $id . '","' . $objet . '",' . $time . ');');
    }
}

function get_time_point($id, $objet) {
    $time = mysqli_fetch_assoc(requete('SELECT time FROM checkpoint WHERE id_player=' . $id . ' AND objet="' . $objet . '";'));
    $time = $time['time'];
    return($time);
}

function how_much($id, $objet) {
    $time = mysqli_fetch_assoc(requete('SELECT * FROM checkpoint WHERE id_player=' . $id . ' AND objet="' . $objet . '";'));
    if (!$time) {
        $time = mysqli_fetch_assoc(requete('SELECT * FROM sac WHERE id_player=' . $id . ' AND objet="' . $objet . '";'));
        $time = $time['value'];
    } else {
        $time = $time['time'];
    }

    return($time);
}

function check_special($position) {
    $tablo = mysqli_fetch_assoc(requete('SELECT player FROM special WHERE nom="' . $position . '";'));
    $retour = $tablo['player'];
    if (!$retour) {
        //requete('INSERT INTO special VALUES (NULL,"'.$position.'","Blektre","0",0);');
        mail('erreure@gmail.com', 'Blektre Bug', 'check_special : position ' . $position . ' ');
        $retour = 'Blektre';
    }
    return($retour);
}

function check_title($position) {
    $tablo = mysqli_fetch_assoc(requete('SELECT title FROM special WHERE nom="' . $position . '";'));
    $retour = $tablo['title'];
    $retour = $retour;
    return($retour);
}

function check_value($value) {
    $tablo = mysqli_fetch_assoc(requete('SELECT value FROM special WHERE nom="' . $value . '";'));
    $retour = $tablo['value'];
    $retour = $retour;
    return($retour);
}

function set_special($nom, $objet) {
    requete('UPDATE `special` SET player="' . $nom . '" WHERE nom = "' . $objet . '" LIMIT 1;');
}

function set_title($nom, $objet) {
    requete('UPDATE `special` SET title="' . $nom . '" WHERE nom = "' . $objet . '" LIMIT 1;');
}

function check_maque($nom) {
    $tablo = mysqli_fetch_assoc(requete('SELECT player,player2,relation FROM relationship WHERE player="' . $nom . '" AND relation="maques";'));
    return($tablo);
}

function check_rank($position) {
    $tablo = mysqli_fetch_assoc(requete('SELECT player,title,value FROM special WHERE nom="' . $position . '";'));
    return($tablo);
}

function check_family($nom) {
    $mere = mysqli_fetch_assoc(requete('SELECT pere,mere FROM family WHERE nom="' . $nom . '";'));
    return($mere);
}

function check_stat($nom) {
    $mere = mysqli_fetch_assoc(requete('SELECT * FROM players WHERE nom="' . $nom . '";'));
    return($mere);
}

function player_present($nom, $place) {
    $mere = mysqli_fetch_assoc(requete('SELECT * FROM players WHERE place="' . $place . '" AND nom!="' . $nom . '" AND life>0;'));
    return($mere);
}

function in_log($nom, $objet, $value = 0) {
    if (!$_SESSION['pid'])
        erreur('NO ID PLAYER');
    $time = get_time($nom);
    $lastlog = check_log($_SESSION['pid']);
    global $time;
    if ($objet != $lastlog)
        requete('INSERT INTO log(id_player,objet,value,time,player_name) VALUES ("' . $_SESSION['pid'] . '", "' . $objet . '", "' . $value . '",' . $time . ',"' . $nom . '");');
}

function avatar($nom) {
    $image = requete('SELECT image FROM avatars WHERE player="' . $nom . '";');
    $image = $image['image'];
    return($image);
}

function update_stat($nom, $stat, $value) {
    requete('UPDATE `players` SET ' . $stat . '=' . $stat . $value . ' WHERE nom = "' . $nom . '" LIMIT 1;');
}

function set_stat($nom, $stat, $value) {
    requete('UPDATE `players` SET ' . $stat . '=' . $value . ' WHERE nom = "' . $nom . '" LIMIT 1;');
}

function set_chara($nom, $stat, $value) {
    requete('UPDATE `players` SET ' . $stat . '="' . $value . '" WHERE nom = "' . $nom . '" LIMIT 1;');
}

function check_supremacy($nom) {
    $what = mysqli_fetch_assoc(requete('SELECT count(id) FROM special WHERE player="Copkiller";'));
    $supremacy = $what['count(id)'];

    return($supremacy);
}

function check_bag($id, $objet) {
    $tablo = mysqli_fetch_assoc(requete('SELECT value FROM sac WHERE id_player="' . $id . '" AND objet="' . $objet . '";'));
    $point = $tablo['value'];
    return($point);
}

function in_bag($id, $objet, $value) {
    $deja = check_bag($id, $objet);
    if (!$deja)
        requete('INSERT INTO sac VALUES(NULL,' . $id . ',"' . $objet . '",' . $value . ');');
    else {
        $newv = $deja + $value;
        requete('UPDATE sac SET value=' . $newv . ' WHERE id_player=' . $id . ' AND objet="' . $objet . '";');
    }
}

function no_bag($id, $objet, $value) {
    $deja = check_bag($id, $objet);
    if ($value >= $deja) {
        requete('DELETE FROM sac WHERE id_player=' . $id . ' AND objet="' . $objet . '";');
    } else {
        $newv = $deja - $value;
        requete('UPDATE sac SET value=' . $newv . ' WHERE id_player=' . $id . ' AND objet="' . $objet . '";');
    }
}

$nom = empty($_SESSION['nom']) ? null : $_SESSION['nom'];
$noma = empty($_SESSION['noma']) ? null : $_SESSION['noma'];

// tableaux entiers

function check_special_t($position) {
    $tablo = mysqli_fetch_assoc(requete('SELECT * FROM special WHERE nom="' . $position . '";'));
    if (!$tablo) {
        //requete('INSERT INTO special VALUES (NULL,"'.$position.'","Blektre","0",0);');
        mail('erreure@gmail.com', 'Blektre Bug', 'check_special_t : position ' . $position . ' ');
        //$tablo=mysqli_fetch_assoc(requete('SELECT * FROM special WHERE nom="'.$position.'";'));
    }
    return($tablo);
}

function check_bio($nom) {
    $id = get_id($nom);
    $bio = mysqli_fetch_assoc(requete('SELECT bio FROM bio WHERE id_player=' . $id . ';'));
    $bio = $bio['bio'];
    $bio = nl2br($bio);
    return($bio);
}

function clean($texteinput) {
    $texteinput = str_replace('<?php', '', $texteinput);
    $texteinput = str_replace('?>', '', $texteinput);
    $texteinput = str_replace('<script>', '', $texteinput);
    $texteinput = str_replace('<script>', '', $texteinput);
    $texteinput = str_replace('href=', '', $texteinput);
    $texteinput = str_replace('"', '&quot;', $texteinput);
    $texteinput = str_replace("'", '`', $texteinput);

    $texteinput = strip_tags($texteinput);
//if(is_utf8($texteinput)) $texteinput=utf8_decode($texteinput);
    return($texteinput);
}

?>
