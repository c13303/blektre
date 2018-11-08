
<?php

 $action1='place ="rue des voyous"';
$action2='retour="paris/ruelle/erre"';
include("include/panel.php"); 

 $dealer=mysqli_fetch_assoc(requete('SELECT player,title FROM special WHERE nom="dealer";'));
 $mac=mysqli_fetch_assoc(requete('SELECT player,title FROM special WHERE nom="mac";'));
  
 
 $dealerlife=mysqli_fetch_assoc(requete('SELECT life FROM players WHERE nom="'.$dealer['player'].'";'));
 $dealerlife=$dealerlife['life'];
 $maclife=mysqli_fetch_assoc(requete('SELECT life FROM players WHERE nom="'.$mac['player'].'";'));
 $maclife=$maclife['life'];

 $pute=mysqli_fetch_assoc(requete('SELECT player,title FROM special WHERE nom="prostituee";'));
  $putelife=mysqli_fetch_assoc(requete('SELECT life FROM players WHERE nom="'.$pute['player'].'";'));
 $putelife=$putelife['life'];
 


 

?>

<div id="texte">

  <p>Vous marchez comme &ccedil;a, dans la rue, les yeux perdus, la queue pendante. Cette petite ruelle sombre semble regorger de gens sympathiques, parfois borgnes, parfois maigres, parfois malodorants, vous vous sentez rapidement à l'aise. <br />
<br />

<?php
$controled=get_time_point($id,'controled');
$past=$time-$controled;
$keuf=check_special('keuf');
if (($karma>2000||$karma<-800)&&$past>50)
{
no_point($id,'controled');
echo "Un type en bombers vous attrape par le bras.<br>- ".$keuf.", de la BAC. Veuillez me suivre.";

in_log($nom,'Vous vous faites interpeller par '.$keuf.' le keuf','bad karma');
$hapen=$keuf;
$endroit="dans la rue des voyous";
$m1="Je ... merde putain";
$v1="paris/keuf/_flic"; 
$_SESSION['flashsene']='_flic';

    
  include('include/exit.php');
}

if ($dealerlife<1)
{
 echo "Le dealeur local s'est récemment fait descendre.";
 $m1="Je reprends le biz de drogue";
	$v1="paris/ruelle/erre_deal";
}
else
{
							if ($dealer['player']==$nom)
							
							{
							
							echo "Vous êtes le dealeur de la rue. Le biz semble bien marcher.";
							$m1="Je check mon biz de drogue";
							$v1="paris/ruelle/erre_deal";
							
							}
							else
							{
							echo $dealer['player']." est là, et vend ".$dealer['title'];
							$m1="Je vais demander de la drogue à ".$dealer['player'];
							$v1="paris/ruelle/erre_drogue";
							$perso2=$dealer['player'];
							}


}

if ($maclife<1)
{
 echo "<br><br>Le mac local s'est recemment fait descendre.";
 $m2="Je reprends le biz de putes";
 $v2="paris/ruelle/erre_mac";
}
else
{
						if ($mac['player']==$nom)
						{
						echo "<br><br>Vous êtes le mac du tiékar, et les affaires roulent.";
						$m2="Je check mon biz de putes";
						$v2="paris/ruelle/erre_mac";
						}
						else
						{
						echo "<br><br>".$mac['player']." le mac du coin, cruise avec ses girlz, blouson en cuir et lunettes noires.<br><br>";
						$m2="Je vais voir ".$mac['player']." le mac";
						$v2="paris/ruelle/erre_pute";
						$perso3=$mac['player'];
						}


}
if($pute['player']==$nom)
{
echo " Salut ma pute, vous adresse-t-il tandis que vous prenez votre pose professionnelle.";
}
echo "<br>";

$present=player_present($nom,$place);
$present=$present['nom'];
$hapen=$present;

if ($hapen&&$hapen!=$mac['player']&&$hapen!=$dealer['player']&&$hapen!=$pute['player'])
{
echo $hapen.' se trouve là aussi, et semble faire tache dans le décor avec sa cravatte de mauvais gout.';
$m3="Je vais voir ".$hapen;
$v3="paris/ruelle/erre_hapen"; 

}
else
{
$hapen='';
}

?>

  <?php
   $entree='';
$entree2='';
$m4="J'entre dans le bar";
$v4="paris/blackbar/bar"; 

$m5="Ces gens sont de mauvaise vie. Je me tire";
$v5="paris/_street/streetest"; 

$_SESSION['flashsene']='erre';





    ?>

  
  

 
<?php 
if($dealer['player']==$nom)
{
$opt1='noplayer';
$perso2=$nom;

}
if($mac['player']==$nom)
{
$opt1='noplayer';
$perso3=$nom;
}
if($pute['player']==$nom)
{
$opt1='noplayer';
$perso4=$nom;
}


$perso4=$pute['player'];

 ?>

 
