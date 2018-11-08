<?php

   
   
$char1=$_SESSION['char1'];
$char2=$_SESSION['char2'];
$char3=$_SESSION['char3'];
   
   
  
	?>

<p align="center">
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="400" height="200">
      <param name="movie" value="../FUCK/check2.swf" />
      <param name="quality" value="high" />
      <embed src="../FUCK/check2.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="400" height="200"></embed>
    </object>
  </p>
  <p align="center">Character Name:  </p>

    	<div align="center">
		<form action='filtre.php' method='post'>
		
    	  <input type="text" name="nomp" id="nom4" /> 
    	  </p>
  	         
    	<p align="center">Choose your skin!</p>
  <form method="post" action="filtre.php">
  <p align="center">
      <input name='skin' type='radio' value='cha' checked="checked">
    un pitre</p>
  <p align="center">
    <input type='radio' name='skin' value='ours' />
    un foutriquet</p>
  <p align="center">
    <input type='radio' name='skin' value='grine' />
    une femme </p>
  <p align="center">Quel genre de personne etes vous ? <br />
    Decrivez vous tels que les autres personnages<br />
    vont percevoir votre caract&egrave;re: </p>
  <p align="center">
    <textarea name="bio" cols="50" rows="8" id="nomp"></textarea>
  </p>
  <p align="center">
    <input name="v" type="hidden" id="sexe" value="check3" />
		   
		   
		   <input name="submit" type="submit" id="Submit" value="Goldorak Go!" />
		   
		   <input type="hidden" name="ids" id="ids" value="<?php echo $ids; ?>" >
      <?php 

$_SESSION['nom']=$nom;
$_SESSION['noma']=$noma;
$_SESSION['hapen']=$hapen;
 
   
  $_SESSION['char1']=$char1;
$_SESSION['char2']=$char2;
$_SESSION['char3']=$char3;

?>
</p>
  </form>

 
    
  
   -------
   
  


