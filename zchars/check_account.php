<?php
/// AFFICHAGE DES PERSOS

$persos=requete('SELECT active,char1,char2,char3 FROM accounts WHERE nom="'.$noma.'";');
$persos= mysqli_fetch_assoc($persos);
$char1=$persos['char1'];
$char2=$persos['char2'];
$char3=$persos['char3'];



if($persos['active']==0)
{
	echo 'Account non active. Si vous venez de le creer, patientez un peu: il va bientet etre active ! <br><br> Plaintes et reclamations: http://forum.ardkor.com';
	require('../include/exit.php');
}
if($nom=='Guest')
echo "<b>ATTENTION: ce compte est le compte guest</b>, tout le monde peut l'utiliser. Les personnages sont donc jouables et effaeables par tous ! Si vous continuez e jouer, faites vous <a href='_register.php'>votre propre compte</a> !";

if(!$char1)
{
 echo 'Aucun perso cree';
}



if($char1=='0')
{
$char1='';
}
if($char2=='0')
{
$char2='';
}
if($char3=='0')
{
$char3='';
}


$m1=$char1;
$v1="check_char1";
$m2=$char2;
$v2="check_char2";
$m3=$char3;
$v3="check_char3";
if(!$char3)
{
$m4="create a fucking character";
$v4="check2";
}


$perso2=$char1;
$perso3=$char2;
$perso4=$char3;
  
if($perso2){
$skin2=mysqli_fetch_assoc(requete('SELECT road4 FROM players WHERE nom="'.$perso2.'";'));
$skin2=$skin2['road4'];
$perso2='&perso2='.$perso2.'&skin2='.$skin2;
}
if($perso3){
$skin3=mysqli_fetch_assoc(requete('SELECT road4 FROM players WHERE nom="'.$perso3.'";'));
$skin3=$skin3['road4'];
$perso3='&perso3='.$perso3.'&skin3='.$skin3;
}
if($perso4){
$skin4=mysqli_fetch_assoc(requete('SELECT road4 FROM players WHERE nom="'.$perso4.'";'));
$skin4=$skin4['road4'];
$perso4='&perso4='.$perso4.'&skin4='.$skin4;
}

$skinhapen=mysqli_fetch_assoc(requete('SELECT road4 FROM players WHERE nom="'.$fapen.'";'));
$skinhapen=$skinhapen['road4'];

  $v='account';
$flush='../FUCK/intro.swf?sene='.$v.'&var1='.$nom.'&skin1='.$skin1.'&fapen='.$fapen.'&hapenskin='.$skinhapen.'&opt1='.$opt1.'&opt2='.$opt2.'&opt3='.$opt3.'&pveuch=0XFFFFFF';
$flush=$flush.$perso2.$perso3.$perso4;
//while ($tous=mysqli_fetch_assoc($keut))
//{
//$cont++;
//$nvar='var'.$cont;
//$nskin='skin'.$cont;
//$$nvar=$tous['nom'];
//$$nskin=$tous['road4'];

//$opt=$nvar.'='.$$nvar.'&'.$nskin.'='.$$nskin;

//$flush=$flush.'&'.$opt;

//}

$flush=str_replace(" "," ",$flush);
$flush=utf8_encode($flush);






?>

<div align="center">
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="800" height="300"> 
    <param name="movie" value="<?php echo $flush; ?>">
    <param name="quality" value="high" />
    <embed src="<?php echo $flush; ?>" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="800" height="300"></embed>
  </object>
  <?php
	
	
$_SESSION['noma']=$noma;
$_SESSION['nom']=$nom;
$_SESSION['hapen']=$hapen;

  
$_SESSION['char1']=$char1;
$_SESSION['char2']=$char2;
$_SESSION['char3']=$char3;

   


?>
  
  
  
  
  
</div>
