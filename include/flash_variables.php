<?php
if($_SESSION['flashsene'])
$f=$_SESSION['flashsene'];


if($hapen)
	{
	$fapen=$hapen;
	}


	
	
if($hapen==$perso2||$hapen==$perso3||$hapen==$perso4)
	{
	$fapen='';
	}




if($nom){
$skin1=mysqli_fetch_assoc(requete('SELECT road4 FROM players WHERE nom="'.$nom.'";'));
$skin1=$skin1['road4'];
$fnom=$nom;
}

if($nom==$hapen||$nom==$perso2||$nom==$perso3||$nom==$perso4)
	{
	$opt1='noplayer';
	$skin1='';
	$fnom='';
	}

if($perso2){
$skin2=mysqli_fetch_assoc(requete('SELECT road4 FROM players WHERE nom="'.$perso2.'";'));
$skin2=$skin2['road4'];

}
if($perso3){
$skin3=mysqli_fetch_assoc(requete('SELECT road4 FROM players WHERE nom="'.$perso3.'";'));
$skin3=$skin3['road4'];

}
if($perso4){
$skin4=mysqli_fetch_assoc(requete('SELECT road4 FROM players WHERE nom="'.$perso4.'";'));
$skin4=$skin4['road4'];

}

$skinhapen=mysqli_fetch_assoc(requete('SELECT road4 FROM players WHERE nom="'.$fapen.'";'));
$hapenskin=$skinhapen['road4'];

?>