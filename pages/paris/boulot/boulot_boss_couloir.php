<?php




 $action1='';
$action2='karma=karma+5';
$action3='place="cafe"';


include("include/panel.php"); 

  $patron=mysqli_fetch_assoc(requete('SELECT player FROM special WHERE nom="patron";'));

 ?>
<div id="texte">
  <p>Vous commencez � exposer � monsieur <?php echo $patron['player']; ?> vos id�es.</p>


  <?php 
  
 $dirlo=check_special('directeur');
  $stagiaire=check_special('stagiaire');
  $voyante=check_special('voyante');
     $vendeuse=check_special('vendeuse');
$ivryvendeuse=check_special('ivryvendeuse');

$CDI=check_point($id,'CDI');



	
		
			
			if ($dirlo!=$nom && $CDI && $karma>50 && $nom!=$ivryvendeuse && $nom!=$vendeuse && $nom!=$voyante && $sex>0)
			
				{
						in_log($dirlo,"Vous �tes r�trograd� stagiaire","Loser");
						$id_dirlo=get_id($dirlo);
						no_point($id_dirlo,'bedirecteur');
						set_special($dirlo,'stagiaire');
						
						
						in_log($nom,"Vous �tes promu directeur","Employ� de bureau 200 points");
						in_point($id,'bedirecteur');
						
						requete('UPDATE `players` SET karma=karma+50 WHERE nom = "'.$nom.'" LIMIT 1;');
						requete('UPDATE `players` SET sex=sex+50 WHERE nom = "'.$nom.'" LIMIT 1;');
						set_special($nom,'directeur');
						$bonus1="karma";
						$bonus12="sex";
						
						 echo "<br>- Patron, voil�, j'ai de grandes id�es pour la boite. Par exemple, on pourrait, je sais pas moi,
						 virer ".$dirlo." Cette grosse pute ne sert � rien, si on r�fl�chit bien.<br><br>Le patron fait semblant de r�fl�chir et 
						 vous refait le coup des yeux de Biche.
						 <br>- Tr�s bien, ".$nom.". Vous m'avez l'air ambitieux. Je vous donne le poste de directeur.<br><br>Le patron vous offre une cigarette et vous fait un clin d'oeil.
						 Vous observez, un peu mal � l'aise, le pli de son pantalon.";
						 
						  $m1="Je vais dans mon bureau";
						$v1="paris/boulot/bureau";
						$m2="Je vais � la machine � caf�";
						$v2="paris/boulot/cafe";
						$m3="Je prends les lunettes de soleil du patron et je me sauve";
						$v3="paris/_street/street";
 				 }
  				else
				{

					
					if ($present)
					{
											echo $present."  passe en courant donner des dossier au patron, et ils s`en vont tous les deux en discutant de fa�on
					tr�s professionnelle. Vous manquez clairement de charisme et de sex-appeal face � cette dinde.";
					$hapen=$present;
						$m2="je retourne bosser comme un con";
						$v2="paris/boulot/bureau";
						$m3="J'attends qu'il ressorte du bureau et je le fume";
						$v3="sp/fume";
					}
					else
					{
						echo "<br>Patricia passe en courant donner des dossier au patron, et ils s`en vont tous les deux en discutant de fa�on
						tr�s professionnelle.<br>";
						$m2="Je retourne bosser comme un con";
						$v2="paris/boulot/boulot_dossier2";
						$m3="Je consid�re qu'elle s'est assez foutu de ma gueule et je la fume";
						$v3="paris/boulot/bureau_schtoss";
						$opt1='patoche';
					}
			}



// chouicess
  
  
  
  
    ?>

 
<?php 
$_SESSION['flashsene']='bureauidee';
$perso2=check_special('patron');
 ?>

 














