<?php




 $action1='';
$action2='';
$action3='place="salle de r�union"';


include("include/panel.php"); 




 ?><div id="texte"><?php
  $patron=mysqli_fetch_assoc(requete('SELECT player FROM special WHERE nom="patron";'));
  
$chef=check_special('patron');

if ($nom==$chef)
{
include('pages/paris/boulot/boulot_remplace_patron.php');
include('include/exit.php');
}




$what=check_point($id, 'vire');
if ($what)
{
			$asdec=check_point($id,'A440');
			if($asdec)
			{
			echo 'Le gorille vous barre la route. 
			<br/>- Degage connard. Tu travailles plus ici.
			<br>- Je viens chercher un formulaire pour les ASSEDIC, dites vous piteusement. Il s`agit du ...';
			$entree='874B';
			$m1='Ouais, le formulaire de ce num�ro la';
			$v1='paris/admin/4ASSEDIC_formboulot';
			$m2='Pardon. Je me tire.';
			$v2='paris/_street/street';
 
$_SESSION['flashsene']="4formtaf";
 
include('include/exit.php');


			}


echo 'Le gorille vous barre la route. 
<br/>- Degage connard. Tu travailles plus ici.';

  $m1='Merde alors.';
$v1="paris/_street/street";
  
$_SESSION['flashsene']='bureauvirage';

include('include/exit.php');
}









$what=check_point($id,'betheboss');
if ($what)
{
echo "Vous avez �t� remplac� au poste de patron par ".$patron['player'].", qui s'av�rait beaucoup plus comp�tent que vous.<br>";
}
$directeur=check_special('directeur');
$stagiaire=check_special('stagiaire');
if($nom!=$directeur)
{
	
	if($directeur=='Blektre' && $stagiaire!=$nom) { set_special($stagiaire,'Blektre'); in_log($stagiaire,'Vous �tes promu Directeur','Chance'); }
	set_special($nom,'stagiaire');
	in_log($nom,'Vous allez au boulot','employ�');
}


echo "<br/>
Vous d�boulez dans la salle de r�union o� se d�roule, vous vous en rappellez � pr�sent, l'habituel briefing des missions importantes. <br>Si toute l'assembl�e vous regarde avec perplexit�, le regard du patron, monsieur ".$patron['player'].", lui, se d�marque des autres pour une raison difficile � expliquer. Il vous faut dire quelquechose. <br/>";


if($present)
{
$hapen=$present;
echo $present." se trouve l�, et semble bien se foutre de votre gueule.<br/>";
}





?>






  <?php 
     $m1='"Salut les burnes ! Ca biche ou bien ?"';
$v1="paris/boulot/boulotbiche";
$m2="Je m'enfuis";
$v2="paris/boulot/boulotfuite";
$m3="Je m'excuse poliment <br/>et je prends place autour de la table de r�union.";
$v3="paris/boulot/boulotreunion";

    ?>

  


   
<?php 
$perso2=check_special('patron');
$_SESSION['flashsene']='boulot2';

 ?>

 














