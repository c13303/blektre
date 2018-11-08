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



<?php
   require("../include/connexion.php");
   require("../include/fonctions.php");
  
  

  $verif='SELECT * FROM log ORDER BY id DESC LIMIT 0,100;'; 
  $req=requete($verif);
  $bite=0;
  while ($data = mysqli_fetch_assoc($req))
  {

  echo '<a href="fame2.php?nom='.$data['player_name'].'">'.$data['player_name'].'</a> : '.$data['objet'];
  echo "<br>";
 

  }
  
  

?>
</body>



</html>
