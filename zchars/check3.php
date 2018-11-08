 

	
	
	<?php
 $v=$_POST['v'];


$char1=$_SESSION['char1'];
$char2=$_SESSION['char2'];
$char3=$_SESSION['char3'];

 $skinn=$_POST['skin'];
 $nom=$_POST['nomp'];
 $bio=clean($_POST['bio']);

$nom=clean($nom);
$nom= preg_replace("[^a-zA-Zeeee ]", "", $nom);
$nom=strtolower($nom);
$nom=ucfirst($nom);



  // verif key
  
   /// VERIF QUE LE NOM N'EST PAS PRIS
   
   $all=requete('SELECT nom FROM players;');
   
   while($foutre=mysqli_fetch_assoc($all))
   {
   	if($foutre['nom']==$nom)
		{
		echo 'Un perso de ce nom existe deja';
		require('../include/exit.php');
		}
	
	
   }
  
  if(!$nom||!$bio)
  {
  	echo "GROS GROS MAIS GROS ta oublie de mettre un nom a ton bonome, ou bien ta oublie de mettre ta bio.";
	require('../include/exit.php');
  }

  


 
 

 
 
 
 
 ////INSERT THE NEW PLAYER
		
		
			$insertplayer='INSERT INTO players VALUES(NULL, "'.$nom.'", 0,0,0,0,"'.$skinn.'",100,0,0,12,0,"Dans le ventre de sa mere '.$mere.'",0,0);';
			
			
			$life=100;
			requete($insertplayer);
			$id=check_stat($nom);
			$id=$id['id'];
			requete('
						INSERT INTO bio
						VALUES (
						NULL , '.$id.', "'.$bio.'"
						)
					;');
			
			echo 'Le perso '.$nom.' est né!';
			?>
			  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="200" height="200">
    <param name="movie" value="FUCK/intro.swf?sene=account&var1=<?php echo $nom; ?>&skin1=<?php echo $skinn; ?>" />
    <param name="quality" value="high" />
    <embed src="FUCK/intro.swf?sene=account&var1=<?php echo $nom; ?>&skin1=<?php echo $skinn; ?>" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="200" height="200"></embed>
   </object>
			
			<?php
			
			
			
			
			//////
			/// CHECK FAMILY OF THE NEW PLAYER
			
			//check remps of the last baby
			$fils=requete('SELECT child_id,nom,pere,mere FROM family WHERE nom="bebe" ORDER BY child_id DESC LIMIT 1,1;');
			$data = mysqli_fetch_assoc($fils);
			$pere=$data['pere'];
			$mere=$data['mere'];
			$child_id=$data['child_id'];
			
			
			//ajouter bebe si yen a pas
					 	if(!$child_id)
					 {
						requete('INSERT INTO family VALUES(NULL,"bebe","Blektre","Blektre");');
						$fils=requete('SELECT child_id,nom,pere,mere FROM family WHERE nom="bebe" ORDER BY child_id DESC LIMIT 1,1;');
						$data = mysqli_fetch_assoc($fils);
						$pere=$data['pere'];
						$mere=$data['mere'];
						$child_id=$data['child_id'];
					 }
			
			//verifier que la reum du last baby est vivante sinon on bute son bebe
			



			  
			  
			  /// donc mere il y a, remplacer last baby par new player

		
					  		//
							
							//check les id et time parents
							$idmama=mysqli_fetch_assoc(requete('SELECT * FROM players WHERE nom="'.$mere.'";'));
							$idpapa=mysqli_fetch_assoc(requete('SELECT * FROM players WHERE nom="'.$pere.'";'));
							$idm=$idmama['time'];
							$idp=$idpapa['time'];
							$idmere=$idmama['id'];
							no_point($idmere,'enceinte');
							
							
							
							
						  requete('UPDATE `family` SET nom="'.$nom.'" WHERE child_id='.$child_id.';');
						  $objet13='Votre fils '.$nom.' est né';
						  requete('INSERT INTO log VALUES (NULL, "'.$mere.'", "'.$objet13.'", "Felicitations",'.$idm.','.$idpapa['id'].');');
						  requete('INSERT INTO log VALUES (NULL, "'.$pere.'", "'.$objet13.'", "Felicitations",'.$idp.','.$idmama['id'].');');

						  requete('UPDATE `players` SET place="dans le ventre de sa mere '.$mere.'" WHERE nom = "'.$nom.'" LIMIT 1;');
						  
					
						
 
 set_chara($nom,'road4',$skinn);
 $road4=$skinn;
 
 $i=0;
 
 if(!$char1&&$i==0)
 {
 requete('UPDATE accounts SET char1="'.$nom.'" WHERE nom="'.$noma.'";');
 $i=1;
 }
 if(!$char2&&$i==0)
 {
 requete('UPDATE accounts SET char2="'.$nom.'" WHERE nom="'.$noma.'";');
 $i=1;
 }
 if(!$char3&&$i==0)
 {
 requete('UPDATE accounts SET char3="'.$nom.'" WHERE nom="'.$noma.'";');
 $i=1;
 }
 
 
 
 

?>


  <form method="post" action="filtre.php">
    <p align="center">        
      <input type="hidden" name="ids" id="ids" value="<?php echo $ids; ?>" >
                  

          <?php 
		
		

$m1='oui';
$v='check_account2';

requete('INSERT INTO clef(id_player,autorized) VALUES ("'.$my_id.'", "1");');
	
	
$_SESSION['noma']=$noma;
$_SESSION['nom']=$nom;
$_SESSION['hapen']=$hapen;

?>
          <input name="v" type="hidden" id="sexe" value="<?php echo $v; ?>" />
          <input name="submit" type="submit" id="Submit" value="Goldorak Go!" />
                  
</p>
</form>

 
<?php
exit;
?>
 


