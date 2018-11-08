<?php  $action1='place ="rue des voyous"';

include("include/panel.php");


$prostituee=mysqli_fetch_assoc(requete('SELECT player,title,value FROM special WHERE nom="prostituee";'));
 $hapen=$prostituee['player'];

 $mac=mysqli_fetch_assoc(requete('SELECT player,title,value FROM special WHERE nom="mac";'));
 $tunepute=mysqli_fetch_assoc(requete('SELECT money FROM players WHERE nom="'.$hapen.'";'));
 $tunepute=$tunepute['money'];





 $putelife=check_stat($hapen);
 $putelife=$putelife['life'];
$perso4=$prostituee['player'];
$perso3=$nom;
$_SESSION['flashsene']="erre_mac";

 ?>
<div id="texte"> <p>
 <?php



  if ($putelife<50)
  {
   echo "Votre pute, ".$hapen.", est salement amochée par vos soins. Elle chiale doucement. Vous lui faites un calin.";
   update_stat($hapen,'life','+25');

   $m3="Ok baby";
   $v3="paris/ruelle/erre";




   
  include('include/exit.php');

  }




  if ($putelife<1)
  {
   echo $putelife. "Votre pute, ".$hapen.", s'est faite fumer.";



  }
  else
  {
					 echo $prostituee['title']; ?>
						, ou plutot <?php echo $prostituee['player']; ?> qui porte une perruque, est votre pute. </p>
						 <p>

						   <?php
						   if ($tunepute<1)
						   {
						   echo "<br><br>Votre pute n'a plus un rond.";
						   $m1="Je la fume";
						   $v1="paris/ruelle/erre_fume_hapen";
						   }
						   else
						   {
						   
						   $pourcentage=mysqli_fetch_assoc(requete('SELECT value FROM special WHERE nom ="prostituee";'));
							$pourcentage=$pourcentage['value'];
						   echo "<br><br>Vous lui réclamez la tune, et elle vous donne les 50% de benefices qui vous reviennent, ce qui fait ".$pourcentage." euros au total.";
							
						   requete('UPDATE `players` SET money=money+'.$pourcentage.' WHERE nom = "'.$nom.'" LIMIT 1;');
						  requete('UPDATE `players` SET karma=karma-200 WHERE nom = "'.$nom.'" LIMIT 1;');
						  requete('UPDATE `players` SET money=money-'.$pourcentage.' WHERE nom = "'.$hapen.'" LIMIT 1;');
						   requete('UPDATE `players` SET sex=sex-25 WHERE nom = "'.$hapen.'" LIMIT 1;');
						   requete('UPDATE `players` SET karma=karma+25 WHERE nom = "'.$hapen.'" LIMIT 1;');
						  requete('UPDATE `special` SET value=0 WHERE nom = "prostituee" LIMIT 1;');
						  
						  
						   in_log($nom, "Vous ramassez les tunes de votre pute ".$hapen, $pourcentage);
						   in_log($hapen, "Votre mac ".$nom." vous taxe de la tune", $pourcentage);
						   

						   $m2="Je la tabasse";
						   $v2="paris/ruelle/erre_fume_hapen";
						   }

						}


   $m3="Ok baby";
   $v3="paris/ruelle/erre";




    ?>
    </p>
  </p>
 
<?php



 ?>

 
























