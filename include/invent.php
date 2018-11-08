 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
<link rel="stylesheet" type="text/css" href="../blektre.css" />
</head>

 
  <?php
  
  
require('connexion.php');
$id=$_GET['id'];
	if(!id) exit('rofl');
  $verif='SELECT * FROM sac WHERE id_player='.$id.' ORDER BY id DESC;'; 
  $req=requete($verif);
  $bite=0;
  echo "<b>OBJETS</b>(quantite)<br/>";
  while ($data = mysqli_fetch_assoc($req))
  {
  $it=$data['objet'];
  echo $it.'('.$data['value'].')<br>';
  
 

  }
  
  
  echo "<b>CHECKPOINTS</b>(time)<br/>";
  
  $verif='SELECT * FROM checkpoint WHERE id_player='.$id.' ORDER BY id DESC;'; 
  $req=requete($verif);
  $bite=0;
  while ($data = mysqli_fetch_assoc($req))
  {
  $it=$data['objet'];
  echo $it.'('.$data['time'].')<br>';
  
 

  }


  ?>