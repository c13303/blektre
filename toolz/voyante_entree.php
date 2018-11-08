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



?>

</p>

  <p align="center">Entrees pour la voyante</p>
  <p align="center"><a href="voyante_pedia.php">[afficher tout le dico] </a></p>
  <p align="center">
  <form method="post" action="voyante_entree_OK.php">
    <div align="center">
  MOT CL&eacute;:
  <input type="text" name="keyword" id="nom4" />
  </p>
</div>
    <p align="center">&nbsp;</p>
  <p align="center">alias(mettre un mot cl&eacute; ORIGINAL (pas alias) d&eacute;j&agrave; d&eacute;fini) OU definir: </p>
  <p align="center">ALIAS
    <input type="text" name="alias" id="alias" /> 
/    DEFINE
    <textarea name="define" cols="50" rows="8" id="textarea"></textarea>
	<p align="center">    
	<p align="center">
      <input type="submit">
</form>
  </p>
  <p align="center">&nbsp;  </p>
