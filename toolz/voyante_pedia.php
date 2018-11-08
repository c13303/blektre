<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>


<title>BLEKTRE</title>
<link rel="stylesheet" type="text/css" href="../style/blektre.css" />
<style type="text/css">

</style>
</head>

<body>


  <p align="center"><?php

include("../include/connexion.php");

$pages=requete('SELECT * FROM pedia WHERE alias="" ORDER BY need;');

?>


</p>

  <p align="center">Entrees pour la voyante</p>
  <p align="center"><a href="voyante_entree.php">INSERT/MODIF</a></p>
  <table width="653" border="2">
    <tr bgcolor="#D4DFAA">
      <td width="88"><div align="center">keyword </div></td>
      <td width="123"><div align="center">alias</div></td>
      <td width="428">&nbsp;</td>
    </tr>
	
	<?php
	while($data=mysqli_fetch_assoc($pages))
		{
			echo '<tr>';
			$aliases=requete('SELECT need FROM pedia WHERE alias="'.$data['need'].'";');
			
			$dif=nl2br($data['definition']);
			echo '<td><div align="center"><a href="voyante_modif_in.php?kw='.$data['need'].'">'.$data['need'].'</a></div></td>';
			echo '<td><div align="center">';
			while ($al=mysqli_fetch_assoc($aliases))
				{
				echo '['.$al['need'].']<br>';
				}
			echo '</div></td>';
			echo '<td>'.$dif.'</td>';
		echo '</tr>';
		
		}
	
	?>
</table>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;  </p>
