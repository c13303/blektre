  <?php 
  
  $lifehapen=check_stat($hapen);
  $lifehapen=$lifehapen['life'];
  
  
  
  
  if ($sex>0)
  {
  echo "Vous pinez copieusement dans son derrière. <br/> Vous voilà en train de fumer tranquillement une cigarette tandis que ".$hapen." se met à chialer doucement."; 
  
  requete('UPDATE `players` SET place="violé par '.$nom.' '.$endroit.'" WHERE nom = "'.$hapen.'" LIMIT 1;');
  requete('UPDATE `players` SET fume="boule" WHERE nom = "'.$hapen.'" LIMIT 1;');
  requete('UPDATE `players` SET road1="violé par '.$nom.' '.$endroit.'" WHERE nom = "'.$hapen.'" LIMIT 1;');
  requete('UPDATE `players` SET best=best+500 WHERE nom = "'.$nom.'" LIMIT 1;');
  $bonus1="score";
  $malus1="karma";
  $malus12="sex";
  requete('UPDATE `players` SET karma=karma-500 WHERE nom = "'.$nom.'" LIMIT 1;');
  requete('UPDATE `players` SET sex=sex-100 WHERE nom = "'.$nom.'" LIMIT 1;');
  
 
  in_log($nom,"Vous avez violé ".$hapen." ".$endroit, "500 points");
  in_log($hapen, "Vous avez été violé par ".$nom." ".$endroit, "Seigneur ..");
  
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
  	in_log($nom,'Vous refilez le SIDA à '.$hapen,'Pourri!'); echo '<p>Vous oubliez de foutre une capote et refilez le SIDA à '.$hapen.', qui se met à hurler quand vous lui annoncez.</p>';
	in_log($hapen, $nom.' vous refile le SIDA','Bolos!');
	in_point($hapid,'sida');
  }
  
  if($sida2 && $hapen!='Blektre' && !$sida && !$capotes && !$capoten)
  {
  	in_log($hapen,'Vous refilez le SIDA à '.$nom,'Pourri!');
	in_log($nom, $hapen.' vous refile le SIDA','Bolos!');
	echo '<p>Néanmoins, dans un sourire narquois, '.$hapen.' vous explique qu`il avait le SIDA et que vous venez de le choper.</p>';
	in_point($id,'sida');
  }
  
  
  include('pages/sp/_CHILD.php');
  
   $opt1='WIN';
   }
  else
  {
  echo "Vous avez une franche peine à bander. <br/> Vous voilà en train de fumer tranquillement une cigarette tandis que ".$hapen." se fout bien de votre gueule."; 
  $opt1='LOSE';
  requete('UPDATE `players` SET karma=karma-50 WHERE nom = "'.$nom.'" LIMIT 1;');
  $malus1="karma";
  


in_log($nom, "Vous avez tenté de violer ".$hapen." ".$endroit." sans arriver à bander","Pathétique");
in_log($hapen, $nom." a tenté de vous violer ".$endroit." sans arriver à bander", "Le con!");

  
  
  
  }
  
  
 
  
  
  ?>
