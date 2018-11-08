 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
<link rel="stylesheet" type="text/css" href="../blektre.css" />
</head>

 
<form method="post" action="debugsend.php" >
  <p>Quel genre de bug avez vous rencontre ?
    <input type="hidden" name="ecran" id="ecran" value="<?php echo $_GET['lol']; ?>" />
  </p>
  <p>
    <input name="animation" type="checkbox" id="animation" value="oui" />
    probl&egrave;me d'image ou d'animation</p>
  <p>
    <input name="autre" type="checkbox" id="autre" value="pb" />
  autre</p>
  <p>details</p>
  <p>
    <textarea name="details" cols="40" rows="5" id="details"></textarea>
    &nbsp;</p>
  <p><input type="submit" />&nbsp;</p>
  <p>&nbsp; </p>
</form>

