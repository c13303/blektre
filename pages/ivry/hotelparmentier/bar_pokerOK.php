
<?php

 
include("include/panel.php"); 

$present=player_present($nom,$place);
$present=$present['nom'];
 $poker=check_special('poker');
 
  $c1=$_SESSION['c1'];
 $cl1=$_SESSION['cl1'];
 $c2=$_SESSION['c2'];
 $cl2=$_SESSION['cl2'];
 $c3=$_SESSION['c3'];
 $cl3=$_SESSION['cl3'];
  $c4=$_SESSION['c4'];
 $cl4=$_SESSION['cl4'];
  $c5=$_SESSION['c5'];
 $cl5=$_SESSION['cl5'];
 
 $mise=check_title('poker');
 
?>

<div id="texte">



      <?php
	  echo 'Vous dévoilez '.$c1.' '.$cl1.',  '.$c2.' '.$cl2.', '.$c3.' '.$cl3.', '.$c4.' '.$cl4.', '.$c5.' '.$cl5.'.</br>';
echo $poker." allonge ses cartes. Il a une paire et un brelan. Il sourit grossierement en machouillant son cigare.";

$score1=0;
$score2=0;
$score3=0;
$score4=0;
$score5=0;

if($c1==$c2)
$score1++;
if($c1==$c3)
$score1++;
if($c1==$c4)
$score1++;
if($c1==$c5)
$score1++;

if($c2==$c1)
$score2++;
if($c2==$c3)
$score2++;
if($c2==$c4)
$score2++;
if($c2==$c5)
$score2++;

if($c3==$c2)
$score3++;
if($c3==$c1)
$score3++;
if($c3==$c4)
$score3++;
if($c3==$c5)
$score3++;

if($c4==$c2)
$score4++;
if($c4==$c3)
$score4++;
if($c4==$c1)
$score4++;
if($c4==$c5)
$score4++;

if($c5==$c2)
$score5++;
if($c5==$c3)
$score5++;
if($c5==$c4)
$score5++;
if($c5==$c1)
$score5++;


if($score1>2||$score2>2||$score3>2||$score4>2||$score5>2)
{
echo '<p>Vous machouillez votre roulée et balancez vos cartes sur la table. </p>
<p>-Poker, déclarez vous.</p><p>Tout le monde se lève et sort son flingue. <p>';
in_log($nom,'Vous gagnez une partie de Poker','ho ho ..');
in_log($poker, $nom. 'ose vous battre au Poker !','le fou');
$m1="Je réclame calmement mon dû";
$v1="ivry/hotelparmentier/bar_bethepoker";
$m2="Je fume tout le monde";
$v2="ivry/hotelparmentier/bar_taule";

}
else
{
echo "<p>Vous dévoilez votre jeu, mais visiblement il ne fait pas le poids. ".$poker." rafle la mise.";
in_log($poker,'Vous raflez la mise au poker','Winner');
in_log($nom,'Vous perdez une partie de poker','Loser');
update_stat($poker,'money','+'.$mise);
set_title(0,'poker');
$m1="Je refais une partie";
$v1="ivry/hotelparmentier/bar_poker2"; 
}
 







 

  
$m3="Je me tire en chialant";
$v3=$_SESSION['rue'];    

$_SESSION['flashsene']='poker';
$perso2=$hapen;
$perso3=$poker;
$perso4=$nom;



    ?>
    </p>

      
      
    </p>
