<?php

if ($hapen=='')
{
include('include/exit.php');
}

  requete('UPDATE `players` SET life=life-5 WHERE nom = "'.$hapen.'" LIMIT 1;');
  requete('UPDATE `players` SET place="fum� par '.$nom.' '.$endroit.'" WHERE nom = "'.$hapen.'" LIMIT 1;');
  requete('UPDATE `players` SET fume="boule" WHERE nom = "'.$hapen.'" LIMIT 1;');
  requete('UPDATE `players` SET road1="fum� par '.$nom.' '.$endroit.'" WHERE nom = "'.$hapen.'" LIMIT 1;');
  requete('UPDATE `players` SET best=best+100 WHERE nom = "'.$nom.'" LIMIT 1;');
  requete('UPDATE `players` SET karma=karma-100 WHERE nom = "'.$nom.'" LIMIT 1;');
  if($frakass>50)
  {
   update_stat($nom,'frakass','-100');
  }
  
    in_log($nom,"Vous avez fum� ".$hapen." ".$endroit, "Cakos");
  in_log($hapen,"Vous avez �t� fum� par ".$nom." ".$endroit, "Bolos");
  
  
  $isdead=requete('SELECT life FROM players WHERE nom="'.$hapen.'";');
  while ($data = mysqli_fetch_assoc($isdead))
{


  if ( $data['life']<1 )
  {
  echo "<br/>Vous avez tu� cet encul� !!";
  $objet1='Vous avez tu� '.$hapen.' '.$endroit.'!';
  
  in_log($nom, 'Vous avez tu� '.$hapen.' '.$endroit.'!' , "Killer");
    requete('UPDATE special SET player="Blektre" WHERE player="'.$hapen.'";');
  in_log($hapen, $nom.' vous a tu� '.$endroit.'!' , "R.I.P");
  
  
  }
  }
  $opt1="WIN";
  $bonus12="score";
$malus12="karma";
$malus22="life";
  
  ?>
