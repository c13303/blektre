<?php

/*
  $date = date("d-m-Y");
  $heure = date("H:i");
 */

include("include/panel.php");



set_stat("Blektre", "life", "100");
set_stat("Blektre", "karma", "100");
set_stat("Blektre", "sex", "100");

$fplace = 'sud_present';

$_SESSION['rue'] = '1';






$prison = check_point($id, 'prison');
if ($prison) {

    echo "<div id='texte'>Vous vous reveillez sur le sol froid de votre cellule ...";
    $m1 = "hmpf";
    $v1 = "paris/prison/in";
    $keuf = check_special('keuf');
    $listetaulards = requete('SELECT * FROM checkpoint WHERE objet="prison" ORDER BY id DESC');
    $n = 0;
    while ($data = mysqli_fetch_assoc($listetaulards)) {
        $n++;
        $var_tolar = 'taulard' . $n;
        // taulard1 = 
        $$var_tolar = get_nom($data['id_player']);
    }
    $_SESSION['flashsene'] = 'prison';
    $perso2 = $taulard1;
    $perso3 = $taulard2;
    $perso4 = $taulard3;
    $hapen = $keuf;
    include('include/startexit.php');
}





$ivry = check_point($id, 'ivry');
if ($ivry) {
    $_SESSION['flashsene'] = 'ivrychambre';
    require('ivry/hotelparmentier/1ivry.php');
    $perso2 = $nom;
    include("include/flash_params.php");


    include('include/startexit.php');
}












$boss = check_rank('patron');
$boss = $boss['player'];
$mere = check_family($nom);
$mere = $mere['mere'];






// APPARAITRE LA OU T
//


 
set_stat($nom, 'retour', '1');





if ($score < 1) {


    echo "<div id='texte'>";

    echo '- Fichtre! vous exclassoifiez vous en vous reveillant. 					
					<br>Effectivement, il est 11h49, et vous êtes comme qui dirait à la bourre. Aujourdhui est un grand jour: celui de la signature du CDI que vous convoitez depuis plusieurs mois. Vous avez apparemment dignement fêté ça la veille, a en croire le nombre de bouteilles qui jonchent le sol.
					
					<br/><br/>Que faire ?';
} else {

    $tube = check_title('tube');
    echo "<div id='texte'><p>Le radio réveil se met à hurler le tube très en vogue en ce moment: << <b>" . $tube . "!! </b>  >>. 
					
					<p>Encore un jour se lève sur la planète foutre, songez vous, 
					d'une humeur égale à celle du jeu de mot pathétique que vous venez de faire. 
					Josiane occupe pleinement vos pensées endoloriées par la biture que vous vous êtes administré la ville.</p>";
}
?>



<?php

$m1 = "Je roule un cône";
$v1 = "paris/zonmai_room/z1_room_bedo";
$m2 = "J'appelle mon patron<br/>pour le prévenir de mon retard";
$v2 = "paris/zonmai_room/z1_boss";

set_stat($nom, "place", "'zonmai'");

$r = rand(1, 2);
if ($r == 1) {
    $m3 = "Je me rendors";
    $v3 = "paris/zonmai_room/z1_dodo";
}
if ($r == 2) {
    $m3 = "J'écris un roman";
    $v3 = "paris/zonmai_room/z1_child";
}

if ($score > 0) {
    $m2 = "J'utilise le téléphone";
    $v2 = "sp/telephone_messages";
    $m4 = "Je me casse";
    $v4 = "paris/_street/street";
} else {
    $m2 = "J'appelle ma mère";
    $v2 = "paris/zonmai_room/z1_maman";
}


$_SESSION['flashsene'] = 'one';
?>





