<?php

if ($victime=='')
{
include('include/exit.php');
}


  requete('UPDATE `players` SET place="rackett� par '.$agresseur.' '.$endroit.'" WHERE nom = "'.$victime.'" LIMIT 1;');
  in_log($victime, $agresseur.' vous a rackett�','Pauvre tache');
 
  requete('UPDATE `players` SET karma=karma-50 WHERE nom = "'.$agresseur.'" LIMIT 1;');
  
  requete('UPDATE `players` SET fume="boule" WHERE nom = "'.$victime.'" LIMIT 1;');
  requete('UPDATE `players` SET road1="rackett� par '.$agresseur.' '.$endroit.'" WHERE nom = "'.$victime.'" LIMIT 1;');
  update_stat($nom,'best','+100');
  
  $sec=requete('SELECT money FROM players WHERE nom="'.$victime.'";');
  while ($data = mysqli_fetch_assoc($sec))
{


  if ( $data['money']<100 )
  {
  $momo=$data['money'];
  echo "<br/>D�pouill�!";
  requete('UPDATE `players` SET best=best+500 WHERE nom = "'.$agresseur.'" LIMIT 1;');
  
in_log($victime,$agresseur." vous a d�pouill�!","loser");
in_log($agresseur, "Vous avez d�pouill� ".$victime, "Requin");
  
  requete('UPDATE `players` SET money=money+'.$momo.' WHERE nom = "'.$agresseur.'" LIMIT 1;');
  requete('UPDATE `players` SET money=money-'.$momo.' WHERE nom = "'.$victime.'" LIMIT 1;');
  
  
  }
else
{
  requete('UPDATE `players` SET money=money+100 WHERE nom = "'.$agresseur.'" LIMIT 1;');
  requete('UPDATE `players` SET money=money-100 WHERE nom = "'.$victime.'" LIMIT 1;');

  in_log($agresseur,'Vous avez rackett� '.$victime, 'requin');

  }
}
  ?>
