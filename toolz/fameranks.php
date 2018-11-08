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


  <p><?php

include("../include/connexion.php");
$nom=$_GET['nom'];


 $verif='SELECT * FROM special ORDER BY id;';
 
 
 
  $req=requete($verif);
?>
    <a href="fame.php">Go back</a> </p>
	

  <div align="center"></div>
  <table width="826" border="0" cellpadding="0" cellspacing="5">
  <tr>
    <td width="149" bgcolor="#EAEAEA"><div align="center">POSITION</div></td>
    <td width="147" bgcolor="#E9E9E9"><div align="center">PLAYER</div></td>
	<td width="510" bgcolor="#E9E9E9"><div align="center">VALUE</div></td>
  </tr>
  
      <?php while ($data = mysqli_fetch_assoc($req))
{

echo '<tr><td><div align="center">'.$data['nom'].'</td><td><div align="center"><a href="fame2.php?nom='.$data['player'].'">'.$data['player'].'</a></td><td><div align="center">'.$data['title'].'</td>
</tr>';
} 
?>

</table>

</body>

</html>
