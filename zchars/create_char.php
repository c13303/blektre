 

<div id='texte'>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="400" height="200">
  <param name="movie" value="../FUCK/check2.swf" />
  <param name="quality" value="high" />
  <embed src="../FUCK/check2.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="400" height="200"></embed>
</object>
  <div align="center">
      <?php




function check_stat($nom)
{
$mere=mysqli_fetch_assoc(requete('SELECT * FROM players WHERE nom="'.$nom.'";'));
return($mere);
}




// FONCTION DE RESET

if($nom=="RESET"&&$password=="holyshit")
{
echo"shit";
echo "Integration persos Blektre !";


requete('UPDATE special SET player="Blektre";');
requete('UPDATE special SET title="Indefini";');
requete('UPDATE special SET value=60;');
requete("INSERT INTO `players` ( `id` , `nom` , `best` , `road1` , `retour` , `road3` , `road4` , `life` , `karma` , `sex` , `money` , `frakass` , `place` , `fume` , `time`)
VALUES (
'NULL', 'Blektre', '0', '0', '0', '0', 'ours', '100', '0', '0', '12', '0', 'Blektre STAFF Headquarters', '0','0'
);");
requete("INSERT INTO `family` ( `child_id` , `nom` , `mere` , `pere` )
VALUES (
'NULL', 'Blektre', 'Blektre', 'Blektre'
);");

requete('INSERT INTO special(nom) VALUES("dealer");');
requete('INSERT INTO special(nom) VALUES("mac");');
requete('INSERT INTO special(nom) VALUES("prostituee");');
requete('INSERT INTO special(nom) VALUES("patron");');
requete('INSERT INTO special(nom) VALUES("directeur");');
requete('INSERT INTO special(nom) VALUES("josie_lover");');
requete('INSERT INTO special(nom) VALUES("clochard");');
requete('INSERT INTO special(nom) VALUES("tube");');
requete('INSERT INTO special(nom) VALUES("Shaolin");');
requete('INSERT INTO special(nom) VALUES("keuf");');

requete('UPDATE special SET player="Blektre";');
requete('UPDATE special SET title="Indefini";');
requete('UPDATE special SET value=60;');



require('../include/exit.php');
}







/////





/// SESSION LAMA
session_start();
$ids=session_id();

$nom=strtolower($nom);
$nom=ucfirst($nom);




 
  
  // verifier l'account
  
  $verif='SELECT * FROM accountz WHERE nom="'.$nom.'";';
  $req=requete($verif);
  $data = mysqli_fetch_assoc($req);

	if ($password=='')
					{
					echo "entrez un password svp";
					require('../include/exit.php');
					}
					


		
			//CHECK NEW PLAYER IP
			 function get_ip() {
    if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    elseif(isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ip  = $_SERVER['HTTP_CLIENT_IP'];
    }
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip; 
}
 $ip=get_ip();
 
		
		
		
			
		////INSERT THE NEW PLAYER
		
		
			$insertplayer='INSERT INTO players VALUES(NULL, "'.$nom.'", 0,0,0,0,"cha",100,0,0,12,0,"Dans le ventre de sa mere '.$mere.'",0,0);';
			$life=100;
			requete($insertplayer);
			requete('INSERT INTO passwords VALUES("'.$nom.'", "'.$password.'");');

			
			
			
			
			//////
			/// CHECK FAMILY OF THE NEW PLAYER
			
			//check remps of the last baby
			$fils=requete('SELECT child_id,nom,pere,mere FROM family WHERE nom="bebe" ORDER BY child_id DESC LIMIT 1,1;');
			$data = mysqli_fetch_assoc($fils);
			$pere=$data['pere'];
			$mere=$data['mere'];
			$child_id=$data['child_id'];
			
			//verifier que la reum du last baby est vivante sinon on bute son bebe
			

			  		  $lifemere=check_stat($data['mere']);			
					  $lifemere=$lifemere['life'];
					  
					  if ($lifemere<1)
					  {
					  requete('DELETE FROM family WHERE mere="'.$data['mere'].'" AND nom="bebe";');
					  }

			  
			  
			  /// donc mere il y a, remplacer last baby par new player

			  if ($lifemere>0)
					  {
						 //ajouter bebe si yen a pas
						  if(!$child_id)
						  {
						  requete('INSERT INTO family VALUES(NULL,"Bebe","Blektre","Blektre");');
						  }
					  		//
							
							//check les id et time parents
							$idm=mysqli_fetch_assoc(requete('SELECT id,time FROM players WHERE nom="'.$mere.'";'));
							$idp=mysqli_fetch_assoc(requete('SELECT id,time FROM players WHERE nom="'.$pere.'";'));
							$idpa=$idp['id'];
							$idma=$idm['id'];
							$idm=$idm['time'];
							$idp=$idm['time'];
							
							
							
							
						  requete('UPDATE `family` SET nom="'.$nom.'" WHERE child_id='.$child_id.';');
						  $objet13='Votre fils '.$nom.' est né';
						  requete('INSERT INTO log VALUES (NULL, "'.$mere.'", "'.$objet13.'", "Felicitations",'.$idm.','.$idma.');');
						  requete('INSERT INTO log VALUES (NULL, "'.$pere.'", "'.$objet13.'", "Felicitations",'.$idp.','.$idpa.');');

						  requete('UPDATE `players` SET place="dans le ventre de sa mere '.$mere.'" WHERE nom = "'.$nom.'" LIMIT 1;');
						  
						  }
						  
					
			else
						{
						
						
						requete('INSERT INTO `family` VALUES (NULL, "'.$nom.'", "Blektre", "Blektre");');
						
						}



		}


		else
		{
		
		echo "Welcome back, Player ".$player;
		echo "<br>";
		
		
		
		
	
		// verify password
		
		
					
		$passoriginal=mysqli_fetch_assoc(requete('SELECT password FROM passwords WHERE player="'.$player.'";'));
		$passoriginal=$passoriginal['password'];
		if ($passoriginal!=$password)
					{
					 echo "<br><br>WRONG PASSWORD BABY!";

					 require('../include/exit.php');
					}
			else
			{

			}
		
		}  

/// AFFICHAGE 

$fils2=requete('SELECT * FROM family WHERE nom="'.$nom.'";');
  $parents= mysqli_fetch_assoc($fils2);
echo "<br><br>Fils de ".$parents['mere']." et ".$parents['pere'];



if ($road1)
{
echo "<br/><br/><b>Vous vous reveillez, avec le desagreable souvenir d'avoir ete ".$road1."</b>";
requete('UPDATE `players` SET road1="" WHERE nom = "'.$nom.'" LIMIT 1;');
requete('UPDATE `players` SET fume="" WHERE nom = "'.$nom.'" LIMIT 1;');
}

/// IF DEAD, RESET ?
if ($life<1)
{
	echo "<br><br><br><br> RESET </br></br>";
	$m1="ok";
	$v1="reset";
	 
	require('../include/exit.php');
}




?>
  

     
      <form method="post" action="filtre.php">
  <p align="center">&nbsp;
  
  <?php 

$_SESSION['hapen'] = $hapen;



if($new=="oui")
{
$rul='check2';





}
else
{
$rul='1';

$v='check';

/// FLASH
$flush='FUCK/'.$v.'.swf?var1='.$nom.'&skin1='.$road4;
$flush=str_replace(" "," ",$flush);
$flush=utf8_encode($flush);



if($nom=='Hugo')
{
echo $flush;
}
}
?>











</p>


	
	

	

  



  <div align="center">
  <input type="hidden" name="ids" id="ids" value="<?php echo $ids; ?>" >
  

  <?php 

$m1='oui';

requete('INSERT INTO clef(id_player,autorized) VALUES ("'.$my_id.'", "1");');
	
	
$_SESSION['nom']=$nom;
$_SESSION['hapen']=$hapen;
  session_register('nom');
  session_register('hapen');
?>
     <input name="v" type="hidden" id="sexe" value="<?php echo $rul; ?>" />
     <input name="submit" type="submit" id="Submit" value="Goldorak Go!" />
  

      </form>
  
