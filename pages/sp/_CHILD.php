<?php
if ($lifehapen>25&&$life>25)
  {
   
	  $hapenid=get_id($hapen);

	  $gosses=check_point($hapenid, 'enceinte');
	  
	  // echo "id:".$hapenid.' sseugo '.$gosses;
	  if(!$gosses)
	  {
		  in_log($hapen,"Vous �tes enceinte de ".$nom, "Le miracle de la vie");
		  in_log($nom, $hapen." tombe enceinte de vous", "allocs +500 euros!");
		  in_point($hapenid, 'enceinte');
		  requete('INSERT INTO family VALUES (NULL, "b�b�", "'.$hapen.'", "'.$nom.'");');
		  if($capotes>0 || $capoten >0) echo 'La capote �clate au moment de jouir.';
		  echo $hapen.' tombe en cloque ! Vous touchez 500 euros d`allocs.';
		  	update_stat($nom, 'sex', '-500');
			update_stat($nom, 'money', '+500');
		  	$bonus1="money";
			$malus1="sex";
		  
	  }
	  
	  else
	  {
	  echo $hapen.' �tait d�j� en cloque.';
	  }
  }
  else
  {
  echo " L`un de vous est en trop mauvaise sant� pour procr�er.";
  }
?>
