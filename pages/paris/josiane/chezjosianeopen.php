<?php  $action3='place="chez josiane"';

 include("include/panel.php");
 

 ?>
<div id="texte">
<?php


	$chien=check_special('chien');
	$jaiunchien=check_point($id,'labrador');
$what=check_point($id,"fumejosiane");
$sida=check_point($id,"sida");
$veu4=check_point($id,'look4x4');




if ($what || $sida )
{ 
if($what)
	echo "Josiane semble refuser de vous ouvrir et vous vous demandez bien pourquoi. Peut �tre avez vous oubli� de vous laver la bite ce matin. Les femmes sentent ce genre de chose. Soudain, vous l'entendez vous hurlez de vous tirer, sale fils de pute, qu'elle ne veut plus jamais vous voir. Cette pute fait encore des siennes � cause de votre derni�re dispute.";
	
if($sida && !$what)
	echo "Josiane ouvre la porte et pousse un hurlement � la vue votre allure squeletique de sida�que. Elle vous hurle amicalement de d�gager et de ne surtout pas l'approcher, menace d'appeller les flics et commence � vous jeter toutes sortes de projectiles avant de claquer la porte. Vous vous sentez soutenu et admettez que Josiane est une fille sensible qu'il faut m�nager. Sa r�action est tout � fait saine.";


$m1='Ouin.';
$v1='paris/_street/streetnord';
 

 $_SESSION['flashsene']='chezjosiane';
include('include/exit.php');

}





$josielover=check_special('josie_lover');
if(check_point($id,'looklabrador')&&$josielover==$nom)
{
	echo '-Et mon labrador? demande Josiane, suppliante.<br>- Pas encore, Baby.. Bient�t, bient�t..';
	$m3="Je vais acheter des clopes ";
$v3="paris/_street/streetnord";

 
$_SESSION['flashsene']='josianeemue';
 
	include('include/exit.php');
}



if($jaiunchien&&$josielover==$nom)
{

	echo "-Et mon labrador? demande Josiane, suppliante.<br>- Justement � ce propos, Baby ...<p>C'est alors que ".$chien." d�barque dans la chambre en jappant comme un gros con.</p><p>Josiane sursaute et se met � chialer, avant de se jetter et d'�treindre le chien qui devient violac�.</p><p>- HOOO ".$nom." !! Rien ne m'a jamais autant fait plaisir !! g�mit-elle.";
	
	in_log($nom,'Vous offrez un cl�bard � Josiane','1000 pts');
	no_point($id,'labrador');
	update_stat($nom,'best','+1000');
	in_point($id,'look4x4');
	
	
	$m3="Quel pied. On va se marrier, putain.";
$v3="paris/josiane/chezjosianeopen";

 
$_SESSION['flashsene']='josianechien';$perso2=$chien;
 
	include('include/exit.php');
}



if($veu4&&$josielover==$nom)
{

	echo "- J'ai envie d'aller au tennis, dit Josiane, mais hors de question que j'y aille dans ta lada pourrie !! Et ou est ce 4x4 que tu m'a promis ?<br/>- B�b� ... j'y travaille...";
	in_log($nom,'Josiane vous gonfle avec son 4x4','sale pauvre');
	
	
	$m3="Elle me soule, mais je l'aime. Je lui promets.";
	
$v3="paris/_street/streetnord";

 

if($veu4) 
{$_SESSION['flashsene']='josianechien';
$perso2=$chien;}
else
$_SESSION['flashsene']='chezjosiane_luv';
 
	include('include/exit.php');
}







if ($josielover==$nom)
{

echo "Josiane est l�, avec son surv�tement rose, et dandine son petit boule autour de vous. <br>Vous passez l'apr�s midi � niquer et � regarder des cassettes de Buffy contre les vampires, ce qui vous soulerais profondemment si cela n'�tait pas un bon moyen de pouvoir lui caresser les seins des heures durant.";
$m2="Je lui demande si elle m'aime vraiment";
$v2="paris/josiane/chezjosiane_luv";
$m3="Je vais acheter des clopes ";
$v3="paris/_street/streetnord";

 
$_SESSION['flashsene']='chezjosiane_luv';
if($veu4) {
$_SESSION['flashsene']='josianechien';
$perso2=$chien;}


include('include/exit.php');
}










 $dj=check_special('tube'); 
 if ($nom==$dj)
 {
  $m1='Je frime parce que je suis devenu DJ';
  $v1='paris/josiane/chezjosiane_tente';
 }

$tune=check_point($id,'fricjosiane');
if (!$tune)
{
$m1="Je dis que je suis venu rendre l'argent";
$v1="paris/josiane/chezjosiane_argent";
}




?>
 
  <p>Josiane finit par passer la t&ecirc;te par la fen&ecirc;tre, l'air hirsute et &eacute;tonn&eacute;e de vous voir, et finit par descendre pour ouvrir la porte.<br />
  </p>
  <p>-Tu sonnais ? Tu sais bien que la sonette est cass&eacute;e. Tu veux quoi ?   </p>
 
  
  <?php  
  
  
  
  
  
  
  
  

$m2="Je bredouille un truc incomprehensible";
$v2="paris/josiane/chezjosiane_tente";
$m3="Je tente une ejaculation faciale de courtoisie ";
$v3="paris/josiane/chezjosiane_ejac";
    ?>



 
<?php 

$_SESSION['flashsene']='chezjosianeopen';
 ?>

 