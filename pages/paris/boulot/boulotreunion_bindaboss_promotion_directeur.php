<?php




 $action1='';
$action2='';


include("include/panel.php"); 


$directeur=check_special('directeur');
$place='salle de reunion';
$present=player_present($nom,$place);


$hapen=$directeur;
$hapenkarma=check_stat($hapen);
$hapenkarma=$hapenkarma['karma'];
 ?>
<div id="texte">
  <p>Vous félicitez <b><?php echo $hapen; ?></b>
  <p>- Parfait parfait. <b><?php echo $hapen; ?></b>, je dois te parler dans mon bureau.</p>
  <b><?php echo $hapen; ?></b> vous retrouve dans votre bureau et vous le recompensez d'un billet de 100, moyennant une petite pipe qu'il vous fait sans broncher. <br />
    <br />
    Vous retournez dans votre bureau en laissant faire vos employés. Soudain le téléphone sonne. C'est votre comptable.

    <?php 
	$ceupla='"félicité au boulot par votre patron '.$nom.'"';
	in_log($hapen,'Votre patron '.$nom.' vous a félicité',$nom);
	in_log($nom,'Vous félicitez '.$hapen.', un employé',$hapen);
update_stat($nom,'money','-100');
update_stat($hapen,'money','+100');
set_stat($hapen,'place', $ceupla);
set_stat($hapen,"fume",'"boule"');
	
if($money>5678)
{
$hapenkarma='-2500';
}
	
	
	
if($hapenkarma>0)
{
echo "<br>-Bien joué: la promotion a marché du tonnerre et le CA a augmenté! Votre capital a explosé de ".$hapenkarma." euros.<br><br>Vous raccrochez, vous vous caressez doucement en suçotant votre doigt";
update_stat($nom,'money','+'.$hapenkarma);

}
else
{
echo "<br>-C'est quoi cette campagne de merde que vous venez de me sortir ? Le CA a pris cher et le capital a chuté de ".$hapenkarma."....<br><br>Vous raccrochez, perplexe, et allez fièvreusement vérifier votre compte en banque.";
update_stat($nom,'money',$hapenkarma);
}








$m3="Je vais faire un tour ...";
$v3="paris/_street/street";




in_point($id,'reunion');

// chouicess
  
  
  
  
    ?>


 
<?php 
$_SESSION['flashsene']='boulotreunion';
$perso2=$directeur;
 ?>

 














