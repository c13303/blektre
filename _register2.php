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

<div id='texte'>

  <div align="center">
      <?php
	  require('include/connexion.php');
require('include/fonctions.php');


$nom_a=clean($_POST['nom']);
$email=clean($_POST['email']);
$verif=clean($_POST['verif']);
$password=clean($_POST['password']);
$password2=clean($_POST['password2']);
$motive=clean($_POST['motive']);
if(!$motive) exit('allons, un petit effort keumeme.');
$verif=strtolower($verif);
if($verif!="corbier")
{
echo 'wrong verif dude. Traille eugene.';
exit;
}

//echo $nom_a;


//CHECK NEW PLAYER IP
			 function get_ip() {
    if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    elseif(isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ip  = $_SERVER['HTTP_CLIENT_IP'];
    }
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip; 
}
 $ip=get_ip();

//// CHECK DA ACCOUNT NAME



$acountz=requete('SELECT * FROM accounts;');
while($ak=mysqli_fetch_assoc($acountz))
{
	if($ak['nom']==$nom_a || $ak['email']==$email)
	{
		echo 'Nom de compte ou email deja existant';
		exit();
	}
}

// CHECK PASS

	if ($password=='')
					{
					echo "entrez un password svp";
					exit;
					}

			
			
					if ($password2!=$password)
							{
							 echo "<br><br>Bad password confirmation. please traille aguene.";
		
							 exit;
							}			
			
			
 
		
		
		
			
		////INSERT THE NEW ACCOUNT
		
		
requete('INSERT INTO accounts VALUES(NULL,"'.$nom_a.'","'.$password.'","'.$email.'",0,0,0,1,"'.$motive.'");');
$from='From: valid-blektre@ci0.org';
echo 'Votre compte est e present actif
<p>account name:'.$nom_a.'</p>
<a href="index.php"> Loguez vous avec vos identifiants sur BLEKTRE.</a>


<br/><br/>Merci et e biental.';

// mail('erreure@gmail.com','Blektre account', ' 
// Nom:'.$nom_a.' 
 //pass:'.$password.' 
 
// Motivation:'.$motive.'
 
 //Email: '.$email.'
 
 //Ip:'.$ip.'
 
// link:
// http://kanar.ci0.org/blektre/_register3.php?ak='.$nom_a.'&poss=pinedejaguar&email='.$email.'
 
// ', $from);


			
			?>

    
    

    
    
    

</body>
</html>
