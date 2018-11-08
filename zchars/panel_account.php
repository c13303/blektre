<?php
  
  if(!$_SESSION['pid'])erreur('lost session zchar  panel_account');
  
  $verif='SELECT * FROM players WHERE nom="'.$nom.'";'; ////// PREMIER CHECK DU PERSO
  
  $req=requete($verif);
  $data = mysqli_fetch_assoc($req);
  
  global $id;
  $id=$data['id'];
  $_SESSION['pid']=$id;
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

  // verif key
  
  
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

$m1='';
$m2='';
$m3='';
$m4='';
$m5='';

$present=player_present($nom,$place);
$present=$present['nom'];
?>