<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
<link rel="stylesheet" type="text/css" href="blektre.css" />
<style type="text/css">
<!--

-->
</style>
</head>

<body>
<?php

$ak=$_GET['ak'];
$poss=$_GET['poss'];
require('include/connexion.php');

// CHECK IF ACTIVATED



if($poss=='pinedours')
{
requete('UPDATE accounts SET active=0 WHERE nom="'.$ak.'";');
mail($email, "Blektre desactivation", "Votre account ".$ak." a ete desactive, petit foutriquet! http://blektre.5tfu.org ", "From: blektre@ardkor.com");

echo 'Account desactive.';
}
else
{
echo 'Fuck you lol';
}
?>

</body>