  <?php 
  
  $lifehapen=check_stat($hapen);
  $lifehapen=$lifehapen['life'];
  
  
  
  
  if ($sex>0)
  {
  echo "Vous pinez copieusement dans son derri�re. <br/> Vous voil� en train de fumer tranquillement une cigarette tandis que ".$hapen." se met � chialer doucement."; 
  
  requete('UPDATE `players` SET place="viol� par '.$nom.' '.$endroit.'" WHERE nom = "'.$hapen.'" LIMIT 1;');
  requete('UPDATE `players` SET fume="boule" WHERE nom = "'.$hapen.'" LIMIT 1;');
  requete('UPDATE `players` SET road1="viol� par '.$nom.' '.$endroit.'" WHERE nom = "'.$hapen.'" LIMIT 1;');
  requete('UPDATE `players` SET best=best+500 WHERE nom = "'.$nom.'" LIMIT 1;');
  $bonus1="score";
  $malus1="karma";
  $malus12="sex";
  requete('UPDATE `players` SET karma=karma-500 WHERE nom = "'.$nom.'" LIMIT 1;');
  requete('UPDATE `players` SET sex=sex-100 WHERE nom = "'.$nom.'" LIMIT 1;');
  
 
  in_log($nom,"Vous avez viol� ".$hapen." ".$endroit, "500 points");
  in_log($hapen, "Vous avez �t� viol� par ".$nom." ".$endroit, "Seigneur ..");
  
 $hapid=get_id($hapen);
  $sida1=check_point($id,'sida');
  $sida2=check_point($hapid,'sida');
  $capotes=check_bag($id,'capotes');
  $capoten=check_bag($hapid,'capotes');
  
  if($capotes>0)
  {
  no_bag($id,'capotes','1');
  $capotes=$capotes-1;
  echo 'Il vous reste '.$capotes.' capotes.';
  }
  
  if($capoten>0 && $capotes<1)
  {
   no_bag($hapid,'capotes','1');
  $capoten=$capoten-1;
  echo $hapen.' avait des capotes.';
  }
  
  if($sida && $hapen!='Blektre' && !$sida2 && !$capotes && !$capoten)
  {
  	in_log($nom,'Vous refilez le SIDA � '.$hapen,'Pourri!'); echo '<p>Vous oubliez de foutre une capote et refilez le SIDA � '.$hapen.', qui se met � hurler quand vous lui annoncez.</p>';
	in_log($hapen, $nom.' vous refile le SIDA','Bolos!');
	in_point($hapid,'sida');
  }
  
  if($sida2 && $hapen!='Blektre' && !$sida && !$capotes && !$capoten)
  {
  	in_log($hapen,'Vous refilez le SIDA � '.$nom,'Pourri!');
	in_log($nom, $hapen.' vous refile le SIDA','Bolos!');
	echo '<p>N�anmoins, dans un sourire narquois, '.$hapen.' vous explique qu`il avait le SIDA et que vous venez de le choper.</p>';
	in_point($id,'sida');
  }
  
  
  include('pages/sp/_CHILD.php');
  
   $opt1='WIN';
   }
  else
  {
  echo "Vous avez une franche peine � bander. <br/> Vous voil� en train de fumer tranquillement une cigarette tandis que ".$hapen." se fout bien de votre gueule."; 
  $opt1='LOSE';
  requete('UPDATE `players` SET karma=karma-50 WHERE nom = "'.$nom.'" LIMIT 1;');
  $malus1="karma";
  


in_log($nom, "Vous avez tent� de violer ".$hapen." ".$endroit." sans arriver � bander","Path�tique");
in_log($hapen, $nom." a tent� de vous violer ".$endroit." sans arriver � bander", "Le con!");

  
  
  
  }
  
  
 
  
  
  ?>
