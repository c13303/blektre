<?php
$gonzes=requete('SELECT player2 FROM relationship WHERE player="'.$nom.'" AND relation="maques";');
		while ($feum=mysqli_fetch_assoc($gonzes))
		{
		if($feum['player2']==$hapen)
			{
				echo "<p>-Cheri, t'es vraiment con tu sais.<br>- Pourquoi, demandez vous comme un vrai con.<br>- On est deje maques.</p>";
				$stillmaqued='OHGREEDOHYES';
			
			
			
			}
		}
	if($stillmaqued!='OHGREEDOHYES')
	{
	in_log($nom,'Vous vous mettez en couple avec '.$hapen, 'love story +100 points');
    in_log($hapen, $nom.' se met en couple avec vous', 'love story');
	update_stat($nom, 'best', '+100');
	$bonus1="score";
	requete('INSERT INTO relationship VALUES ("'.$nom.'", "'.$hapen.'","maques");');
	requete('INSERT INTO relationship VALUES ("'.$hapen.'", "'.$nom.'","maques");');
	   }

?>