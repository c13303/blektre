<?php exit('moue'); ?>

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
$email=$_GET['email'];
require('include/connexion.php');

if($poss!='pinedejaguar')
{
echo 'Fuck you lol';
exit;
}

// CHECK IF ACTIVATED

$active=mysqli_fetch_assoc(requete('SELECT active FROM accounts WHERE nom="'.$ak.'";'));
$active=$active['active'];
if ($active==1)
{
echo 'Account deje active. <a href="_reg_desactiver.php?ak='.$ak.'&poss=pinedours">Desactiver ?</a>';
exit;
}

echo 'Account desactive. <a href="_register4.php?ak='.$ak.'&poss=pinedejaguar&email='.$email.'"> Activer ?</a>';

?>

</body>