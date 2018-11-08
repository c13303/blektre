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
  
	
  

  if(!$_SESSION['pid'])erreur('lost session panel');
 
  $verif='SELECT * FROM players WHERE id="'.$_SESSION['pid'].'";';
  $req=requete($verif);
  $data = mysqli_fetch_assoc($req);
    
  
  $id=$data['id'];
  global $mid;
  $mid=$id;
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
  global $time;
  $time=$data['time'];
  $time=$time+1;
 
  requete('UPDATE players SET time='.$time.' WHERE id='.$id.';');
  $hapen='';   



	$lastlog=check_log($nom);

  if ($karma<-1000)
  {
  requete('UPDATE `players` SET karma=karma+50 WHERE nom = "'.$nom.'" LIMIT 1;');
  }
   if ($sex<-1000)
  {
  requete('UPDATE `players` SET sex=-1000 WHERE nom = "'.$nom.'" LIMIT 1;');
  }
  
  
  
  $benited=how_much($id,'beni');
 
  if($benited>50)
  {no_point($id,'beni');$benited=0;}
  
   if ($karma>3000&&!$benited)
  {
  requete('UPDATE `players` SET karma=3000 WHERE nom = "'.$nom.'" LIMIT 1;');
  }
  
  
  
  
     if ($sex>3000)
  {
  requete('UPDATE `players` SET sex=3000 WHERE nom = "'.$nom.'" LIMIT 1;');
  }
  
 
  
  $isjunky=check_point($id,'junky');
  if($isjunky&&$frakass<25&&$life>0)
  {

  if($lastlog!="Vous etes en manque !")    
  in_log($nom,"Vous etes en manque !","junky");
  requete('UPDATE `players` SET life=life-1 WHERE nom = "'.$nom.'" LIMIT 1;');
  }
  
  
  $sida=check_point($id,'sida');
  if($sida && $_SESSION['sido']==0)
  {
  in_log($nom,"Vous souffrez du SIDA","loser");
  requete('UPDATE `players` SET life=life-10 WHERE nom = "'.$nom.'" LIMIT 1;');
  }
  
  if($sida)
  {
  $_SESSION['sido']++;
  if($_SESSION['sido']>30)
  	$_SESSION['sido']=0;
  }
  
  
  
  
  
   if ($frakass>400)
  {
  in_log($nom, "Vous faites une O.D.", "Damn Junkie");
  requete('UPDATE `players` SET life=life-500 WHERE nom = "'.$nom.'" LIMIT 1;');
  }
  
  if ($frakass>0)
  {
  requete('UPDATE `players` SET frakass=frakass-3 WHERE nom = "'.$nom.'" LIMIT 1;');
  }
   if ($life>100)
  {
  requete('UPDATE `players` SET life=life-1 WHERE nom = "'.$nom.'" LIMIT 1;');
  }
  
  

  // verif key

   require('_verifkey_char.php');
  
  
  
 
  
  
  
  
  
  
  
  
  
  if ($life<1)
  {

  	echo "<br/>Vous etes mort.";
	
	

	$raison='SELECT * FROM log WHERE id_player="'.$mid.'" ORDER BY id DESC;'; 
  	$selec=requete($raison);
  	$data2 = mysqli_fetch_assoc($selec);

 	 echo $data2['objet'];
	 echo '<br/><br/><a href="toolz/fame2.php?nom='.$nom.'">Mater le log de votre miserable vie</a><br>';
	 in_log($nom, "Vous etes mort.", "");
	 
	 $deadranks=requete('SELECT * FROM special WHERE player="'.$nom.'";');
	 while($doto=mysqli_fetch_assoc($deadranks))
	 {
	 	if($doto['nom']&&$doto['nom']!='tube')
		{
			set_special('Blektre',$doto['nom']);
			in_log('Blektre', 'Vous heritez du poste de '.$doto['nom'], $nom.' est mort!');
			
		}
	 
	 }
	 requete('DELETE FROM checkpoint WHERE id_player="'.$id.'";');
	 requete('DELETE FROM sac WHERE id_player="'.$id.'";');
	 
	echo '<br/><br/><br/><br/><a href="index.php">go back</a>';
	exit;
  }

 
?><span class="menu">
<a href='index.php'>[exit]</a> <a href="#chatte" onClick="MM_openBrWindow('toolz/fame.php','fame','scrollbars=yes,resizable=yes,width=700,height=400')">[hall]</a> <a href="#chatte" onclick="MM_openBrWindow('include/pdiary.php?nom=<?php echo $nom; ?>','diary','scrollbars=yes,resizable=yes,width=700,height=400')">[perso]</a> <a href="#chatte" onClick="MM_openBrWindow('include/diary.php','diary','scrollbars=yes,resizable=yes,width=700,height=400')">[global]</a> <a href="#chatte" onClick="MM_openBrWindow('include/invent.php?id=<?php echo $id; ?>','diary','scrollbars=yes,resizable=yes,width=700,height=400')">[inventaire]  

<?php echo ' <span class="time">  time:'.$time.'</span>'; ?> <br>
</a> </span>
<?php


  $capitalbaston=$karma+($frakass*3)-$sex;

echo  "<p>Player ".$player.' ('.$place.')</p>';



  $c=0;
  $info='SELECT * FROM log WHERE player_name="'.$nom.'" ORDER BY id DESC;';
  $info2=requete($info);

   




/// verif the enceinte time

if(check_point($id,'enceinte'))
{
	$enceintetime=get_time_point($id,'enceinte');
	$enceintetime=$time-$enceintetime;
	
	if($enceintetime>100)
		{
			no_point($id,'enceinte');
			in_log($nom, 'Vous avortez','Expiration');
			requete('DELETE FROM family WHERE nom="Bebe" AND mere="'.$nom.'";');
			
		}

}













?>



  <?php
$m1='';
$m2='';
$m3='';
$m4='';
$m5='';

$present=player_present($nom,$place);
$present=$present['nom'];
while($info3 = mysqli_fetch_assoc($info2))
 	{
		  
		  $c++; 
		  $panelstyle='panelstyle'.$c;
		  if($c<4)
			  {


			  echo '<div class="'.$panelstyle.'">'.$info3['time'].'.'.$info3['objet'].'</div>';
			  }
		 if($c>50)
			  {
			  requete('DELETE FROM log WHERE id='.$info3['id'].';');
			  }
			  
	}
?>

<table width="450" border="0" cellpadding="0" cellspacing="10">
  <tr>
    <td width="135" bgcolor="#F3F3F3"><?php if($hiliscore==1)
	{
	echo '<span class="style1">Score:'.$score.'</span>';
	}
	else
	{	
	echo "Score: ".$score; 
	}
	
	?></td>
    <td width="131" bgcolor="#F3F3F3"><?php 
	if($life<20||$hililife==1)
	{
	echo '<span class="style1">Life:'.$life.'</span>';
	}
	else
	{
	echo "Life:".$life;
	}
	
	 ?></td>
	<td width="144" bgcolor="#F3F3F3"><?php if($hilimoney==1)
	{
	echo '<span class="style1">Money:'.$money.' <span style="font-family:arial">e</span></span>';
	}
	else
	{	
	echo "Money: ".$money." <span style='font-family:arial'>e</span>";
	}
	
	?></td>
  </tr>
  <tr>
    <td bgcolor="#F3F3F3"><?php if($hilisex==1)
	{
	echo '<span class="style1">Sex-appeal:'.$sex.'</span>';
	}
	else
	{	
	echo "Sex-appeal:".$sex; 
	}
	
	?></td>
    <td bgcolor="#F3F3F3"><?php if($hilifrakass==1)
	{
	echo '<span class="style1">Frakass:'.$frakass.'</span>';
	}
	else
	{	
	echo "Frakass:".$frakass; 
	}
	
	?></td>
	<td bgcolor="#F3F3F3"><?php if($hilikarma==1)
	{
	echo '<span class="style1">Karma:'.$karma.'</span>';
	}
	else
	{	
	echo "karma:".$karma; 
	}
	
	?></td
  ></tr>
</table>


  <?php
 
if(check_point($id,'message'))
{
echo "<span class='style1'>Vous avez un message sur votre repondeur.</span>";
}
?>










	</div>
		<div id="two">
       