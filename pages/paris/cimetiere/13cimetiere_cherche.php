
<?php


include("include/panel.php"); 



$defunt=clean($_GET['entree']);
$defunt=strtolower($defunt);

?>

<div id="texte">

  <p>Vous arpentez les t�n�breuses all�es.</p>
  <p>
    <?php
	$dead=mysqli_fetch_assoc(requete('SELECT * FROM players WHERE life<=0 AND nom="'.$defunt.'";'));
	


if(!$dead)
{
echo "<p>Vous ne trouvez aucune tombe au nom de votre ami.</p>";
$_SESSION['flashsene']='13cimetiere';
}
else
{
echo "<br>La tombe de ".$dead['nom']." est l�. Vous chialez doucement et vous vous souvenez alors que vous l'avez toujours detest�.";
		
		$m2="Je le deterre";
		$v2="paris/cimetiere/13deterre";  
		$_SESSION['tombe']=$dead['nom'];
		$_SESSION['flashsene']='13tombe';
		$hapen=$dead['nom'];
		
}

$entree='';
$entree2='';

 if ($present&&$present!=$fantome)
 {
 echo $present." est l�, habill� en noir, et chiale comme une madeleine. On dirait qu'il fait expr�s de troubler votre recueillement. <br>";
 $hapen=$present;
$m4=$present.' est plut�t louche. Je ferais mieux de le fumer';
$v4="sp/fume"; 
 
 }

$m1="Je cherche encore";
$v1="paris/cimetiere/13cimetiere";     
 
   
 
$m5="Je me tire";
$v5="paris/_street/streetouest"; 





    ?>
  </p>
 


 
