<?php  include("include/panel.php"); 
$endroit="à la gare";


 
 ?>
<div id="texte">
  <p>Vous posez votre piteux s&eacute;ant sur le sol &agrave; vos heures perdues, et avez pris l'habitude de faire les poches de ceux qui s'arr&ecirc;tent, tandis que vous leur racontez des bobards sur leur avenir. Ce m&eacute;tier peut etre tr&egrave;s tr&egrave;s enrichissant, mais &agrave; force de tra&icirc;ner dans la fange, vous ne savez plus trop ce qui est beau ou laid, bien ou mal.</p>
<p> 
    <?php
	set_stat($nom,'karma',$sex);
set_stat($nom,'sex',$karma);
if($money>100)
{
update_stat($nom,'money','-100');
}
else
{
set_stat($nom,'money','0');
}

	$m2="J'invente une nouvelle joke";
	$v2="paris/gare/1gare_bethemendiant";
	$m3="Je retourne crouner";
	$v3="paris/gare/1gare";

	$hapen=$nom;
	 $_SESSION['flashsene']='1gare_mendiant';

    ?>
    

    
</p>
 
<?php  ?>

 
























