<?php




 $action1='';
$action2='';


include("include/panel.php"); 

$bonus1="karma";
$directeur=check_special('directeur');
$place='salle de reunion';
$present=player_present($nom,$place);


$hapen=$directeur;
$hapenkarma=check_stat($hapen);
$hapenkarma=$hapenkarma['karma'];

 ?>
<div id="texte">
  <p>Vous gueulez sur <b><?php echo $hapen; ?></b>:   
  <p>- C'est quoi cette id&eacute;e de merde ? Non mais vous vous rendez compte ? C'est un coup &agrave; niquer le chiffre d'affaire &ccedil;a. Je vais devoir vous mettre une sanction car ce genre de comportement n'est pas tol&eacute;rable. </p>
  <b><?php echo $hapen; ?></b> reste bouche b&eacute;e. <br />
    <br />

    <?php 
		
	
	
	$ceupla='"engueul� au boulot par votre patron '.$nom.'"';
	in_log($hapen, "Votre patron ".$nom." vous a chi� dessus",'employ� de merde');
	in_log($nom,'Vous avez chi� sur '.$hapen.',un employ�','good boss');
set_stat($hapen,'place', $ceupla);
set_stat($hapen,"fume",'"boule"');
	
	
	
	
if($money>5678)
{
$hapenkarma='2500';
}
	
	
	
if($hapenkarma<0)
{
$hapenkarma=-1*$hapenkarma;
echo "<br>Vous d�cidez de faire tout l'inverse de ce que disait le directeur. Le t�l�phone sonne, un peu plus tard.<br>-Bien jou�: la promotion a march� du tonnerre et le CA a augment�! Votre capital a explos� de ".$hapenkarma." euros<br><br>Vous raccrochez, vous vous caressez doucement en su�otant votre doigt";
update_stat($nom,'money','+'.$hapenkarma);

}
else
{
echo "<br>Vous d�cidez de faire tout l'inverse de ce que disait le stagiaire. Le t�l�phone sonne, un peu plus tard.<br>-C'est quoi cette campagne de merde que vous venez de me sortir ? Le CA a pris cher et le capital a chut� de ".$hapenkarma."<br><br>Vous raccrochez, perplexe, et allez fi�vreusement v�rifier votre compte en banque.";
update_stat($nom,'money','-'.$hapenkarma);
}






in_point($id,'reunion');



$m3="Je vais faire un tour ...";
$v3="paris/_street/street";






// chouicess
  
  
  
  
    ?>


 
<?php 
$_SESSION['flashsene']='boulotreunion';
$perso2=$directeur;
 ?>

 














