<?php

if ($nom=='')
{
include('include/exit.php');
}
$r1=rand(1,20);


  requete('UPDATE `players` SET life=life-10 WHERE nom = "'.$nom.'" LIMIT 1;');
  requete('UPDATE `players` SET place="fumé par '.$hapen.' '.$endroit.'" WHERE nom = "'.$nom.'" LIMIT 1;');
  requete('UPDATE `players` SET fume="boule" WHERE nom = "'.$nom.'" LIMIT 1;');
  requete('UPDATE `players` SET road1="fumé par '.$hapen.' '.$endroit.'" WHERE nom = "'.$nom.'" LIMIT 1;');
  requete('UPDATE `players` SET best=best+100 WHERE nom = "'.$hapen.'" LIMIT 1;');
  requete('UPDATE `players` SET karma=karma-100 WHERE nom = "'.$hapen.'" LIMIT 1;');
requete('UPDATE `players` SET sex=sex-'.$r1.' WHERE nom = "'.$nom.'" LIMIT 1;');
	
      in_log($hapen,"Vous avez fumé ".$nom." ".$endroit, "Cakos");
  in_log($nom,"Vous avez été fumé par ".$hapen." ".$endroit, "Bolos");
  
  $isdead=requete('SELECT life FROM players WHERE nom="'.$nom.'";');
  while ($data = mysqli_fetch_assoc($isdead))
{


  if ( $data['life']<1 )
  {
  echo "<br/>Vous avez été tué par cet enculé!!";
  in_log($hapen, 'Vous avez tué '.$nom.' '.$endroit.'!' , "");
  in_log($nom, $hapen.' vous a tué '.$endroit.'!' , "R.I.P");
  requete('UPDATE special SET player="Blektre" WHERE player="'.$nom.'";');
  
  
  
  }
  }
  $opt1="LOSE";
    $bonus22="score";
$malus22="karma";
$malus12="life";
  ?>
