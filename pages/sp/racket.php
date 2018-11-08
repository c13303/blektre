<?php

if ($victime=='')
{
include('include/exit.php');
}


  requete('UPDATE `players` SET place="racketté par '.$agresseur.' '.$endroit.'" WHERE nom = "'.$victime.'" LIMIT 1;');
  in_log($victime, $agresseur.' vous a racketté','Pauvre tache');
 
  requete('UPDATE `players` SET karma=karma-50 WHERE nom = "'.$agresseur.'" LIMIT 1;');
  
  requete('UPDATE `players` SET fume="boule" WHERE nom = "'.$victime.'" LIMIT 1;');
  requete('UPDATE `players` SET road1="racketté par '.$agresseur.' '.$endroit.'" WHERE nom = "'.$victime.'" LIMIT 1;');
  update_stat($nom,'best','+100');
  
  $sec=requete('SELECT money FROM players WHERE nom="'.$victime.'";');
  while ($data = mysqli_fetch_assoc($sec))
{


  if ( $data['money']<100 )
  {
  $momo=$data['money'];
  echo "<br/>Dépouillé!";
  requete('UPDATE `players` SET best=best+500 WHERE nom = "'.$agresseur.'" LIMIT 1;');
  
in_log($victime,$agresseur." vous a dépouillé!","loser");
in_log($agresseur, "Vous avez dépouillé ".$victime, "Requin");
  
  requete('UPDATE `players` SET money=money+'.$momo.' WHERE nom = "'.$agresseur.'" LIMIT 1;');
  requete('UPDATE `players` SET money=money-'.$momo.' WHERE nom = "'.$victime.'" LIMIT 1;');
  
  
  }
else
{
  requete('UPDATE `players` SET money=money+100 WHERE nom = "'.$agresseur.'" LIMIT 1;');
  requete('UPDATE `players` SET money=money-100 WHERE nom = "'.$victime.'" LIMIT 1;');

  in_log($agresseur,'Vous avez racketté '.$victime, 'requin');

  }
}
  ?>
