<?php 
 require("include/panel.php"); 

// recuperation de hapen
// $hapen=$_SESSION['hapen'];

$rael=check_special('rael');
$seigneur=clean($_GET['entree']);
$seigneur=strtolower($seigneur);
 ?>
<style type="text/css">
<!--
.Style1 {font-weight: bold}
-->
</style>

 
<div id="texte">
  
  <?php
  $sei=mysqli_fetch_assoc(requete('SELECT * FROM `players` WHERE life <0 ORDER BY best DESC LIMIT 0 , 1'));
  $sei=$sei['nom'];
  $sei=strtolower($sei);
  if($seigneur==$sei)
  {
  echo "Un �norme rot semblant surgir d'outre-tombe r�sonne soudain dans l'�glise. Vous tremblez comme une feuille et accompagnez le bruit t�n�breux avec ceux de vos flatulences. Le gourou se met � hurler: <p>- THE CURSE !!! THE CURSE !!!!!!!!! hurle ".$rael." avant de s'enfuir en courant.</p>
  <p>Un technicien arrive: << J'ai envoy� le son au mauvais moment ?? Pourtant j'ai entendu le signal. >> </p>
  <p>Vous lui expliquez qu'il a bien fait, et vous �tes proclam� nouveau gourou de la secte.</p>";
  
  set_special($nom,'rael');
  in_log($nom,'Vous devenez le gourou de l`�glise de Fientologie','mystique');
  in_log($rael,'Vous vous �tes d�chu du poste de gourou','cursed');
  $m4='Je check le bizness du gourou';
  $v4='paris/eglise/12biz_rael';
  
  }
  else
  {
  echo "Le gourou continue de propager son rire sardonique qui commence � r�sonner dans l'�glise. Vous commencez � le trouver s�rieusement flippant et d�cidez de foutre le camp avant de pisser dans votre culotte. ";
  
  }
  

	$entree='';
	

	
	
	$m5="Je sors";
	$v5="paris/_street/streetouest";


	$perso2=$coeur;
	$perso3=$rael;
	$_SESSION['flashsene']='12eglise_rael';


    ?>
  

  
</p>
 
<?php  ?>

 
























