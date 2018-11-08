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


  <p align="center"><a href="voyante_entree.php">INSERT/MODIF</a> / <a href="voyante_pedia.php">[afficher tout le dico] </a><?php

include("../include/connexion.php");

$keyword=$_POST['keyword'];
$keyword=strtolower($keyword);
$alias=$_POST['alias'];
$define=$_POST['define'];

$verif=mysqli_fetch_assoc(requete('SELECT * FROM pedia WHERE need="'.$keyword.'";'));
if($verif)
{
$def=$verif['definition'];
$alias=$verif['alias'];
include('voyante_modif.php');
exit;
}

if($alias)
{
$verif=mysqli_fetch_assoc(requete('SELECT alias,definition FROM pedia WHERE need="'.$alias.'";'));
	if(!$verif['alias']&&$verif['definition'])
		{
		requete('INSERT INTO pedia VALUES ("'.$keyword.'","'.$alias.'","");');
		echo "INSERT ALIAS OK";
		}
		else
		{
		echo "LOL TROP FORT: Definition inexistante pour l'alias";
		}
		
	exit;
}

if($define)
{
requete('INSERT INTO pedia VALUES("'.$keyword.'","","'.$define.'");');
echo "INSERT OK";

}
else
{
echo "TA PAS MIS LA DEF CONNARD lol trop fort";
}



?>
    <a href="voyante_entree.php">INSERT/MODIF</a> / <a href="voyante_pedia.php">[afficher tout le dico] </a>