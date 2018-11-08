<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>

<body>
<?php require('fonctions.php');

$details=clean($_POST['details']);
$anime=$_POST['animation'];
$page=$_POST['ecran'];
mail('erreure@gmail.com','blektre bug signalé','ecran:'.$page.' , probleme animation:'.$anime.'

'.$details,'From:blektre@blektre.info');


?>
Merci d'avoir signalé ce bug. Je vais m'y attacher prochainement.
</body>
</html>
