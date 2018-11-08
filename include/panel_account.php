<style type="text/css">
<!--
.Style1 {color: #C7C799}
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>

<div id="panel">

<?php
// CHECK PLAYER

  
  // id,nom,best,road1,retour,road3,road4,life,karma,sex,money,frakass,place,fume

  
   if ($action1!=''){
  requete('UPDATE `players` SET '.$action1.' WHERE nom = "'.$nom.'" LIMIT 1;');
  }
   if ($action2!=''){
  requete('UPDATE `players` SET '.$action2.' WHERE nom = "'.$nom.'" LIMIT 1;');
  }
   if ($action3!=''){
  requete('UPDATE `players` SET '.$action3.' WHERE nom = "'.$nom.'" LIMIT 1;');
  }
  
  if ($requetecomplete1!='')
  {
  requete($requetecomplete1);
  }
  //
  

  
if(!$_SESSION['pid'])erreur('lost session include  panel_account');
  
  
  $verif='SELECT * FROM players WHERE id="'.$_SESSION['pid'].'";';
  $req=requete($verif);
  $data = mysqli_fetch_assoc($req);
  
  
  $id=$data['id'];
  $player=$data['nom'];
  $score=$data['best'];
  $road1=$data['road1'];
  $retour=$data['retour'];
  $road3=$data['road3'];
  $road4=$data['road4'];
  $life=$data['life'];
  $karma=$data['karma'];
  $money=$data['money'];
  $frakass=$data['frakass'];
  $sex=$data['sex'];
  $place=$data['place'];
  $fume=$data['fume'];
  $time=$data['time'];
  $time=$time+1;
  requete('UPDATE players SET time='.$time.' WHERE id='.$id.';');
  $hapen='';   

  
  if ($karma<-1000)
  {
  requete('UPDATE `players` SET karma=-1000 WHERE nom = "'.$nom.'" LIMIT 1;');
  }
   if ($sex<-1000)
  {
  requete('UPDATE `players` SET sex=-1000 WHERE nom = "'.$nom.'" LIMIT 1;');
  }
   if ($karma>3000)
  {
  requete('UPDATE `players` SET karma=3000 WHERE nom = "'.$nom.'" LIMIT 1;');
  }
     if ($sex>3000)
  {
  requete('UPDATE `players` SET sex=3000 WHERE nom = "'.$nom.'" LIMIT 1;');
  }
  
  if ($frakass>100)
  {
  in_log($nom, "Vous êtes trop déchiré", "aie");
  requete('UPDATE `players` SET life=life-2 WHERE nom = "'.$nom.'" LIMIT 1;');
  }
   if ($frakass>200)
  {
  in_log($nom, "Vous faites une O.D.", "aie");
  requete('UPDATE `players` SET life=life-100 WHERE nom = "'.$nom.'" LIMIT 1;');
  }
  
  if ($frakass>0)
  {
  requete('UPDATE `players` SET frakass=frakass-1 WHERE nom = "'.$nom.'" LIMIT 1;');
  }
   if ($life>100)
  {
  requete('UPDATE `players` SET life=life-1 WHERE nom = "'.$nom.'" LIMIT 1;');
  }
  
  

  // verif key
  
   require('include/_verifkey_ak.php');
  
  
  
 
  
  
  
  
  
  
  
  
  
  if ($life<1)
  {
  	if ($fume=="boule")
	{
	echo "Vous avez été ".$road1;
	}
  	echo "<br/>Thou art dead.";
	
	

	$raison='SELECT * FROM log WHERE player_name="'.$nom.'" ORDER BY id DESC;'; 
  	$selec=requete($raison);
  	$data2 = mysqli_fetch_assoc($selec);
 	 echo $data2['objet'];
	 echo '<br/><br/><a href="fame2.php?nom='.$nom.'">Mater le log de votre misérable vie</a><br>';
	 in_log($nom, "Vous êtes mort.", "");
	echo '<br/><br/><br/><br/><a href="index.php">go back</a>';
	exit;
  }

 

echo "Player ".$player.' ('.$place.')     <div class="Style1">  time:'.$time.'</div><br>';
  $c=0;
  $info='SELECT * FROM log WHERE player_name="'.$nom.'" ORDER BY id DESC;';
  $info2=requete($info);

   while($info3 = mysqli_fetch_assoc($info2))
 	{
		  
		  $c++;  
		  if($c<4)
			  {
			  echo '<div class="Style1">'.$info3['time'].'.'.$info3['objet'].'</div>';
			  }
		 if($c>50)
			  {
			  requete('DELETE FROM log WHERE id='.$info3['id'].';');
			  }
			  
	}




/// verif the enceinte time

if(check_point($id,'enceinte'))
{
$enceintetime=get_time_point($id,'enceinte');
$enceintetime=$time-$enceintetime;
if($enceintetime>100)
{
no_point($id,'enceinte');
in_log($nom, 'Vous avortez','Expiration');
}

}













?>


<p>
  <?php
$m1='';
$m2='';
$m3='';
$m4='';
$m5='';

$present=player_present($nom,$place);
$present=$present['nom'];
?>
</p>






</span>
 </div>

</div>

